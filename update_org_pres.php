<?php
include 'db_con.php';
include 'sessioncheck.php';
$id = mysqli_real_escape_string($con, $_GET['upd_org']);

$select_org_pres = "SELECT * FROM org_pres WHERE id ='".$id."'";
$org_pres_query = mysqli_query($con, $select_org_pres);
$org_row = $org_pres_query->fetch_assoc();

//for course dropdown
$select_course = "SELECT * FROM course";
$course_query = mysqli_query($con, $select_course);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Org President</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/materialize.min.js"></script>
      <style media="screen">

      </style>
  </head>
  <body>
<div class="container">
  <div class="card">
    <div class="card-content">
      <a href="view_org_pres.php"><i class="material-icons">arrow_back</i></a>
      <form class="" action="update_data.php" method="post" enctype="multipart/form-data">
        <input type="text" name="org_pres_id" value="<?php echo $org_row['id']; ?>" hidden>
        <div class="input-field">
          <input type="text" name="name" value="<?php echo $org_row['name'] ?>">
        </div>
        <div class="row">
          <div class="file-field input-field col s6">
            <div class="btn">
              <span>Image</span>
            </div>
            <input type="file" name="org_pres_img" value="<?php echo $org_row['org_pic'] ?>" accept="imgage/*">
            <div class="file-path-wrapper">
              <input type="text" name="" class="validate file-path" value="<?php echo $org_row['org_pic'] ?>">
            </div>
          </div>

          <div class="input-field col s6">
            <select name="course" required>
              <option selected value="<?php $org_row['course']; ?>" ><?php echo $org_row['course']; ?></option>
                <optgroup label="Course Available">
              <?php while ($course_row = $course_query->fetch_assoc()): ?>
                <option value="<?php echo $course_row['course_name']; ?>"><?php echo $course_row['course_name']; ?></option>
                </optgroup>
              <?php endwhile; ?>
          </div>
        </div>
      <input type="submit" name="org_pres_btn" value="Update" class="btn red darken-4 right">
      </form>
      <img src="org_pres/<?php echo $org_row['org_pic'] ?>" alt="organization president of <?php echo $org_row['course'] ?>" class="materialboxed responsive_img left" width="75px" height="75px">
    </div>
  </div>
</div>

</select>
<script>
  $('select').formSelect();
  $('.materialboxed').materialbox();
</script>
  </body>
</html>
