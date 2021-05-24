<?php
include 'db_con.php';

//get data for announcemnt
if (isset($_GET['announ'])) {
   $id = mysqli_real_escape_string($con, $_GET['announ']);

   $search = "SELECT * FROM announcement WHERE id = '".$id."' ";
   $search_query = mysqli_query($con, $search);
   $row = $search_query->fetch_assoc();
   echo $announcement = $row['announcement'];
}
//end announcemnt
//get data for Promotional video
if (isset($_GET['upd_id'])) {
  $vid_id = mysqli_real_escape_string($con, $_GET['upd_id']);

  $search_vid = "SELECT * FROM prom_vid WHERE id = '".$vid_id."' ";
  $vid_query = mysqli_query($con, $search_vid);
  $vid_row = $vid_query->fetch_assoc();
  echo $vid_row['vids'];
}
//end for Promotional video



 ?>
