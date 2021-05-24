<?php
include 'db_con.php';
// announcement
if (isset($_POST['announ_btn'])) {
	 $announce = mysqli_real_escape_string($con, $_POST['announcement']);
	 $date = date("Y-m-d");

	 $insert_announcement = "INSERT INTO announcement (announcement, date_post) VALUES ('$announce', '$date')";
	 if (mysqli_query($con, $insert_announcement) === TRUE) {
	 	header('location:announcement.php');
	 }
	 else{
	 	die($con->error);
	 }

}

// prom video
if (isset($_POST['prom_vid_btn'])) {
	$video_name = $_FILES['prom_vid']['name'];
	$video_type = $_FILES['prom_vid']['type'];
	$video_tmp = $_FILES['prom_vid']['tmp_name'];
	$video_extension = strtolower(pathinfo($video_name, PATHINFO_EXTENSION));

	if ($video_extension != "mp4" && $video_extension != "mkv") {
		header("location:add_data.php");
		exit;
	}
	else{
		$video = move_uploaded_file($video_tmp, "video/$video_name");
		$insert_video = "INSERT INTO prom_vid (vids) VALUES ('$video_name')";
		if (mysqli_query($con, $insert_video) === TRUE) {
			echo "new promotional video has been added";
		}
	}


}
// event pictures
if (isset($_POST['add_pic_btn'])) {


	$pic_name = $_FILES['event_pictures']['name'];
	$pic_tmp = $_FILES['event_pictures']['tmp_name'];
	$pic_type = pathinfo($pic_name, PATHINFO_EXTENSION);
	$date = date("y-m-d");
	$comment = mysqli_real_escape_string($con, $_POST['event_caption']);

	if ($pic_type != 'png' && $pic_type != 'jpg' && $pic_type != 'jpeg' && $pic_type != 'gif') {
		header("location:add_data.php");
		exit;
	}
	else{
		$pic = move_uploaded_file($pic_tmp, "event_pics/$pic_name");
		$insert_pic = "INSERT INTO event_pics (picture, caption, date_posted) VALUES ('$pic_name', '$comment', '$date')";
		if (mysqli_query($con, $insert_pic) === TRUE) {
			header('location:view_events.php');
		}
		else{
			die($con->error);
		}
	}

}


// register new admin

if (isset($_POST['register'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['pass']);
	$password_confirm = mysqli_real_escape_string($con, $_POST['confirm_pass']);
	$fname  = mysqli_real_escape_string($con, ucwords($_POST['fname']	));
	$mname  = mysqli_real_escape_string($con, ucwords($_POST['mname']));
	$lname  = mysqli_real_escape_string($con, ucwords($_POST['lname']));

 if (empty($mname)) {
 	 $midname = $mname;
 }
 else{
	  $midname = $mname . '.';
 }

	if ($password != $password_confirm) {
		echo "password didnt match";
		die();
	}
	else{
		$search_user = "SELECT * FROM users WHERE username = '".$username."' ";
		$search_query = mysqli_query($con, $search_user);
		$num_rows = mysqli_num_rows($search_query);
		if ($num_rows > 0) {
			echo "already taken";
		}
		else{
		 	$pass = md5($password);
			$insert_user = "INSERT INTO users (fname, mname, lname, username, password)VALUES('$fname','$midname', '$lname', '$username', '$pass')";
			if (mysqli_query($con, $insert_user) === TRUE) {
				header('location:view_user.php');
			}
			else{
				die($con->error);
			}
		}

	}
}

if (isset($_POST['org_btn'])) {
	$faculty = $_FILES['faculty']['name'];
	$faculty_tmp = $_FILES['faculty']['tmp_name'];
	$fac_info = pathinfo($faculty, PATHINFO_EXTENSION);
	$fac_label = mysqli_real_escape_string($con, $_POST['fac_label']);

	if ($fac_info != 'png' && $fac_info != 'jpg' && $fac_info != 'jpeg' && $fac_info != 'gif') {
	 die();
	}
	else{
			$upload_chart = move_uploaded_file($faculty_tmp, "org_chart/$faculty");
			$insert_fac = "INSERT INTO fac_chart (fac_img, department) VALUES ('$faculty', '$fac_label') ";
			if (mysqli_query($con, $insert_fac) === TRUE) {
				header('location:add_data.php');
			}
			else{
				die($con->error);
			}
		}
	

}

//org pres_name
if (isset($_POST['org_press_btn'])) {
$org_pic_name = $_FILES['org_pres_img']['name'];
$org_tmp = $_FILES['org_pres_img']['tmp_name'];
$org_type	= pathinfo($org_pic_name, PATHINFO_EXTENSION);
$course = mysqli_real_escape_string($con, $_POST['course']);
$org_name = mysqli_real_escape_string($con, $_POST['org_pres_name']);

if ($org_type != 'png' && $org_type != 'jpg' && $org_type != 'jpeg' && $org_type != 'gif') {
	header("location:add_data.php");
}
else{
	$org_pic = move_uploaded_file($org_tmp, "org_pres/$org_pic_name");
	$insert_org_pic = "INSERT INTO org_pres (org_pic, name, course) VALUES('$org_pic_name', '$org_name', '$course')";
	if (mysqli_query($con, $insert_org_pic) === TRUE) {
		header('location:view_org_pres.php');
	}
	else{
		die();
	}
}

}

//Facility
if (isset($_POST['fac_btn'])) {
echo $lightbox = $_FILES['lightbox_image']['name'];
$lightbox_tmp = $_FILES['lightbox_image']['tmp_name'];
 $lightbox_type = pathinfo($lightbox, PATHINFO_EXTENSION);
$fac_caption = mysqli_real_escape_string($con, $_POST['fac_caption']);

if ($lightbox_type != 'png' && $lightbox_type != 'jpg' && $lightbox_type != 'jpeg' && $lightbox_type != 'gif') {
	header("location:add_data.php");
}
else{
	$upload_fac =	move_uploaded_file($lightbox_tmp, "facilities/$lightbox");
	$insert_fac = "INSERT INTO facilities (fac_content, fac_caption) VALUES ('$lightbox', '$fac_caption')";
	if (mysqli_query($con, $insert_fac) === TRUE) {
		header('location:view_facilities.php');
	}
	else{
		die();
	}
}

}
//Course logo
if (isset($_POST['logo_btn'])) {
	$course_logo = $_FILES['logos']['name'];
	$logo_tmp = $_FILES['logos']['tmp_name'];
	$logo_type = pathinfo($course_logo, PATHINFO_EXTENSION);
	$logo_course = mysqli_real_escape_string($con, $_POST['logo_course']);

	if ($logo_type != 'png' && $logo_type != 'jpg' && $logo_type != 'jpeg' && $logo_type != 'gif') {
		header("location:add_data.php");
	}
	else{
		$upload_logo = move_uploaded_file($logo_tmp, "course_logo/$course_logo");
		$insert_logo = "INSERT INTO college_k12_logo (logo, course) VALUES ('$course_logo', '$logo_course') ";
		
		if (mysqli_query($con, $insert_logo)===TRUE) {
			header('location:view_logos.php');
		}
		else{
			die($con->error);
		}
	}

}
//course
if (isset($_POST['course_btn'])) {
	$course = mysqli_real_escape_string($con, $_POST['course']);
	$level = mysqli_real_escape_string($con, $_POST['level']);
	$duration = mysqli_real_escape_string($con, $_POST['duration']);

	$insert_course = "INSERT INTO course (course_name, level, duration) VALUES ('$course', '$level', '$duration')";
	if (mysqli_query($con, $insert_course)) {
		header('location:add_data.php');
	}
	else{
		die($con->error);
	}
}
 ?>
