<?php 
include 'db_con.php';
session_start();

$username = mysqli_real_escape_string($con, $_POST['uname']);
$password = mysqli_real_escape_string($con, $_POST['pass']);
$pass = md5($password);

$select_user = "SELECT * FROM users WHERE username = '". $username ."' && password = '". $pass ."' ";
$query_user = mysqli_query($con, $select_user) or die($con->error);
while ($row = $query_user->fetch_assoc()) {
  $user = $row['username'];
  $id = $row['id'];
}
if ($query_user->num_rows == 1) {
  $_SESSION['id'] = $id;
  $_SESSION['user'] = $user;
  $id = TRUE;
  $user = TRUE;
  header('location:add_data.php');
}
else{
  header('location:login.php');
}



 ?>

