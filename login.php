<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>
<?php session_start(); ?>

 <?php include "includes/navigation.php" ?>
		 <br><br><br>
		 <?php

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$username = mysqli_real_escape_string($connection,$username);
	$password = mysqli_real_escape_string($connection,$password);

$query = "SELECT * FROM users WHERE user_name='{$username}'";
$select_user=mysqli_query($connection,$query);

if(!$select_user){
	die("query failed" .($connection));
}
while($row=mysqli_fetch_assoc($select_user)){
	$db_user_id = $row['user_id'];
	$db_username = $row['user_name'];
	$db_password = $row['user_password'];
	$db_firstname = $row['user_firtname'];
	$db_lastname = $row['user_lastname'];
	$db_user_role = $row['user_role'];

	if( $username === $db_username && $password === $db_password){
		$_SESSION['username'] = $db_username;
		$_SESSION['firstname'] = $db_firstname;
		$_SESSION['lastname'] = $db_lastname;
		$_SESSION['user_role'] = $db_user_role;
	
		header("Location:admin");
	}else{
	   header("Location:login.php");
	}


}
}

?>


 		<div class="row">
 			<h2> Login</h2>
 		</div>
 		<div class="contact">
 			<form id="contact" method="post" action="login.php">
 				<input type="text" name="username" class="form-control" placeholder="Username" required><br>
 				<input type="password" name="password" class="form-control" placeholder="Password" required><br>
 				<input type="submit" class="submit" name="submit" value="Login">
 			</form>
 		</div>
 		<br><br><br>
 		<?php include "includes/footer.php" ?>
 	</body>
 	</html>