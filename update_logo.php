<?php
include 'db_con.php';
include 'sessioncheck.php';
$id = mysqli_real_escape_string($con, $_GET['upd_logo']);

$select_logo = "SELECT * FROM college_k12_logo WHERE id = '$id'";
$logo_query = mysqli_query($con, $select_logo);
$logo_row = $logo_query->fetch_assoc();

//for course
$select_course = "SELECT * FROM course";
$course_query = mysqli_query($con, $select_course);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Update Logo</title>
     <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <script src="js/jquery-3.3.1.min.js"></script>
       <script src="js/materialize.min.js"></script>
   </head>
   <body>
<div class="container">
  <div class="card">
    <div class="card-content">
      <a href="view_logos.php" class="btn-flat"><i class="material-icons"> arrow_back</i></a>
      <form class="" action="update_data.php" method="post" enctype="multipart/form-data">
        <div class="file-field input-field">
          <div class="btn">
            <span>Logo</span>
          </div>
          <input type="file" name="logo_img" value="" accept="image/*">
          <div class="file-path-wrapper">
            <input type="text" name="" class="file-path" value="<?php echo $logo_row['logo']; ?>">
          </div>
        </div>
        <div class="input-field">
          <select class="" name="logo_course">
            <option value="<?php echo $logo_row['course'] ?>" selected><?php echo $logo_row['course'] ?></option>
            <optgroup label="Avalable Course">
              <?php while ($course_row = $course_query->fetch_assoc()):?>
                <option value="<?php echo $course_row['course_name'] ?>"><?php echo $course_row['course_name'] ?></option>
              <?php endwhile; ?>
            </optgroup>
          </select>
        </div>
        <input type="text" name="logo_id" value="<?php echo $logo_row['id'] ?>" hidden>
        <img src="course_logo/<?php echo $logo_row['logo']; ?>" data-caption="<?php echo $logo_row['course'] ?> Logo" alt="<?php echo $logo_row['course'] ?> Logo" class="left materialboxed" width="50px" height="50px">
        <input type="submit" name="logo_upd" value="Submit" class="btn right red darken-4"><br><br>
      </form>
    </div><!--end card content -->
  </div><!--end card content -->
</div>
<script>
  $('select').formSelect();
  $('.materialboxed').materialbox();
</script>
   </body>
 </html>
