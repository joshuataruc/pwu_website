<?php
include 'db_con.php';

$select_video = "SELECT * FROM prom_vid ORDER BY id DESC LIMIT 1 ";
$query = mysqli_query($con, $select_video);
$video_row = $query->fetch_assoc();


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>PWU CDCEC Tarlac</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/materialize.min.js"></script>
</head>
<style>
.carousel{
	height: 100vh;
}
.opac{
	opacity: 0.5;
}
footer{
	background-color: #323232;
}
footer p{
	color: #f5f5f5;
	font-size: 11px;
	padding: .5px;
	margin: auto;
}
footer p .material-icons{
	font-size: 11px;
}
.txt{
	font-size: 25px;
	margin: auto;
	font-weight: bold;
}
.flow-txt{
	font-size: 20px;
}

</style>
<body>
	<?php include 'navbar.php'; ?>
<div class="">
	<div class="carousel carousel-slider" >

    <a class="carousel-item" href="#one!"><img src="slider/slider1.jpg" class="responsive-img"></a>
    <a class="carousel-item" href="#two!"><img src="slider/slider2.jpg" class="responsive-img"></a>
    <a class="carousel-item" href="#three!"><img src="slider/slider3.jpg" class="responsive-img"></a>
    <a class="carousel-item" href="#four!"><img src="slider/slider4.jpg" class="responsive-img"></a>
    
  </div>

	<div class="card-panel">
		<div class="container">
			<center><p class="txt">Vision</p></center>
		<p class="flow-txt">
		The PWU: A University that develops individuals through excellence in teaching, dynamic and relevant research and responsive service supported by evolving technology for global competence
		</p>
		<center><p class="txt">Mission</p></center>
		<p class="flow-txt">
			An enduring commitment to prepare the learner to continuously search for knowledge through a holistic education which treasures heritage, imbued with the core values of of personal integrity and spirituality, family solidarity and community participation.
		</p>
		<center><p class="txt">Objective</p></center>
		<ul class="flow-txt">
			<li>To develop curricula that will address the needs of society and industry.</li>
			<li>To update and systematize the process of recruiting and developing the University's Human resources</li>
			<li>To Create a climate that conducive to learning and facilitate interaction among students, faculty, staff and other stakeholders.</li>
			<li>To promote national and international community services and advocacies</li>
		</ul>
		</div>
	</div>

<!-- end parallax -->
<p></p>
<!-- promotional vids -->
<center>
	<video controls="" width="100%">
  	<source src="video/<?php echo $video_row['vids']; ?>" type="video/mp4">
  </video>
</center>

<footer>
	<center>
	<div>
		<p>Philippine Women's University - CDCEC Tarlac</p>
		<p>2nd & 3rd floor C&S bldg., Juan Luna St., Poblacion, Tarlac City, Tarlac 2300 Philippines </p>
		<p><i class="material-icons">call</i>(045) 982-2247
		<i class="material-icons">email</i>PWUTarlac2002@yahoo.com</p>
		<p><i class="fab fa-facebook"></i> pidab.tarlac</p>
	</div>
	</center>
</footer>
</div>
<script>
 $('.carousel').carousel({
 	fullWidth:true
 });
 autoplay();
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
}
// end carousel
  	$('.parallax').parallax();
  	//end parallax
</script>
</body>
</html>
