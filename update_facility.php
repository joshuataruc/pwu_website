<?php
include 'db_con.php';
include 'sessioncheck.php';
$id = mysqli_real_escape_string($con, $_GET['upd_fac']);

$select_fac = "SELECT * FROM facilities WHERE fac_id = $id";
$fac_query = mysqli_query($con, $select_fac)or die($con->error);
$fac_row = $fac_query->fetch_assoc();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Update facility images</title>
     <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <script src="js/jquery-3.3.1.min.js"></script>
       <script src="js/materialize.min.js"></script>
   </head>
   <body>
     <div class="container">
       <div class="card">
         <div class="card-content">
           <a href="view_facilities.php" class="btn-flat"><i class="material-icons">arrow_back</i></a>
           <form class="" action="update_data.php" method="post" enctype="multipart/form-data">
             <div class="input-field">
               <input type="text" name="caption" value="<?php echo $fac_row['fac_caption'] ?>">
             </div>
             <div class="input-field file-field">
               <div class="btn">
                 <span>Image</span>
               </div>
               <input type="file" name="fac_img" value="">
               <div class="file-path-wrapper">
                 <input type="text" name="" value="<?php echo $fac_row['fac_content']; ?>" class="file-path validate">
               </div>
             </div>
             <input type="text" name="fac_id" value="<?php echo $fac_row['fac_id'] ?>" hidden>
             <input type="submit" name="fac_btn" value="Submit" class="btn red  darken-4 right">

             <img src="facilities/<?php echo $fac_row['fac_content']; ?>" data-caption="<?php echo $fac_row['fac_caption'] ?>" alt="<?php echo $fac_row['fac_caption'] ?> facility " class="materialboxed responsive-img" height="150px" width="150px;">
           </form>
         </div>
       </div>
     </div>
     <script>
       $('.materialboxed').materialbox();
     </script>
   </body>
 </html>
