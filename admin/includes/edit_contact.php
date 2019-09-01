<?php
if(isset($_GET['p_id'])){
    $id=$_GET['p_id'];

}

 $query="SELECT * FROM contact WHERE contact_id=$id";
 $select_contact_by_id=mysqli_query($connection,$query);
 while($row=mysqli_fetch_assoc($select_contact_by_id)){
     $id=$row['contact_id'];
     $contact_name=$row['contact_name'];
     $contact_email=$row['contact_email'];
     $contact_message=$row['contact_message'];
    
 }
if(isset($_POST['update_post'])){
    
    $contact_name=$_POST['contact_name'];
    $contact_email=$_POST['content_email'];
    $contact_message=$_POST['ccontent_message'];

    $query="UPDATE contact SET contact_name = '{$contact_name}', contact_email='{$contact_email}', contact_message='{$contact_message}' WHERE contact_id={$id}";
        
        $update=mysqli_query($connection,$query);
        conform($update);
    }

?>


<form action="" method="post" enctype="multipart/form-data">

<!-- <div class="form-group">
<label for="post_category_id">Post Category Id</label>
<input value="" type="text" class="form-control" name="post_category_id">
</div> -->

<!-- <div class="form-group">
<select name="post_category_id" id="">

// $query= "SELECT * FROM categories";
// $select_category=mysqli_query($connection,$query);   

// conform($select_category);

// while($row=mysqli_fetch_assoc($select_category)){
// $cat_id= $row['cat_id'];
// $cat_title= $row['cat_title'];
// echo "<option value='{$cat_id}'>{$cat_title}</option>";

//}

</select>
</div> ?> -->

<div class="form-group">
<label for="Title">Name</label>
<input value="<?php echo $contact_name; ?>" type="text" class="form-control" name="contact_name">
</div>

<div class="form-group">
<label for="author">Email</label>
<input value="<?php echo $contact_email; ?>" type="text" class="form-control" name="contact_email">
</div>

<div class="form-group">
<label for="author">Email</label>
<textarea value="" class="form-control" id="" cols="30" rows="10" type="text" name="contact_message">
<?php echo $contact_message; ?>
</textarea>
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" name="update_post" value="Update Contact">

</div>
</form>