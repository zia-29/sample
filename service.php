<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>
 <body>
 <?php include "includes/navigation.php" ?>
 		<br><br><br>
		 <div class="row">
			<h2>OUR SERVICES</h2>  
		</div>

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
				<p> <?php echo $service_content; ?></p>
		 	</div>
	<?php if (!$even){ ?> 
		</div> 
	<?php } ?>

	<?php $even = !$even; ?>

<?php } ?>
		
			
<?php include "includes/footer.php" ?>
 	</body>
 	</html>
