<?php
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
</head>
<style>
.tabs{
height: auto;
white-space: normal;
}
.tab{
display: block;
width: 100%;
border-bottom: 1px solid #800000;
}
.tab-content{
height: 200px;
width: 100%;
background: #fcfcfc;
border:1px solid #800000;
}
.indicator{
display: none;
}

</style>
<body>
  <?php include 'navbar.php';?>

	<ul id="slide-out" class="sidenav">
    <li><a class="subheader">Courses Available</a></li>
		<li class="no-padding">
			<ul class="collapsible collapsible-accordion">
				<a class="collapsible-header">Senior High<i class="material-icons">arrow_drop_down</i></a>
				<div class="collapsible-body">
					<ul>
						<li><a class="subheader">Academic</a></li>
						<li><a href="#!">ABM</a></li>
						<li><a href="#!">HUMSS</a></li>
						<li><a class="subheader">Technical Vocational</a></li>
						<li><a href="#!">TRS</a></li>
						<li><a href="#!">HRS</a></li>
						<li><a href="#!">ICT</a></li>
					</ul>
				</div>
			</ul>
		</li>
    <li><div class="divider"></div></li>
    <li class="no-padding">
			<ul class="collapsible collapsible-accordion">
			<a class="collapsible-header">College<i class="material-icons">arrow_drop_down</i></a>
			<div class="collapsible-body">
				<ul>
					<li><a href="#!">BSHRM</a></li>
					<li><a href="#!">BSTRM</a></li>
					<li><a href="#!">BSIS</a></li>
					<li><a href="#!">BSAT</a></li>
					<li><a href="#!">AIT</a></li>
					<li><a href="#!">Caregiver</a></li>
				</ul>
			</div>
		</ul>
		</li>
  </ul>
	<ul class="right hide-on-med-and-down">
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Senior High<i class="material-icons right">arrow_drop_down</i></a></li>
      <ul id="dropdown1" class="dropdown-content">
				<li><a class="subheader">Academic</a></li>
				<li><a href="#!">ABM</a></li>
				<li><a href="#!">HUMSS</a></li>
				<li><a class="subheader">Technical Vocational</a></li>
				<li><a href="#!">TRS</a></li>
				<li><a href="#!">HRS</a></li>
				<li><a href="#!">ICT</a></li>
      </ul>
  </ul>
	<ul class="right hide-on-med-and-down">
			<li><a class="dropdown-trigger" href="#!" data-target="dropdown2">College<i class="material-icons right">arrow_drop_down</i></a></li>
			<ul id="dropdown2" class="dropdown-content">
				<li><a href="#!">BSHRM</a></li>
				<li><a href="#!">BSTRM</a></li>
				<li><a href="#!">BSIS</a></li>
				<li><a href="#!">BSAT</a></li>
				<li><a href="#!">AIT</a></li>
				<li><a href="#!">Caregiver</a></li>
			</ul>
	</ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger">See Available Courses</a>

	<script>
		$(document).ready(function(){
    	$('.sidenav').sidenav();
  	});
		$(document).ready(function(){
			$('.collapsible').collapsible();
		});
		   $('.dropdown-trigger').dropdown();
	</script>
</body>
</html>
