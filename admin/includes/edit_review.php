<?php
if(isset($_GET['p_id'])){
    $id=$_GET['p_id'];

}

 $query="SELECT * FROM customer WHERE id=$id";
 $select_review_by_id=mysqli_query($connection,$query);
 while($row=mysqli_fetch_assoc($select_review_by_id)){
     $id=$row['id'];
     $customer_review=$row['customer_review'];
     $post_image=$row['image'];
     $customer_name=$row['customer_name'];
 }
if(isset($_POST['update_review'])){
    
    $customer_review=$_POST['customer_review'];
    $customer_review=$_POST['customer_review'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    $customer_name=$_POST['customer_name'];
    move_uploaded_file($post_image_temp, "../images/$post_image");

    if(empty($post_image)){
        $query = "SELECT * FROM customer WHERE id= $id ";
        $select_image=mysqli_query($connection,$query);

        while($row=mysqli_fetch_array($select_image)){
            $post_image=$row['image'];
        }
    }

   

    $query="UPDATE customer SET customer_review = '{$customer_review}', image='{$post_image}', customer_name='{$customer_name}' WHERE id={$id}";
        
        $update=mysqli_query($connection,$query);
        conform($update);
    }

?>


<form action="" method="post" enctype="multipart/form-data">


<div class="form-group">
<label for="content">Review</label>
<textarea value="" class="form-control" id="" cols="30" rows="10" type="text" name="customer_review">
<?php echo $customer_review; ?>
</textarea>
</div>

<div class="form-group">
<label for="image">Image</label>
<img width="100" src="../images/<?php echo $post_image; ?>"><input type="file" name="image">
</div>

<div class="form-group">
<label for="status">Customer Name</label>
<input value="<?php echo $customer_name; ?>" type="text" class="form-control" name="customer_name">
</div> 

<div class="form-group">
<input class="btn btn-primary" type="submit" name="update_review" value="Update Review">

</div>
</form>