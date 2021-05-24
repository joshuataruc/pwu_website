<?php
include 'db_con.php';

$select_fac = "SELECT * FROM facilities";
$fac_query = mysqli_query($con, $select_fac) or die($con->error);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Facilities</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/materialize.min.js"></script>
  </head>
  <body>
<?php include 'view_nav.php'; ?>
  <div class="row">
    <?php while ($fac_row = $fac_query->fetch_assoc()):?>
    <div class="col s12 m12 l3">
      <div class="card hoverable">
        <div class="card-content">
          <div class="head_caption ">
            <p><?php echo $fac_row['fac_caption'] ?></p>
          </div><!-- end caption -->
          <!-- end date posted -->
          <center>
            <br>
            <div class="body_img ">
              <img src="facilities/<?php echo $fac_row['fac_content']; ?>" alt="" class="materialboxed" width="200px" height="100px" data-caption="<?php echo $fac_row['fac_caption'] ?>">
            </div>
          </center>
        </div><!-- end card content -->
        <div class="card-action">
          <center>
          <a href="update_facility.php?upd_fac=<?php echo $fac_row['fac_id'] ?>" class="black-text" ><i class="material-icons">edit</i></a>
          <a href="delete_data.php?del_fac=<?php echo $fac_row['fac_id'] ?>" onclick="return confirm('are you sure to delete this announcemnt this cant be undone')" class=" black-text"><i class="material-icons">delete</i></a>
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
