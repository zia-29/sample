<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>

                        <tbody>

                        <?php
                        $query="SELECT * FROM contact";
                        $select_contact=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($select_contact)){
                            $id=$row['contact_id'];
                            $contact_name=$row['contact_name'];
                            $contact_email=$row['contact_email'];
                            $contact_message=$row['contact_message'];
                            
                           
                            echo "<tr>";
                            echo "<td>{$id}</td>";
                            echo "<td>{$contact_name}</td>";
                            echo "<td>{$contact_email}</td>";
                            echo "<td>{$contact_message}</td>";
                            echo "<td><a href='contact.php?delete=$id'>Delete</a></td>";
                            echo "<td><a href='contact.php?source=edit_post&p_id={$id}'>View & Edit</a></td>";
                            echo "</tr>";
                        }
                        ?>    
                        
                        </tbody>
                        </table>

                       <?php

                            if(isset($_GET['delete'])){
                                $the_comment_id = $_GET['delete'];
                            $query= "DELETE FROM contact WHERE contact_id={$id}";
                            $delete= mysqli_query($connection,$query);
                            header("Location:contact.php");


                            }


                        ?>