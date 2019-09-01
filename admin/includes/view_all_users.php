<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                </tr>
                            </thead>

                        <tbody>

                        <?php
                        $query="SELECT * FROM users";
                        $select_users=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($select_users)){
                            $user_id=$row['user_id'];
                            $user_name=$row['user_name'];
                            $user_firstname=$row['user_firstname'];
                            $user_lastname=$row['user_lastname'];
                            $user_email=$row['email'];
                            $user_role=$row['user_role'];
                           
                            echo "<tr>";
                            echo "<td>{$user_id}</td>";
                            echo "<td>{$user_name}</td>";
                            echo "<td>{$user_firstname}</td>";
                            echo "<td>{$user_lastname}</td>";
                            echo "<td>{$user_email}</td>";
                            echo "<td>{$user_role}</td>";
                            
                            echo "<td><a href='users.php?admin={$user_id}'>Admin</a></td>";
                            echo "<td><a href='users.php?subscriber={$user_id}'>Subscriber</a></td>";
                            echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
                            echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
                            echo "</tr>";
                        }
                        
                        ?>    
                        
                        </tbody>
                        </table>

                        <?php

                        if(isset($_GET['admin'])){
                            $the_user_id = $_GET['admin'];
                            $query= "UPDATE users SET user_role='admin' WHERE user_id=$the_user_id ";
                            $approve_comment_query= mysqli_query($connection,$query);
                            header("Location:users.php");


                            }

                            if(isset($_GET['subscriber'])){
                            $the_user_id = $_GET['subscriber'];
                            $query= "UPDATE users SET user_role='subscriber' WHERE user_id=$the_user_id";
                            $unapprove_comment_query= mysqli_query($connection,$query);
                            header("Location:users.php");


                            }


                            if(isset($_GET['delete'])){
                                $post_id = $_GET['delete'];
                            $query= "DELETE FROM users WHERE user_id={$user_id}";
                            $delete= mysqli_query($connection,$query);
                            header("Location:users.php");


                            }


                        ?>