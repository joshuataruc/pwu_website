<?php
include 'db_con.php';

$select_announce = "SELECT * FROM announcement ORDER BY id DESC";
$query = mysqli_query($con, $select_announce);
$event_num_rows = mysqli_num_rows($query);
if ($event_num_rows < 1) {
    echo "NO DATA TO FETCH";
    exit;
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Announcements</title>
 	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
 	<style>

 		.dates{
 			font-size: 10px;
 		}
    .edit{
      float: left;

    }
    .btn:hover{
      background: #B71C1C;
    }

 	</style>
 </head>
 <body>
  <?php include 'view_nav.php'; ?>
 	<center>
<div class="container">
  <div class="row">
   <?php while ($row = $query->fetch_assoc()):?>
  <div class="col s12 m12 l12">
    <div class="card hoverable">
    		<div class="card-content">
    			<p><?php  echo $row['announcement'];?></p>
    		</div>
    		<div class="card-action red darken-4">
    			<p class="dates right white-text"><?php echo $row['date_post']; ?></p>
          <a href="#upd_modal_announce" id="<?php echo $row['id']; ?>" onclick="get_id(this.id)" class=" left white-text modal-trigger"><i class="material-icons">edit</i></a>
          <a href="delete_data.php?del=<?php echo $row['id'] ?>" onclick="return confirm('are you sure to delete this announcemnt this cant be undone')" class="left white-text"><i class="material-icons">delete</i></a>
          <a href="add_data.php" class="left white-text"><i class="material-icons">add</i></a>
          <br>

    		</div>
    </div>
  </div>

   <?php endwhile; ?>
   </div>
</div>
</center>
<div class="modal" id="upd_modal_announce">
  <div class="modal-content">
    <button type="button" name="" class="modal-close btn btn-flat right">&times</button>
    <form class="" action="update_data.php" method="post">
      <div class="row">
        <input type="text" name="ids" value="" id="ann_id" hidden>
        <div class="input-field col s12">
            	<i class="material-icons prefix">volume_up</i>
              <input type="text" name="announcement_tb" value="" id="announcemnt">
        </div>
        <button type="submit" name="upd_announce" class="btn red darken-4 right">Update</button>
      </div>
    </form>
  </div>
</div>
<script>
  $('.modal').modal();

  //ajax get data from db real time
  function get_id(id) {
    $("#ann_id").val(id);
    var upd_data = new XMLHttpRequest();
    upd_data.open('GET', 'ajax_get_data.php?announ='+id, true);
    upd_data.onload = function(){
      console.log(this.responseText);
      $("#announcemnt").val(this.responseText);
    }
    upd_data.send();
  }
</script>
 </body>
 </html>
