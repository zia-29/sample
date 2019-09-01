<form action="" method="POST">
                            <div class="form-group">
                                <label for="heading_title">Edit Heading</label>
                          
                          
                          <?php
                          if(isset($_GET['edit'])){
                              $heading_id=$_GET['edit'];
                                $query= "SELECT * FROM heading WHERE heading_id = $heading_id";
                                $select_heading_id=mysqli_query($connection,$query);   
                                while($row=mysqli_fetch_assoc($select_heading_id)){
                                $heading_id= $row['heading_id'];
                                $heading_title= $row['heading_title'];
                                ?>
                                <input value="<?php if(isset($heading_title)){echo $heading_title;}  ?>" type="text" class="form-control" name="heading_title">
                                <?php }} ?>

                                    
                                <?php  //update query
                    if(isset($_POST['update'])){
                     $the_heading_title = $_POST['heading_title'];
                    $query="UPDATE heading SET heading_title = '{$the_heading_title}' where heading_id='{$heading_id}' ";
                    $update=mysqli_query($connection,$query);
                        if(!$update){
                            die("sql error" .mysqli_error($connection));
                        }
                }

                    ?>



                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="update" value="Update">
                            </div>
                        </form>