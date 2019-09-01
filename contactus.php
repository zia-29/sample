<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>
 <body>
 <?php include "includes/navigation.php" ?>
		 <br><br><br>
		 <?php

if(isset($_POST['submit'])){

$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$query= "INSERT INTO contact (contact_name, contact_email, contact_message) 
VALUES ('$name','$visitor_email','$message')";

$create_comment_query=mysqli_query($connection,$query);
if(!$create_comment_query){
   die("" .mysqli_error($connection));
}
}
?>
 		<div class="row">
 			<h2> WE ARE READY TO HEAR FROM YOU!</h2>
 		</div>
 		<div class="contact">
 			<form id="contact" method="post" action="contactus.php">
 				<input type="text" name="name" class="form-control" placeholder="Your Name" required><br>
 				<input type="email" name="email" class="form-control" placeholder="Your Email" required><br>
 				<textarea type="message" name="message" class="form-control" placeholder="Message" row="4" required></textarea><br>	 
 				<input type="submit" class="submit" name="submit" value="SEND MESSAGE">
 			</form>
 		</div>
 		<br><br><br>
 		<?php include "includes/footer.php" ?>
 	</body>
 	</html>