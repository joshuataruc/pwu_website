<?php
include 'db_con.php';

$select_announce = "SELECT * FROM announcement ORDER BY id DESC";
$query = mysqli_query($con, $select_announce);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Announcements</title>
 	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
 	<style>
 		.card{
 			width: 50%;
 		}
 		.dates{
 			font-size: 10px;
 		}


 	</style>
 </head>
 <body>
 	<?php include 'navbar.php'; ?>
 	<center>
 	
 <?php while ($row = $query->fetch_assoc()):?>
<div class="card hoverable">
		<div class="card-content">
			<p><?php  echo $row['announcement'];?></p>
		</div>
		<div class="card-action red darken-4">
			<span class="right card-title white-text"><p class="dates"><?php echo $row['date_post']; ?></p></span><p></p>
		</div>
</div>
 <?php endwhile; ?>
</center>
 </body>
 </html>
