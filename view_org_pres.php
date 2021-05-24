<?php
include 'db_con.php';
$select_org_press = "SELECT * FROM org_pres";
$query = mysqli_query($con, $select_org_press) or die($con->error);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Organizarion President</title>
     <link rel="stylesheet" href="css/materialize.min.css">
     	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
      <script src="js/materialize.min.js" charset="utf-8"></script>
      <style media="screen">

      </style>
   </head>
   <body>
    <?php include 'view_nav.php'; ?>
     <div class="row">
<?php while ($org_row = $query->fetch_assoc()):?>
  <div class="col s12 m12 l3">
    <div class="card">
      <div class="card-content">
        <center><img src="org_pres/<?php echo $org_row['org_pic']; ?>" alt="" class="materialboxed " width="200px" height="150px" data-caption="<?php echo $org_row['name']. " " . $org_row['course']; ?>"></center>
        <p></p>
        <center><?php echo $org_row['name'] ?></center>
        <center><?php echo $org_row['course'] ?></center>
      </div>
      <div class="card-action">
        <center>
        <a href="update_org_pres.php?upd_org=<?php echo $org_row['id'] ?>" class="black-text" ><i class="material-icons">edit</i></a>
        <a href="delete_data.php?del_org=<?php echo $org_row['id'] ?>" onclick="return confirm('are you sure to delete this announcemnt this cant be undone')" class=" black-text"><i class="material-icons">delete</i></a>
        <a href="add_data.php" class="black-text "><i class="material-icons">add</i></a>
      </center>
      </div>
    </div>
  </div>
<?php endwhile; ?>
     </div>
     <script>
       $('.materialboxed').materialbox();
     </script>
   </body>
 </html>
