<?php
session_start();

if ($_SESSION['id'] && $_SESSION['user']) {
  
}
else{
  echo "you need to login";
  header('location:login.php');
}
$user = $_SESSION['user'];
$id = $_SESSION['id'];
$user_session = false;
$id_session = false;

 ?>