<?php

function conform($result){
    global $connection;
    if(!$result){
        die("query failed" .mysqli_error($connection));
    }
}

function insert_heading(){
    global $connection;

    if(isset($_POST['submit'])){
        $heading_title=$_POST['heading_title'];

        if($heading_title == "" || empty($heading_title)){
            echo "This field cannot be empty";
        }else{
            $query="INSERT INTO heading(heading_title)";
            $query .="VALUES ('{$heading_title}')";
            $creat_heading=mysqli_query($connection,$query);

            if(!$creat_heading){
                die("Query failed" .mysqli_error($connection));
            }
        }
      }      
}

function find_all_heading(){
    global $connection;

    $query= "SELECT * FROM heading";
                $select_heading=mysqli_query($connection,$query);   
                 while($row=mysqli_fetch_assoc($select_heading)){
                    $heading_id= $row['heading_id'];
                    $heading_title= $row['heading_title'];
                    echo "<tr>";
                    echo "<td>{$heading_id}</td>";
                    echo "<td>{$heading_title}</td>";
                    echo "<td><a href='heading.php?delete={$heading_id}'>Delete</a></td>";
                    echo "<td><a href='heading.php?edit={$heading_id}'>Edit</a></td>";
                    echo"</tr>";
                }

}

function delete_heading(){
    global $connection;

if(isset($_GET['delete'])){
    $the_heading_id = $_GET['delete'];
   $query="DELETE FROM heading WHERE heading_id = {$the_heading_id}";
   $delete=mysqli_query($connection,$query);
   header("Location:heading.php");
   }
}
?>