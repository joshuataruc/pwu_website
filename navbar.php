<!DOCTYPE html>
<html>
<head>
  <title>PWU CDCEC Tarlac</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<style>
  .img{
    padding: 5px;
  }
  .nav-wrapper{
    background-color: #800000;
  }
</style>
<body>
   <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo left hide-on-med-and-down"><img src="image/pwu2.png" width="25%" class="img"></a>
        <a href="index.php" class="brand-logo center hide-on-large-only show-on-medium-and-down"><img src="image/pwu2.png" class="img" width="25%"></img></a>
        <a href="#" data-target="sidenavbar" class="sidenav-trigger "><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down" >
        <ul class="right">

          <li><a href="announcement.php" class="waves-effect waves-light">Announcement</a></li>
          <li><a href="pictures.php" class="waves-effect waves-light">Pictures</a></li>
          <li><a href="stud_guide.php" class="waves-effect waves-light">Student Guide</a></li>
          <li><a href="courses.php" class="waves-effect waves-light">Course Available</a></li>
          <li><a href="facilities.php" class="waves-effect waves-light">Facilities</a></li>
          <li><a href="#modal_contact" class=" modal-trigger waves-effect waves-light">Contact Us</a></li>
          <li><a href="about_us.php" class="waves-effect waves-light">About Us</a></li>
          </li>
        </ul>
      </div><!-- end nav-wrapper -->
    </nav>
   </div><!-- end navbar-fixed -->
   <ul class="sidenav" id="sidenavbar" >
     <a href="#" class="sidenav-close btn-flat right">&times</a><br><p></p>
     <li><a href="announcement.php" class="waves-effect waves-light">Announcement</a></li>
     <li><a href="pictures.php" class="waves-effect waves-light">Pictures</a></li>
     <li><a href="stud_guide.php" class="waves-effect waves-light">Student Guide</a></li>
     <li><a href="courses.php" class="waves-effect waves-light">Course Available</a></li>
     <li><a href="facilities.php" class="waves-effect waves-light">Facilities</a></li>
     <li><a href="#modal_contact" class=" modal-trigger waves-effect waves-light">Contact Us</a></li>
     <li><a href="about_us.php" class="waves-effect waves-light">About Us</a></li>
     
   </ul>

   <div class="modal" id="modal_contact">
     <div class="modal-content">
      
      <center><img src="image/pwu2.png" class="img" width="10%"></img></center>
       <div>
         <center><p><b>Philippine Women's University - CDCEC Tarlac</b></p></center>
         <div class="row">
           <div class="col s6">
             <p><i class="fas fa-building"></i>Juan Luna St., Poblacion, Tarlac City </p>
           </div>
           <div class="col s6">
             <p><i class="fas fa-phone"></i> (045) 982-2247</p>
           </div>
           <div class="col s6">
             <p><i class="fas fa-envelope-open"></i> PWUTarlac2002@yahoo.com</p>
           </div>
           <div class="col s6">
             <p><i class="fab fa-facebook"></i> pidab.tarlac</p>
           </div>
         </div>
         
         
         
         
       </div>
     </div>
   </div>

   <div class="modal" id="login">
     <div class="modal-content">
       <div class="card-content">
              <center><a href="index.php"><img src="image/pwu2.png" width="10%"></a></center>
                <form>
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="uname" id="user">
                        <label for="user">Username</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" name="pass" id="pass">
                        <label for="pass">Password</label>
                    </div>
                    <div class="row">
                        <div class="col s10"></div>
                        <div class="col s2">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">login</button>
                        </div>
                    </div>
                </form>

            </div>
     </div>
   </div>
   <script>
     $('.modal').modal();

     $('.sidenav').sidenav({
       draggable:true,
       preventScrolling:true
     });
   </script>
</body>
</html>
