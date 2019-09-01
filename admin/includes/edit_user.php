<?php

if(isset($_GET['edit_user'])){
$the_user_id=$_GET['edit_user']; 

$query="SELECT * FROM users WHERE user_id= $the_user_id ";
                        $select_users=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($select_users)){
                            $user_id=$row['user_id'];
                            $user_name=$row['user_name'];
                             $user_password=$row['user_password'];
                            $user_firstname=$row['user_firstname'];
                            $user_lastname=$row['user_lastname'];
                            $user_email=$row['email'];
                            $user_role=$row['user_role'];
                        }

}


if(isset($_POST['edit_user'])){
   
    $user_firstname = $_POST['first_name'];
    $user_lastname = $_POST['last_name'];
    $user_role = $_POST['user_role'];

    $user_name = $_POST['user_name'];
    $user_email = $_POST['email'];
    $user_password = $_POST['user_password'];

    $query="UPDATE users SET user_firstname = '{$user_firstname}', user_lastname='{$user_lastname}',
    user_role='{$user_role}',user_name='{$user_name}',email='{$user_email}',
    user_password='{$user_password}'
    WHERE user_id={$the_user_id}";
}
    $edit_user=mysqli_query($connection,$query);
    conform($edit_user)

?>

<form action="" method="post" enctype="multipart/form-data">


<div class="form-group">
<label for="firstname">Firstname</label>
<input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="first_name">
</div>

<div class="form-group">
<label for="lastname">Lastname</label>
<input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="last_name">
</div>

<div class="form-group">
<select name="user_role" id="">
<option value='subscriber'><?php echo $user_role; ?></option>
<?php
if($user_role=='admin'){

echo "<option value='subscriber'>Subscriber</option>";

}else{

    echo "<option value='admin'>Admin</option>";
}

?>

</select>
</div>

<div class="form-group">
<label for="username">Username</label>
<input type="text" value="<?php echo $user_name; ?>" class="form-control" name="user_name">
</div>

<div class="form-group">
<label for="email">Email</label>
<input type="email" value="<?php echo $user_email; ?>" class="form-control" name="email">
</div>

<div class="form-group">
<label for="password">Password</label>
<input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" name="edit_user" value="Update">

</div>
</form>