 <?php
 include 'sessioncheck.php';
include 'db_con.php';

$select_course = "SELECT course_name FROM course";
$course_query = mysqli_query($con, $select_course);

$logo_course = "SELECT course_name FROM course";
$logo_query = mysqli_query($con, $select_course);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.min.js"></script>

    <style>
    	.img{
    		padding-top: 5px;
    		padding-left: 5px;
    	}
    	.nav-wrapper{
    		background-color: #800000;
    	}
    .btn-flat:hover{
    	background-color: #708c98;
    	color: #000;
    }
    .modal-close{
    	border-radius: 50%;
    }
    .pad{
    	padding-right: 20px;
    }
		.helper{
			color:#777;
		}
		.card-content a:hover{
			background-color: #800000;
			color: #fff;
		}
		.card-content:hover{
			background-color: #800000;
			color: #fff;
			cursor: pointer;
		}
		#modal_user{
			overflow: hidden;
		}

    </style>
</head>
<body>
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<a href="add_data.php" class="brand-logo hide-on-med-and-down"><img src="image/pwu2.png" width="25%" class="img"></a>
				<a href="add_data.php" class="brand-logo center hide-on-large-only show-on-medium-and-down"><img src="image/pwu2.png" class="img" width="25%"></img></a>
				<a href="#" data-target="sidenavbar" class="sidenav-trigger "><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down" >
			<ul class="right">
				<li><button data-target="modal_announcement" class="modal-trigger  btn-flat waves-effect waves-light white-text"> Announcement</button></li>
				<li><button data-target="modal_pictures" class="modal-trigger  btn-flat waves-effect waves-light white-text"> Pictures</button></li>
				<li><button data-target="modal_org_pres" class="modal-trigger  btn-flat waves-effect waves-light white-text"> Org President</button></li>
				<li><button data-target="modal_prom_vid" class="modal-trigger  btn-flat waves-effect waves-light white-text"> Promotional Video</button></li>
				<li><button data-target="modal_facility" class=" modal-trigger  btn-flat waves-effect waves-light white-text"> Facilities</button></li>
				<li><button data-target="modal_logo" class="modal-trigger  btn-flat waves-effect waves-light white-text"> Logos</button></li>
				<li><button data-target="modal_user" class="modal-trigger  btn-flat waves-effect waves-light white-text"> User</button></li>
				<li><button data-target="modal_course" class="modal-trigger btn-flat waves-effect waves-light white-text"> Course</button></li>
				<li><button data-target="modal_faculty" class=" modal-trigger btn-flat waves-effect waves-light white-text"> Faculty</button></li>

			</ul>
		</div>
		</nav>
	</div>
	<!-- end nav -->
	<ul class="sidenav" id="sidenavbar" >
		<a href="#" class="sidenav-close btn-flat right">&times</a><br><p></p>
		<li><button data-target="modal_announcement" class="hoverable modal-trigger btn-flat waves-effect waves-light">ADD Announcement</button></li>
		<li><button data-target="modal_pictures" class="hoverable modal-trigger btn-flat waves-effect waves-light">Add Pictures</button></li>
		<li><button data-target="modal_org_pres" class="hoverable modal-trigger btn-flat waves-effect waves-light">Add Org President</button></li>
		<li><button data-target="modal_prom_vid" class="hoverable modal-trigger btn-flat waves-effect waves-light">Add Promotional Video</button></li>
		<li><button data-target="modal_facility" class="hoverable  modal-trigger btn-flat waves-effect waves-light">Add Facilities</button></li>
		<li><button data-target="modal_logo" class="hoverable modal-trigger btn-flat waves-effect waves-light">Add Logos</button></li>
		<li><button data-target="modal_user" class="hoverable modal-trigger btn-flat waves-effect waves-light">Add User</button></li>
		<li><button data-target="modal_course" class="hoverable modal-trigger btn-flat waves-effect waves-light">Add Course</button></li>
		<li><button data-target="modal_faculty" class="hoverable modal-trigger btn-flat waves-effect waves-light">Faculty</button></li>
	</ul>
	<!-- modal faculty -->
	<div class="modal" id="modal_faculty">
		<div class="modal-content">
			<button class="modal-close btn btn-flat right waves-effect waves-light">&times</button><br><br>
			<form method="post" action="insert.php" enctype="multipart/form-data">
				<div class="file-field input-field">
					<div class="btn">
						<span><i class="material-icons">add_a_photo</i></span>
						<input type="file" name="faculty" accept="image/*" required="">
					</div>
					<div class="file-path-wrapper">
						<input type="text" name="" class="file-path validate" placeholder="Upload Organization Chart">
					</div>
				</div>
				<div>
					<div class="input-field">
						<select required="" name="fac_label" >
							<option value=""></option>
							<option value="Shs">Senior High School</option>
							<option value="college">College</option>
						</select>
						<small class="helper">You cant Submit the Image without choosing a Department <i class="material-icons tiny">arrow_upward</i></small>
					</div>
				</div>
				<button type="submit" class="btn right red darken-2" name="org_btn">Upload</button>
				<br><br>
			</form>
		</div>
	</div>
		<!-- modal announcement -->
	<div class="modal" id="modal_announcement">
		<div class="modal-content">
			<button class="modal-close btn btn-flat right waves-effect waves-light">&times</button>
			<br><br>
			<form method="post" action="insert.php">
				<div class="input-field">
					<i class="material-icons prefix">volume_up</i>
					<textarea class="materialize-textarea" name="announcement" id="announcement"></textarea>
					<label for="announcement">Announcement</label>
				</div>
				<button type="submit" name="announ_btn" class="btn red darken-2 waves-light waves-effect right">Post Announcement</button>
				<br><br>
			</form>
		</div>
	</div>
	<!-- modal end announcement -->
	<!-- modal pictures -->
	<div class="modal" id="modal_pictures">
		<div class="modal-content">
			<button class="modal-close btn btn-flat right waves-light waves-effect">&times</button>
			<br><br>
			<form method="POST" action="insert.php" enctype="multipart/form-data">
				<div class="file-field input-field">
					<div class="btn">
						<span><i class="material-icons">add_a_photo</i></span>
						<input type="file" name="event_pictures" accept="image/* " class="" >
					</div>
					<div class="file-path-wrapper">
							<input type="text" name="event_pic" class="file-path validate " placeholder="Upload Picture">
						</div>
				</div>
				<div class="input-field">
					<i class="material-icons prefix">closed_caption</i>
					<textarea class="materialize-textarea" id="caption" name="event_caption"></textarea>
					<label for="caption">Add a Caption</label>
				</div>
				<button type="submit" name="add_pic_btn" class="btn red darken-2 waves-effect waves-light right">Submit Picture</button>
				<br><br>
			</form>
		</div>
	</div>
	<!-- end modal pictures -->
	<!-- modal org pres -->
	<div class="modal" id="modal_org_pres">
		<div class="modal-content">
			<button class="btn-flat right modal-close waves-effect waves-light">&times</button>
			<br><br>
			<form method="POST" action="insert.php" enctype="multipart/form-data">
				<div class="file-field input-field">
					<div class="btn">
						<span><i class="material-icons">add_a_photo</i></span>
						<input type="file" name="org_pres_img" accept="image/*" required>
					</div>
					<div class="file-path-wrapper">
						<input type="text" class="file-path validate" name="" placeholder="Upload Picture">
					</div>
				</div>
				<!-- end file input -->
				<div class="input-field">
					<input type="text" id="pres_name" name="org_pres_name" required>
					<label for="pres_name">President Name</label>
				</div>
				<div class="input-field">
					<select name="course" required>
						<option></option>
						<?php while ($course_row = $course_query->fetch_assoc()):?>
							<option value="<?php echo $course_row['course_name'] ?>"><?php echo $course_row['course_name'] ?></option>
						<?php endwhile; ?>
					</select>
					<small class="helper">You cant Submit the Image without choosing a Course <i class="material-icons tiny">arrow_upward</i></small>
				</div>

				<button class="btn waves-effect waves-light red darken-2 right" type="submit" name="org_press_btn">Submit</button>
				<br><br>
			</form>
		</div>
	</div>
	<!-- end modal org pres -->
	<!-- start modal prom video -->
	<div class="modal" id="modal_prom_vid">
		<div class="modal-content">
			<form action="insert.php" method="post" enctype="multipart/form-data">
				<button class="modal-close btn btn-flat right">&times</button>
				<br><br>
				<div class="file-field input-field">
					<div class="btn">
						<span><i class="material-icons">video_label</i></span>
						<input type="file" name="prom_vid" accept="video/mp4, video/mkv">
					</div>
					<div class="file-path-wrapper">
					<input type="text" name="" class="file-path validate" placeholder="Promotional Video">
					<small class="helper">You cant Upload more than 100mb</small>
				</div>
				</div>
				<button type="submit" name="prom_vid_btn" class="btn red darken-2 waves-effect waves-light right">Sumbit</button>
				<br><br>
			</form>
		</div>
	</div>
	<!-- end prom video -->
	<!-- modal logo start -->
<div class="modal" id="modal_logo">
		<div class="modal-content">
			<button class="modal-close btn btn-flat right waves-effect waves-light right">&times</button>
			<br><br>
			<form method="post" action="insert.php" enctype="multipart/form-data">
				<div class="file-field input-field">
					<div class="btn">
						<span><i class="material-icons">image</i></span>
						<input type="file" name="logos" accept="image/*">
					</div>
					<div class="file-path-wrapper">
					<input type="text" name="course_logo" class="file-path validate" placeholder="Course Logo" required>
				</div>
				</div>
				<div class="input-field">
					<select name="logo_course" required>
						<option></option>
						<?php while ($logo_course = $logo_query->fetch_assoc()):?>
							<option value="<?php echo $logo_course['course_name'] ?>"><?php echo $logo_course['course_name'] ?></option>
						<?php endwhile; ?>
					</select>
					<small class="helper">You cant upload the Image without choosing a course</small>
				</div>

				<button type="submit" class="btn red darken-2 waves-light waves-effect right" name="logo_btn">Submit</button>
				<br><br>
			</form>
		</div>
</div>
	<!-- end modal logo -->
	<!-- start facility -->
	<div class="modal" id="modal_facility">
		<div class="modal-content">
			<button class="btn btn-flat modal-close right waves-effect waves-light">&times</button>
			<br><br>
			<form action="insert.php" method="post" enctype="multipart/form-data">
				<div class="file-field input-field">
				<div class="btn">
					<span><i class="material-icons">business</i></span>
				<input type="file" name="lightbox_image">
				</div>
				<div class="file-path-wrapper">
					<input type="text" name="" class="file-path validate" placeholder="Facility Image">
				</div>
			</div>
			<div class="input-field">
				<i class="material-icons prefix">closed_caption</i>
				<textarea class="materialize-textarea" id="fac_caption" name="fac_caption" required></textarea>
				<label for="fac_caption">Add a Caption</label>
			</div>
			<button type="submit" class="btn red darken-2 waves-light waves-effect right" name="fac_btn">Submit</button>
			<br><br>
			</form>
		</div>
	</div>
	<!-- end facility -->
	<!-- start user -->
	<div class="modal" id="modal_user" noscroll>
		<div class="modal-content">
			<button class="btn btn-flat modal-close waves-effect waves-light right">&times</button><br><br>
			<form action="insert.php" method="post">
				<div class="row">
					<div class="input-field col s5">
						<i class="material-icons prefix">accessibility</i>
						<input type="text" name="fname" value="" id="fname" class="validate" required>
						<label for="fname">First Name</label>
					</div>
					<div class="input-field col s2">
						<input type="text" name="mname" value="" id="mname" class="validate" maxlength="1">
						<label for="mname">Middle Initial</label>
					</div>
					<div class="input-field col s5">
						<input type="text" name="lname" value="" id="lname" class="validate" required>
						<label for="lname">Last Name</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="username" type="text" name="username" class="validate" required>
						<label for="username">Username</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">lock</i>
						<input id="pass" type="password" name="pass" class="validate" required>
						<label for="pass">Password</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">locked</i>
						<input class="validate" type="password" name="confirm_pass" id="con_pass">
						<label for="pass">Confirm Password</label>
					</div>

				</div>
				<button type="submit" name="register" class="btn red darken-2 waves-effect waves-light right">Submit</button>
				<br><br>
			</form>
		</div>
	</div>
<!-- navigation for admin display content -->
<!-- modal course  -->
<div class="modal" id="modal_course">
	<div class="modal-content">
		<button type="button" name="" class="btn-flat modal-close right">&times</button>
		<form class="" action="insert.php" method="post">
			<div class="input-field">
				<input type="text" name="course" value="" id="course" required>
				<label for="course">Course Name</label>
			</div>
			<div class="row">
				<div class="input-field col s6" required>
					<select class="" name="level">
						<option value="">Select  Course</option>
						<option value="College">College</option>
						<option value="Senior High School">Senior High School</option>
						<option value="TESDA">TESDA Course</option>
					</select>
				</div>
				<div class="input-field col s6">
					<select class="" name="duration" required>
						<option value="">Select Duration</option>
						<option value="4y">4 Years</option>
						<option value="3y">3 Years</option>
						<option value="2y">2 Years</option>
						<option value="6m">6 Months</option>
					</select>
				</div>
				<small class="helper">You cant proceed if one of the form is empty</small>
			</div>
			<input type="submit" name="course_btn" value="Add Course" class="btn red darken-4 right">
			<br><br>
		</form>
	</div>
</div>
<!-- end modal course -->
<!-- top row -->
<div class="row">
	<div class="col s6 m6 l3">
		<div class="card hoverable">
			<div class="card-content">
				<center><a href="view_announcement.php" class="btn btn-flat waves-effect waves-light">View Announcement</i></a></center>
			</div>
		</div>
	</div>
	<div class="col s6 m6 l3">
		<div class="card hoverable">
			<div class="card-content">
				<center><a href="view_events.php" class="btn btn-flat waves-effect waves-light">View Events</i></a></center>
			</div>
		</div>
	</div>
	<div class="col s6 m6 l3">
		<div class="card hoverable">
			<div class="card-content">
				<center><a href="view_org_pres.php" class="btn btn-flat waves-effect waves-light">View Org President</i></a></center>
			</div>
		</div>
	</div>
	<div class="col s6 m6 l3">
		<div class="card hoverable">
			<div class="card-content">
				<center><a href="view_video.php" class="btn btn-flat waves-effect waves-light">View Promotional Video</i></a></center>
			</div>
		</div>
	</div>
</div><!-- end top row -->

<!-- bottom row -->
<div class="row">
	<div class="col s6 m6 l3">
		<div class="card hoverable">
			<div class="card-content">
				<center><a href="view_facilities.php" class="btn btn-flat waves-effect waves-light">View Facilities</i></a></center>
			</div>
		</div>
	</div>
	<div class="col s6 m6 l3">
		<div class="card hoverable">
			<div class="card-content">
				<center><a href="view_logos.php" class="btn btn-flat waves-effect waves-light">View Logo's</i></a></center>
			</div>
		</div>
	</div>
	<div class="col s6 m6 l3">
		<div class="card hoverable">
			<div class="card-content">
				<center><a href="view_user.php" class="btn btn-flat waves-effect waves-light">View Users</i></a></center>
			</div>
		</div>
	</div>
	<div class="col s6 m6 l3">
		<div class="card hoverable">
			<div class="card-content">
				<center><a href="logout.php" class="btn btn-flat waves-effect waves-light ">Log out</a></center>
			</div>
		</div>
	</div>
</div><!-- end bottom row -->

	<script>
		$('.modal').modal();
		$('select').formSelect();
		$('.sidenav').sidenav({
			draggable:true,
			preventScrolling:true
		});

	</script>
</body>
</html>
