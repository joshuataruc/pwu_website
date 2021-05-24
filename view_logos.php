<?php
include 'db_con.php';

$select_logo = "SELECT * FROM college_k12_logo";
$logo_query = mysqli_query($con, $select_logo) or die($con->error);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Course Logo</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/materialize.min.js"></script>
  </head>
  <body>
<?php include 'view_nav.php'; ?>
  <div class="row">
    <?php while ($logo_row = $logo_query->fetch_assoc()):?>
    <div class="col s12 m12 l3">
      <div class="card hoverable">
        <div class="card-content">
          <div class="head_caption">
            <p><?php echo $logo_row['course'] ?></p>
          </div><!-- end caption -->
          <center>
            <br>
            <div class="body_img ">
              <img src="course_logo/<?php echo $logo_row['logo']; ?>" alt="" class="materialboxed" width="200px" height="150px"  data-caption="<?php echo $logo_row['course'] ?>">
            </div>
          </center>
        </div><!-- end card content -->
        <div class="card-action">
          <center>
          <a href="update_logo.php?upd_logo=<?php echo $logo_row['id'] ?>" class="black-text" ><i class="material-icons">edit</i></a>
          <a href="delete_data.php?del_logo=<?php echo $logo_row['id'] ?>" onclick="return confirm('are you sure to delete this announcemnt this cant be undone')" class=" black-text"><i class="material-icons">delete</i></a>
          <a href="add_data.php" class="black-text "><i class="material-icons">add</i></a>
        </center>
        </div>
      </div><!-- end card -->
    </div><!-- end col -->
    <?php endwhile; ?>
  </div><!-- end row -->

<script>
  $('.materialboxed').materialbox();
</script>
  </body>
</html>
