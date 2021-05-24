<?php 

include 'sessioncheck.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- 	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/materialize.min.js"></script> -->
      <style>
      	.nav-wrapper{
    background-color: #800000;
	  }
	  .img{
	    padding: 5px;
	  }
	  .hov:hover{
	  	color:black;
	  	background-color: black;
	  }
	  

  
      </style>
</head>
<body>
<nav>
	<div class="nav-wrapper">
		<a href="add_data.php" class="brand-logo left hide-on-med-and-down"><img src="image/pwu2.png" width="25%" class="img"></a>
		<a href="add_data.php" class="brand-logo center hide-on-large-only show-on-medium-and-down"><img src="image/pwu2.png" class="img" width="25%"></img></a>
		<a href="#" data-target="view_nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right">
			<li><a href="view_announcement.php">Announcement</a></li>
			<li><a href="view_events.php">Pictures</a></li>
			<li><a href="view_org_pres.php">Org President</a></li>
			<li><a href="view_video.php">Promotional Video</a></li>
			<li><a href="view_facilities.php">Facilities</a></li>
			<li><a href="view_logos.php">Logos</a></li>
			<li><a href="view_user.php">Users</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>



<ul class="sidenav" id="view_nav" >
			<li><a class="hov  hoverable" href="view_announcement.php">Announcement</a></li>
			<li><a class="hov hoverable" href="view_events.php">Pictures</a></li>
			<li><a class="hov hoverable" href="view_org_pres.php">Org President</a></li>
			<li><a class="hov hoverable" href="view_video.php">Promotional Video</a></li>
			<li><a class="hov hoverable" href="view_facilities.php">Facilities</a></li>
			<li><a class="hov hoverable" href="view_logos.php">Logos</a></li>
			<li><a class="hov hoverable" href="view_user.php">Users</a></li>
			<li><a class="hov hoverable" href="logout.php">Logout</a></li>
</ul>

<script>
	$('.sidenav').sidenav();
</script>
</body>
</html>

