<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>
 <body>
 	<header>
	 <?php include "includes/navigation.php" ?>
		<div class="hero-text-box">


		<?php
		$query="SELECT * FROM heading";
		$select_all=mysqli_query($connection,$query);
		
		while($row=mysqli_fetch_assoc($select_all)){
			$heading_id=$row['heading_id'];
			$heading_title=$row['heading_title'];
			
			?>


		<h1><?php echo $heading_title; ?></h1>
		<a class="btn btn1" href="contactus.php">Subscribe</a>   
		<!-- <a class="btn btn2" href="#">Show me more</a>    -->
	 <?php	} ?>
 	</header>

 	<section class="section-features">
 		<div class="row">
		 <?php
		 $query="SELECT * FROM aboutus WHERE id=1;";
		$select_all_about=mysqli_query($connection,$query);
		while($row=mysqli_fetch_assoc($select_all_about)){
		$title=$row['about_title'];
		$content=$row['about_content'];
		if($select_all_about){
			
		}
		
		?> 
		<h2><?php echo $title; ?></h2>
		
 			<p class="long-copy">
 			<?php echo $content; ?></p>
			 <?php } ?>
 		</div><br><br>


		 <?php
		$query="SELECT * FROM service";
		$select_all=mysqli_query($connection,$query);
		
		$even = true;

		while($row=mysqli_fetch_assoc($select_all)){
			$id=$row['id'];
			$service_title=$row['service_title'];
			$service_content=$row['service_content'];
			
			?>

<?php if ($even){ ?>
 		<div class="row">
<?php } ?>
 			<div class="col span-1-of-2 box">
 				<h3><?php echo $service_title; ?></h3>
 				<p> <?php echo $service_content; ?><a class="a" href="service.php">read more</a></p>
 			</div>

 			
			 <?php if (!$even){ ?> 
</div>
<?php } ?>
<?php $even = !$even; ?>

<?php } ?>
 						
			
</section>



<div class="row">

	<h2>Look what our customer say</h2>
</div>
<section class="class-testimonials">

<div class="row">
<?php
                    $query="SELECT * FROM customer";
                    $select_all_customer=mysqli_query($connection,$query);

                    while($row=mysqli_fetch_assoc($select_all_customer)){
                        $customer_review=$row['customer_review'];
                        $image=$row['image'];
						$customer_name=$row['customer_name'];
						
						?>

	<div class="col span-1-of-3">
		<blockquote>
			<?php echo  $customer_review; ?>
		 <cite><img src="resources/css/img/<?php echo $image; ?>"><?php echo  $customer_name; ?></cite>
		 
		</blockquote>
		
	</div>
	<?php } ?>
		
</div>

</div>

</section>
<br><br>  
<?php include "includes/footer.php" ?>
 </body>

</html>