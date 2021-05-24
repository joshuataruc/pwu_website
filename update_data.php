<?php
include 'db_con.php';
//announcemnt update
if (isset($_POST['upd_announce'])) {
  $id = mysqli_real_escape_string($con, $_POST['ids']);
  $announce = mysqli_real_escape_string($con, $_POST['announcement_tb']);

  $update = "UPDATE announcement SET announcement='$announce' WHERE id = '$id' ";
  if (mysqli_query($con, $update)===TRUE) {
    header('location:view_announcement.php');
  }
  else{
    die($con->error);
  }
}

//event pic update
if (isset($_POST['event_upd_btn'])) {
   $caption = mysqli_real_escape_string($con, $_POST['caption']);
   $event_id = mysqli_real_escape_string($con, $_POST['event_id']);

  if (isset($_FILES['event_img']['name']) && ($_FILES['event_img']['name'])!="") {
     $img_event_name = $_FILES['event_img']['name'];
     $img_tmp = $_FILES['event_img']['tmp_name'];
      $img_extension = strtolower(pathinfo($img_event_name, PATHINFO_EXTENSION));

     if (($img_extension != 'png' && $img_extension != 'jpg' && $img_extension != 'jpeg' && $img_extension != 'gif')) {
       echo "PNG, JPG, JPEG & GIF only are allowed";
       die();
     }
     else{
       $event_img_upd = move_uploaded_file($img_tmp, "event_pics/$img_event_name");
       $update_img = "UPDATE event_pics SET picture = '$img_event_name', caption = '$caption' WHERE id = '$event_id' ";
       if (mysqli_query($con, $update_img)===TRUE) {
         header('location:view_events.php');
       }
       else{
         die($con->error);
       }
     }
  }
  else{
    $update_caption = "UPDATE event_pics SET caption = '$caption' WHERE id = '$event_id' ";
    if (mysqli_query($con, $update_caption)===TRUE) {
      header('location:view_events.php');
    }
    else{
      die($con->error);
    }
  }

}

//org pres update
if (isset($_POST['org_pres_btn'])) {
   $id = mysqli_real_escape_string($con, $_POST['org_pres_id']);
   $name = mysqli_real_escape_string($con, $_POST['name']);
   $course = mysqli_real_escape_string($con, $_POST['course']);


   if (isset($_FILES['org_pres_img']) && ($_FILES['org_pres_img']['name']) != "") {
     $org_img = $_FILES['org_pres_img']['name'];
    $org_tmp = $_FILES['org_pres_img']['tmp_name'];
     echo $org_img_type = strtolower(pathinfo($org_img, PATHINFO_EXTENSION));

     if ($org_img_type != 'png' && $org_img_type != 'jpg' && $org_img_type != 'jpeg' && $org_img_type != 'png') {
       echo "png jpg jpeg and gif only";
     }//end if org type
     else{
       $move_org_img = move_uploaded_file($org_tmp, "org_pres/$org_img");
       $update_org = "UPDATE org_pres SET org_pic = '$org_img', name = '$name', course = '$course' WHERE id = '$id' ";
       if (mysqli_query($con, $update_org) === TRUE) {
         header('location:view_org_pres.php');
       }// end if mysqli
       else{
         die($con->error);
       }//end else die
     } // end else update

   } //end if isset
   else{//ele for isset
     $update_org = "UPDATE org_pres SET name = '$name', course = '$course' WHERE id = '$id'  ";
     if (mysqli_query($con, $update_org) === TRUE) {
       header('location:view_org_pres.php');
     }// end if mysqli
     else{
       die($con->error);
     }//end else die
   }//end else isset

}//end isset


//Promotional video update
if (isset($_POST['vid_upd_btn'])) {
  $vid_id = mysqli_real_escape_string($con, $_POST['vid_upd_id']);
  if (isset($_FILES['upd_vid']) && ($_FILES['upd_vid']['name']) != "") {
    $size = $_FILES['upd_vid']['size'];
    $vid_name =  $_FILES['upd_vid']['name'];
    $vid_tmp =  $_FILES['upd_vid']['tmp_name'];
    ECHO $vid_type = strtolower(pathinfo($vid_name, PATHINFO_EXTENSION));

    if ($vid_type != 'mkv' && $vid_type != 'mp4') {
      echo "only mp4 and mkv are allowed";
    }
    else{
      $move_vid = move_uploaded_file($vid_tmp, "video/$vid_name");
      $upd_vid = "UPDATE prom_vid SET vids = '$vid_name' WHERE id = '$vid_id'";
      if (mysqli_query($con, $upd_vid)) {
        header('location:view_video.php#modal_upd_vid');
      }
      else{
        die($con->error);
      }
    }

  }
}//end prom vid update

if (isset($_POST['fac_btn'])) {
  $fac_id = mysqli_real_escape_string($con, $_POST['fac_id']);
  $caption = mysqli_real_escape_string($con, $_POST['caption']);
  $fac_img = $_FILES['fac_img']['name'];
  if (isset($_FILES['fac_img']) && ($_FILES['fac_img']['name']) != "") {
    $fac_tmp = $_FILES['fac_img']['tmp_name'];
    $fac_img_type = strtolower(pathinfo($fac_img, PATHINFO_EXTENSION));

    if ($fac_img_type != 'png' && $fac_img_type != 'jpg' && $fac_img_type != 'jpeg' && $fac_img_type != 'gif') {
    echo "png jpeg jpg and gif only are allowed";
  }//end if
    else{//else for not png jpg jpeg and gif
        $move_fac_img = move_uploaded_file($fac_tmp, "facilities/$fac_img");

        $upd_fac_img = "UPDATE facilities set fac_content = '$fac_img', fac_caption = '$caption' WHERE fac_id = '$fac_id' ";
        if (mysqli_query($con, $upd_fac_img) === TRUE) {
          header('location:view_facilities.php');
        }//end query
        else{//else for query
          echo die($con->error);
        }//end else query
    }//end else

  }//end isset for file
  else{//else for isset file
    $upd_fac_img = "UPDATE facilities set fac_caption = '$caption' WHERE fac_id = '$fac_id' ";
    if (mysqli_query($con, $upd_fac_img) === TRUE) {
      header('location:view_facilities.php');
    }//end query
    else{//else for query
      echo die($con->error);
    }//end else query
  }
}
//end facility image
//update logo
if (isset($_POST['logo_upd'])) {
  $logo_id = mysqli_real_escape_string($con, $_POST['logo_id']);
  $logo_course = mysqli_real_escape_string($con, $_POST['logo_course']);
  $logo_img = $_FILES['logo_img']['name'];
  if (isset($_FILES['logo_img']) && ($_FILES['logo_img']['name']) != "") {
    $logo_tmp = $_FILES['logo_img']['tmp_name'];
    $logo_type = strtolower(pathinfo($logo_img, PATHINFO_EXTENSION));

    if ($logo_type != 'png' && $logo_type != 'jpg' && $logo_type != 'jpeg' && $logo_type != 'gif') {
      echo "png jpeg jpg and gif only are allowed";
    }//end if logo type is not png jpeg etc
      else{ // update logo with course
        $move_logo = move_uploaded_file($logo_tmp, "course_logo/$logo_img");
        $update_logo = "UPDATE college_k12_logo  SET logo = '$logo_img', course = '$logo_course' WHERE id = '$logo_id' ";
        if (mysqli_query($con, $update_logo) === TRUE) {
          header('location:view_logos.php');
        }// end query
        else{
          die($con->error);
        }
      } //end update logo with course
  }//end if name is not empty
  else{
    $update_logo = "UPDATE college_k12_logo  SET course = '$logo_course' WHERE id = '$logo_id' ";
    if (mysqli_query($con, $update_logo) === TRUE) {
      header('location:view_logos.php');
    }// end query
    else{
      die($con->error);
    }
  }//end update course only
}//end if isset post
//end  update logo


if (isset($_POST['user_btn'])) {
  $fname = mysqli_real_escape_string($con, ucwords($_POST['fname']));
  $mname = mysqli_real_escape_string($con, ucwords($_POST['mname']));
  $lname = mysqli_real_escape_string($con, ucwords($_POST['lname']));
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
  if (!empty($password)) {
    $pass = md5($password);
    $update_user = "UPDATE users SET fname = '$fname', mname = '$mname', lname = '$lname', username = '$username', password = '$pass'";
    if (mysqli_query($con, $update_user)===TRUE) {
      header('location:view_user.php');
    }
    else{
      die($con->error);
    }
  }//end if empty
  $update_user = "UPDATE users SET fname = '$fname', mname = '$mname', lname = '$lname', username = '$username'";
  if (mysqli_query($con, $update_user)===TRUE) {
    header('location:view_user.php');
  }
  else{
    die($con->error);
  }
}//end isset

 ?>
