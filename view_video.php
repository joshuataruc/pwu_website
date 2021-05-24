<?php
include 'db_con.php';

$select_video = "SELECT * FROM prom_vid";
$video_query = mysqli_query($con, $select_video)or die($con->error);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Promotional Videos</title>
     <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <script src="js/jquery-3.3.1.min.js"></script>
       <script src="js/materialize.min.js"></script>
       <style media="screen">
         small{
           color:#777;
         }
       </style>
   </head>
   <body>
    <?php include 'view_nav.php'; ?>
     <div class="row">
      <?php while ($video_row = $video_query->fetch_assoc()):?>
        <center>

            <div class="col s12 m12 l4">
              <div class="card">
                <div class="card-content">
                  <center>
                    <video controls="" width="100%" >
                      <source src="video/<?php echo $video_row['vids']; ?>" type="video/mp4 video/mkv" >
                    </video>
                  </center>
                </div>
                <div class="card-action">
                  <a href="#modal_upd_vid" class="modal-trigger black-text" id="<?php echo $video_row['id'] ?>" onclick="get_vid(this.id)"><i class="material-icons">edit</i></a>
                  <a href="delete_data.php?del_vid=<?php echo $video_row['id'] ?>" onclick="return confirm('are you sure to delete this announcemnt this cant be undone')" class=" black-text"><i class="material-icons">delete</i></a>
                  <a href="add_data.php" class="black-text "><i class="material-icons">add</i></a>
                </div>
              </div>
            </div>
        </center>
      <?php endwhile; ?>
    </div>
    <div class="modal" id="modal_upd_vid">
      <div class="modal-content">
        <button type="button" name="button" class="btn-flat modal-close right">&times</button><br><br>
        <form class="" action="update_data.php" method="post" enctype="multipart/form-data">
          <input type="text" name="vid_upd_id" id="vid_upd_id" value="" hidden>
          <div class="file-input file-field">
            <div class="btn">
              <span>Video</span>
            </div>
            <input type="file" name="upd_vid" value="" accept="video/*">
            <div class="file-path-wrapper">
              <input type="text" name="" value="" id="path" class="file-path validate" required>
              <small>Max Upload Size is less than 100mb</small>
            </div>
          </div>
          <input type="submit" name="vid_upd_btn" value="Submit" class="btn red darken-4 right">
          <br><br>
        </form>
      </div>
    </div>
    <script>
    $('.modal').modal();


    function get_vid(vid_id) {
      $('#vid_upd_id').val(vid_id);
      var upd_vid = new XMLHttpRequest();
      upd_vid.open('GET', 'ajax_get_data.php?upd_id='+vid_id, true);
      upd_vid.onload = function() {
        console.log(this.responseText);
        $('#path').val(this.responseText);
      }
      upd_vid.send();
    }
    </script>
   </body>
 </html>
