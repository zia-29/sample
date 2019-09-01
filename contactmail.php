<?php

if(isset($_POST['submit'])){

$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$query= "INSERT INTO contact (contact_name, contact_email, contact_message) 
VALUES ($name,'{$$visitor_email}','{$message}'";

$create_comment_query=mysqli_query($connection,$query);
if(!$create_comment_query){
   die("" .mysqli_error($connection));
}
}


$email_form='ziaurrahman2992@gmail.com';
$email_subject="New Form Submition";
$email_body="User Name: $name.\n".
"User Email: $visitor_email.\n".
"User Message: $message.\n";

$to="ziaurrahman2992@gmail.com";
$headers="Form:$email_from\r\n";
$headers="Reply-To:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$header);
header("Location:contact.html")
?>




                            if(isset($_POST['create_comment'])){
                                $post_id=$_GET['p_id'];

                                $comment_author = $_POST['comment_author'];
                                $comment_email = $_POST['comment_email'];
                                $comment_content = $_POST['comment_content'];
                            
                             
                            $query= "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status,
                             comment_date) VALUES ($post_id,'{$comment_author}','{$comment_email}','{$comment_content}','unapprove'
                             ,now())";

                             $create_comment_query=mysqli_query($connection,$query);
                            if(!$create_comment_query){
                                die("" .mysqli_error($connection));
                            }