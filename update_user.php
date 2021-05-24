<?php
include 'db_con.php';
include 'sessioncheck.php';
$id = mysqli_real_escape_string($con, $_GET['upd_user']);
$select_user = "SELECT * FROM users WHERE id = '$id' ";
$user_query = mysqli_query($con, $select_user);
$user_row = $user_query->fetch_assoc();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Update User</title>
     <link rel="stylesheet" href="datatables/datatables.min.css">
     <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="datatables/datatables.min.js" charset="utf-8"></script>
        <script src="js/materialize.min.js"></script>
        <style media="screen">
          small{
            color:#777;
          }
        </style>
   </head>
   <body>
<div class="container ">
  <div class="card">
    <div class="card-content">
      <a href="view_user.php" class="btn-flat"><i class="material-icons">arrow_back</i></a>
      <form class=" " action="update_data.php" method="post">
        <div class="row">
          <div class="input-field col s5">
            <input type="text" name="fname" value="<?php echo $user_row['fname']; ?>" id="fname">
          </div>
          <div class="input-field col s2">
            <input type="text" name="mname" value="<?php echo $user_row['mname']; ?>" id="mname">
          </div>
          <div class="input-field col s5">
            <input type="text" name="lname" value="<?php echo $user_row['lname']; ?>" id="lname">
          </div>
        </div><!-- end row-->
        <div class="row ">
          <div class="input-field col s6 ">
            <input type="text" name="username" value="<?php echo $user_row['username']; ?>" id="username">
          </div>
          <div class="input-field col s6">
            <input type="password" name="password" id="password">
            <small>Warning if you're not going to change the password dont fill it</small>
          </div>
        </div><!-- end row-->
        <input type="text" name="user_id" value="<?php echo $user_row['id']; ?>" hidden>
        <input type="submit" name="user_btn" value="Submit" class="btn red darken-4 right "><br><br>
      </form>
    </div>
  </div>
</div>
   </body>
 </html>
