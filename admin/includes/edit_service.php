<?php
if(isset($_GET['p_id'])){
    $id=$_GET['p_id'];

}

 $query="SELECT * FROM service WHERE id=$id";
 $select_poste_by_id=mysqli_query($connection,$query);
 while($row=mysqli_fetch_assoc($select_poste_by_id)){
     $id=$row['id'];
     $service_title=$row['service_title'];
     $service_content=$row['service_content'];
    
 }
if(isset($_POST['update_post'])){
    
    $service_title=$_POST['service_title'];
    $service_content=$_POST['service_content'];
   

    $query="UPDATE service SET service_title = '{$service_title}', service_content='{$service_content}' WHERE id={$id}";
        
        $update=mysqli_query($connection,$query);
        conform($update);
    }

?>


<form action="" method="post" enctype="multipart/form-data">



<div class="form-group">
<label for="Title">Title</label>
<input value="<?php echo $service_title; ?>" type="text" class="form-control" name="service_title">
</div>

<div class="form-group">
<label for="author">Content</label>
<input value="<?php echo $service_content; ?>" type="text" class="form-control" name="service_content">
</div>



<div class="form-group">
<input class="btn btn-primary" type="submit" name="update_post" value="Update Service">

</div>
</form>