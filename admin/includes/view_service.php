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
                        $query="SELECT * FROM service";
                        $select_service=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($select_service)){
                            $id=$row['id'];
                            $service_title=$row['service_title'];
                            $service_content=$row['service_content'];
                            
                           
                            echo "<tr>";
                            echo "<td>{$id}</td>";
                            echo "<td>{$service_title}</td>";
                            echo "<td>{$service_content}</td>";
                            echo "<td><a href='services.php?delete=$id'>Delete</a></td>";
                            echo "<td><a href='services.php?source=edit_post&p_id={$id}'>Edit</a></td>";
                            echo "</tr>";
                        }
                        ?>    
                        
                        </tbody>
                        </table>

                       <?php

                            if(isset($_GET['delete'])){
                                $the_comment_id = $_GET['delete'];
                            $query= "DELETE FROM service WHERE id={$id}";
                            $delete= mysqli_query($connection,$query);
                            header("Location:services.php");


                            }


                        ?>