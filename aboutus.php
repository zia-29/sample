<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>
 <body>
 <?php include "includes/navigation.php" ?>
 		<br><br><br>
 		<div class="row">
		 <?php
		$query="SELECT * FROM aboutus";
		$select_all_about=mysqli_query($connection,$query);
		
		while($row=mysqli_fetch_assoc($select_all_about)){
			$id=$row['id'];
			$about_title=$row['about_title'];
			$about_content=$row['about_content'];
			
			?>

 		<h2><?php echo $about_title; ?></h2>
 			<p class="long-copy">
			 <?php echo $about_content; ?>
			</p>
			<br><br>
			 <hr>
			 <br><br>
		<?php } ?>
 		</div>

 		<br><br><br>
 		<!-- <div class="row">
 		<h2>WHAT WE DO</h2>
 			<p class="long-copy">
 			We are an IT and ITES development firm with a difference, our aim being not just to extend our Support, but to implement the Same.Though said already, we would like to re-iterate our motiveSolutions are numerous, but efficiency is unique. Client’s need-An effective Implementation to be solved. Our Principle-A Solution to to be implemented effectively & efficiently. When the Client’s needs blended with our strategic Principle comes into force, our motive is established. We do have a team which is an eclectic mix of innovative designers, strategic thinkers, technical wizards and Results-driven marketers that collaborate to bring out brands to its fullest life. We work so closely with our clients to help to reach their business goals and objectives and engineer their imagination into reality. We owe our Conviction ,to our stead-fast & indomitable team,who live and breathe digital. The ifelse Technologies fuses passion with expertise to achieve real-time business success.</p>
 		</div><br><br><br> -->
		 <?php include "includes/footer.php" ?>
 	</body>
 	</html>
