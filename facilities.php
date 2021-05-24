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
      <style>
        .card .card-title{
          font-size: 15px;

        }
        .card .card-content{
          padding: 15px;
        }
      </style>
   </head>
   <body>
      <?php include 'navbar.php'; ?>
      <div class="row">
         <?php while ($fac_row = $fac_query->fetch_assoc()):?>
         <div class="col s6 m6 l3">
            <div class="card hoverable">
               <div class="card-image waves-effect waves-block waves-light">
                  <img src="facilities/<?php echo $fac_row['fac_content']; ?>" class="activator" width="200px" height="100px">
               </div>
               <div class="card-content">
                  <span class="card-title title activator grey-text text-darken-4">see more</span>
                  <!-- end date posted -->
               </div>
               <!-- end card content -->
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                  <p><?php echo $fac_row['fac_caption'] ?></p>
               </div>
            </div>
            <!-- end card -->
         </div>
         <!-- end col -->
         <?php endwhile; ?>
      </div>
      <!-- end row -->  
  </div>
      <script>
         $('.materialboxed').materialbox();
      </script>
   </body>
</html>