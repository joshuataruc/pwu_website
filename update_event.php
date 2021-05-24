<?php
include 'db_con.php';

include 'sessioncheck.php';


$id = mysqli_real_escape_string($con, $_GET['event_upd']);

$select_data = "SELECT * FROM event_pics WHERE id = $id ";
$select_query = mysqli_query($con, $select_data);
$event_row = $select_query->fetch_assoc();

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Update Event</title>
     <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <script src="js/jquery-3.3.1.min.js"></script>
       <script src="js/materialize.min.js"></script>
   </head>
   <body>
<div class="container">
  <div class="card">
    <div class="card-content">
      <a href="view_events.php" class=" btn-flat"><i class="material-icons">arrow_back</i></a>
      <form class="" action="update_data.php" method="post" enctype="multipart/form-data">
        <input type="text" name="event_id" value="<?php echo $event_row['id']; ?>" hidden>
        <div class="input-field">
          <input type="text" name="caption" value="<?php echo $event_row['caption'] ?>" id="caption" class="cap">
        </div>
        <div class="file-field input-field">
          <div class="btn">
            <span>FILE</span>
          </div>
            <input type="file" name="event_img" value="" accept="image/*">
            <div class="file-path-wrapper ">
              <input type="text" name="" class="file-path validate" value="<?php echo $event_row['picture'] ?>">
            </div>
        </div>

        <img src="event_pics/<?php echo $event_row['picture']; ?>" alt="<?php echo $event_row['caption'] ?> event" class="materialboxed responsive_img left" width="75px;" height="75px">

        <input type="submit" name="event_upd_btn" value="Update" class="btn red darken-4 right">
        <br><br><br>
      </form>
    </div>
  </div>
</div>
<script>
  $('.materialboxed').materialbox();
</script>
   </body>
 </html>
