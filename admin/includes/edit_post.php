<?php
if(isset($_GET['p_id'])){
    $id=$_GET['p_id'];

}

 $query="SELECT * FROM aboutus WHERE id=$id";
 $select_poste_by_id=mysqli_query($connection,$query);
 while($row=mysqli_fetch_assoc($select_poste_by_id)){
     $id=$row['id'];
     $about_title=$row['about_title'];
     $about_content=$row['about_content'];
    
 }
if(isset($_POST['update_post'])){
    
    $about_title=$_POST['about_title'];
    $about_content=$_POST['about_content'];
   

    $query="UPDATE aboutus SET about_title = '{$about_title}', about_content='{$about_content}' WHERE id={$id}";
        
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
<label for="Title">Title</label>
<input value="<?php echo $about_title; ?>" type="text" class="form-control" name="about_title">
</div>

<div class="form-group">
<label for="author">Content</label>
<input value="<?php echo $about_content; ?>" type="text" class="form-control" name="about_content">
</div>

<!-- <div class="form-group">
<label for="date">Date</label>
<input value="<?php echo $post_date; ?>" type="text" class="form-control" name="date">
</div>

<div class="form-group">
<label for="image">Image</label>
<img width="100" src="../images/<?php echo $post_image; ?>"><input type="file" name="image">
</div>

<div class="form-group">
<label for="content">Content</label>
<textarea value="" class="form-control" id="" cols="30" rows="10" type="text" name="content">
<?php echo $post_content; ?>
</textarea>
</div>

<div class="form-group">
<label for="tags">Tags</label>
<input value="<?php echo $post_tags; ?>" type="text" class="form-control" name="tags">
</div>

<div class="form-group">
<label for="comments">Comments</label>
<input value="<?php echo $post_comment; ?>" type="text" class="form-control" name="comments">
</div>

<div class="form-group">
<label for="status">Status</label>
<input value="<?php echo $post_status; ?>" type="text" class="form-control" name="status">
</div> -->

<div class="form-group">
<input class="btn btn-primary" type="submit" name="update_post" value="Update Post">

</div>
</form>