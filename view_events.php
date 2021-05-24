<?php
include 'db_con.php';

$select_events = "SELECT * FROM event_pics";
$event_query = mysqli_query($con, $select_events) or die($con->error);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Events</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/materialize.min.js"></script>
      <style media="screen">
        .container{
          width: 95%;
        }
      </style>
  </head>
  <body>
<?php include 'view_nav.php'; ?>
  <div class="container">
    <div class="row">
      <?php while ($event_row = $event_query->fetch_assoc()):?>
      <div class="col s12 m12 l3">
        <div class="card hoverable">
          <div class="card-content">
            <div class="head_caption left">
              <p><?php echo $event_row['caption'] ?></p>
            </div><!-- end caption -->
            <div class="right date_posted">
              <p><?php echo $event_row['date_posted'] ?></p>
            </div>
            <!-- end date posted -->
            <center>

              <br>
              <div class="body_img ">
                <img src="event_pics/<?php echo $event_row['picture']; ?>" alt="" class="materialboxed" width="200px" height="100px" data-caption="<?php echo $event_row['caption'] ?>">
              </div>
            </center>
          </div><!-- end card content -->
          <div class="card-action">
            <center>
            <a href="update_event.php?event_upd=<?php echo $event_row['id']; ?>" class="modal-trigger black-text"><i class="material-icons">edit</i></a>
            <a href="delete_data.php?del_event=<?php echo $event_row['id'] ?>" onclick="return confirm('are you sure to delete this announcemnt this cant be undone')" class=" black-text"><i class="material-icons">delete</i></a>
            <a href="add_data.php" class="black-text "><i class="material-icons">add</i></a>
          </center>
          </div>
        </div><!-- end card -->
      </div><!-- end col -->
      <?php endwhile; ?>
    </div><!-- end row -->
  </div>

<div class="modal" id="modal_upd_events">
  <div class="modal-content">
    <button type="button" name="button" class="modal-close btn btn-flat right">&times</button>
    <form class="" action="update_data.php" method="post" enctype="multipart/form-data">
      <div class="input-field">
        <input type="text" name="caption" value="" id="caption" class="cap">
      </div>
      <div class="file-field input-field">
        <div class="btn">
          <span>FILE</span>
        </div>
          <input type="file" name="event_img" value="">
          <div class="file-path-wrapper ">
            <input type="text" name="" class="file-path-validate" value="">
          </div>
      </div>
      <input type="submit" name="event_upd_btn" value="Update" class="btn red darken-4 right">
      <br><br>
    </form>

  </div>
</div>

<script>
  $('.materialboxed').materialbox();
  // $('.modal').modal();
  //
  // //ajax get DATA
  // function event_id(event_ids) {
  //
  //   var event_upd = new XMLHttpRequest();
  //   event_upd.open('GET', 'ajax_get_data.php?event='+event_ids, true);
  //   event_upd.onload = function() {
  //     console.log(this.responseText);
  //   }
  //   event_upd.send();
  // }
</script>
  </body>
</html>
