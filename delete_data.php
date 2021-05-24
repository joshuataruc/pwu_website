<?php
include 'db_con.php';
// announcement
if (isset($_GET['del'])) {
  if ('onclick == yes') {
    $data_id = mysqli_real_escape_string($con, $_GET['del']);

    $delete_data = "DELETE FROM announcement WHERE id = $data_id ";
    if (mysqli_query($con, $delete_data) === TRUE) {
      header("location:view_announcement.php");
    }
    else{
       die($con->error);

    }
  }
}
//end del announcement
// del users
if (isset($_GET['user'])) {
  if ('onclick == yes') {
     $id = mysqli_real_escape_string($con, $_GET['user']);

     $delete_user = "DELETE FROM users WHERE id = $id";
     if (mysqli_query($con, $delete_user) === TRUE) {
       header("location:view_user.php");
     }
     else{
       die($con->error);
     }
  }
}
//end del user
//del event pictures
if (isset($_GET['del_event'])) {
   $event_id = mysqli_real_escape_string($con, $_GET['del_event']);
  if ('onclick == yes') {
    $delete_event = "DELETE FROM event_pics where id = $event_id";
    if (mysqli_query($con, $delete_event)=== TRUE) {
      header("location:view_events.php");
    }
    else{
      die($con->error);
    }
  }

}
//end event pic
//del organization
if (isset($_GET['del_org'])) {
  echo $id_org = mysqli_real_escape_string($con, $_GET['del_org']);
  if ('onclick == yes') {
    $delete_org = "DELETE FROM org_pres WHERE id = '".$id_org."' ";
    if(mysqli_query($con, $delete_org) === TRUE){
    header('location:view_org_pres.php');
    }
    else{
      die($con->error);
    }
  }
}
//end del organization
//del promotional video
if (isset($_GET['del_vid'])) {
  if ('onclick == yes') {
    $vid_id = mysqli_real_escape_string($con, $_GET['del_vid']);
    $delete_video = "DELETE FROM prom_vid WHERE id = '".$vid_id."'";
    if (mysqli_query($con, $delete_video) === TRUE) {
      header('location:view_video.php');
    }
    else{
      die($con->error);
    }
  }
}
//end promotional video
//del facilities
if (isset($_GET['del_fac'])) {
  $fac_id = mysqli_real_escape_string($con, $_GET['del_fac']);
  if ('onclick == yes') {
    $del_facility = "DELETE FROM facilities WHERE fac_id = '".$fac_id."' ";
    if (mysqli_query($con, $del_facility)=== TRUE) {
      header('location:view_facilities.php');
    }
    else{
      die($con->error);
    }
  }
}
//end del facilities
//del logos
if (isset($_GET['del_logo'])) {
  $id_logo = mysqli_real_escape_string($con, $_GET['del_logo']);
  if ('onclick == yes') {
    $delete_logo = "DELETE FROM college_k12_logo WHERE id = '".$id_logo."'";
    if (mysqli_query($con, $delete_logo)) {
      header('location:view_logos.php');
    }
    else{
      die($con->error);
    }
  }
}

 ?>
