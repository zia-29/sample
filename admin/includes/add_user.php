<?php
if(isset($_POST['create_user'])){
   
    $user_firstname = $_POST['first_name'];
    $user_lastname = $_POST['last_name'];
    $user_role = $_POST['user_role'];
    $user_name = $_POST['user_name'];
    $user_email = $_POST['email'];
    $user_password = $_POST['user_password'];

    $query = "INSERT INTO users(user_firstname,user_lastname,user_role,user_name,
    email,user_password)";
    $query .="VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$user_name}',
    '{$user_email}','{$user_password}')";
    $add_user=mysqli_query($connection,$query);
    
    conform($add_user);

}
?>

<form action="" method="post" enctype="multipart/form-data">


<div class="form-group">
<label for="firstname">Firstname</label>
<input type="text" class="form-control" name="first_name">
</div>

<div class="form-group">
<label for="lastname">Lastname</label>
<input type="text" class="form-control" name="last_name">
</div>

<div class="form-group">
<select name="user_role" id="">
<option value='subscriber'>Select Options</option>
<option value="admin">Admin</option>
<option value='subscriber'>Subscriber</option>
</select>
</div>

<div class="form-group">
<label for="username">Username</label>
<input type="text" class="form-control" name="user_name">
</div>

<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" name="email">
</div>

<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" name="user_password">
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" name="create_user" value="Creat_user">

</div>
</form>