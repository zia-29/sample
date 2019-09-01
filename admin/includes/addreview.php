<?php
if(isset($_POST['create_post'])){

    $customer_review=$_POST['customer_review'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    $customer_name=$_POST['customer_name'];
   
    move_uploaded_file($post_image_temp, "../images/$post_image");

    $query = "INSERT INTO customer(customer_review, image ,customer_name)";
    $query .="VALUES('{$customer_review}','{$post_image}','{$customer_name}')";
    $add_post=mysqli_query($connection,$query);
    
    conform($add_post);

}
?>

<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="review">Review</label>
<textarea class="form-control" id="" cols="30" rows="10" type="text" name="customer_review"></textarea>
</div>

<div class="form-group">
<label for="image">Image</label>
<input type="file" name="image">
</div>



<div class="form-group">
<label for="tags">Customer Name</label>
<input type="text" class="form-control" name="customer_name">
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" name="create_post" value="Add Review">

</div>
</form>