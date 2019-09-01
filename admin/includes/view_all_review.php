<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Review</th>
                                    <th>Image</th>
                                    <th>Customer Name</th>
                                </tr>
                            </thead>

                        <tbody>

                        <?php
                        $query="SELECT * FROM customer";
                        $select_customer=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($select_customer)){
                            $id=$row['id'];
                            $customer_review=$row['customer_review'];
                            $image=$row['image'];
                            $customer_name=$row['customer_name'];
                           
                            echo "<tr>";
                            echo "<td>{$id}</td>";
  
                            echo "<td>{$customer_review}</td>";
                
                            echo "<td><img width='100' src='../images/$image' alt='image'></td>";
                            echo "<td>{$customer_name}</td>";
                            
                            echo "<td><a href='review.php?source=edit_post&p_id={$id}'>Edit</a></td>";
                            echo "<td><a href='review.php?delete={$id}'>Delete</a></td>";
                            echo "</tr>";
                        }
                        ?>    
                        
                        </tbody>
                        </table>

                        <?php
                            if(isset($_GET['delete'])){
                                $post_id = $_GET['delete'];
                            $query= "DELETE FROM customer WHERE id={$id}";
                            $delete= mysqli_query($connection,$query);
                            header("Location:review.php");


                            }


                        ?>