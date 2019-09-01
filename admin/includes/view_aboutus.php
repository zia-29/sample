<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>

                        <tbody>

                        <?php
                        $query="SELECT * FROM aboutus";
                        $select_about=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($select_about)){
                            $id=$row['id'];
                            $about_title=$row['about_title'];
                            $about_content=$row['about_content'];
                            
                           
                            echo "<tr>";
                            echo "<td>{$id}</td>";
                            echo "<td>{$about_title}</td>";
                            echo "<td>{$about_content}</td>";
                            echo "<td><a href='aboutus.php?delete=$id'>Delete</a></td>";
                            echo "<td><a href='aboutus.php?source=edit_post&p_id={$id}'>Edit</a></td>";
                            echo "</tr>";
                        }
                        ?>    
                        
                        </tbody>
                        </table>

                       <?php

                            if(isset($_GET['delete'])){
                                $the_comment_id = $_GET['delete'];
                            $query= "DELETE FROM aboutus WHERE id={$id}";
                            $delete= mysqli_query($connection,$query);
                            header("Location:aboutus.php");


                            }


                        ?>