<?php 
   include 'db_con.php';
   
   $select_college = "SELECT * FROM fac_chart WHERE department = 'college' ORDER BY id DESC ";
   $college_query = mysqli_query($con, $select_college);
   $fetch_collge = $college_query->fetch_assoc();
   
   $select_shs = "SELECT * FROM fac_chart WHERE department = 'shs' ORDER BY id DESC ";
   $shs_query = mysqli_query($con, $select_shs);
   $fetch_shs = $shs_query->fetch_assoc();
   
    ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/resume.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/materialize.min.js"></script>
      <style>
         .flow-text{
         font-size: 18px;
         text-indent: 3em;
         }
         .page-footer{
         background-color: #800000;
         }
         .maroon{
         background-color: #c62828;
         }
         hr{
         width: 100%;
         margin: auto;
         color: #b71c1c;
         }
         .design2 .design{
         color: #ff6f00;
         }
         .design2 .design .p{
         color: #bf360c;
         }
      </style>
   </head>
   <body>
      <?php include 'navbar.php'; ?>
      <div class="container">
         <div class="card-panel hoverable">
            <p class="flow-text">	Welcome to PWU. You are all heirs to a noble enterprise.  Founded almost 100 years ago, the school’s mission is to provide Filipinos with the best education that prepares them for civic and moral responsibility in a strong and independent Republic, train them to successfully combine family life and career, and give them the skills for the active participation in the community. The founders sought to bridge the division of modern life; between the domestic and the political, between the home and the professional life. They recognized the family, and the role of women in them, as fundamental site of intervention for community development, and national progress. From this experience, the University has dedicated itself to a holistic framework for personal and community development that acknowledges the contribution of each academic field and discipline, as well as cocurricular activities, in the formation of individuals and communities. We seek to build a culture of peace in the world by developing among you, our students, the PWU orientation towards cosmopolitanism, environmental stewardship, gender empowerment, self –reflexivity, critical thinking, and pride in our national heritage, as extensions of the PWU core values of personal integrity, family solidarity, civic consciousness, and leadership in one’s profession.
               As PWU moves to its centennial in 2019, it hopes to strengthen the culture of inquiry and research among the faculty and students, promote technology enhanced instruction, and community engagement towards nation-building.
               This is the challenge to which you have been called. Once again, welcome to PWU family.
            </p>
         </div>
         <!-- end caption -->
         <div class="row">
            <div class="col s6 m6 l6">
               <div class="card-panel hoverable">
                  <img src="org_chart/<?php echo $fetch_collge['fac_img'] ?>" class="responsive-img materialboxed" alt="College Department">
               </div>
            </div>
            <div class="col s6 m6 l6">
               <div class="card-panel hoverable">
                  <img src="org_chart/<?php echo $fetch_shs['fac_img'] ?>" class="responsive-img materialboxed" alt="Senior High Department">
               </div>
            </div>
         </div>
         <!-- end row -->
      </div>
      <footer class="page-footer">
         <div class="row">
            <div class="col s1 m1 l1"></div>
            <center>
               <div class="col s2 m2 l2">
                  <img class="circle modal-trigger tooltipped" data-position="top" data-tooltip="Click to show Details about Kim Joshua" id="jtaruc" data-target="taruc" src="about_us/taruc.jpg" width="20%" >
                  <figcaption>Kim Joshua Taruc</figcaption>
               </div>
               <div class="col s2 21 l2">
                  <img class="circle modal-trigger tooltipped" data-position="top" data-tooltip="Click to show Details about John Reigfred" id="johnr" data-target="john" src="about_us/fred.jpg" width="20%" >
                  <figcaption>John Reigfred S. Cocal</figcaption>
               </div>
               <div class="col s2 m2 l2" id="circle">
                  <img class="circle modal-trigger tooltipped" data-position="top" data-tooltip="Click to show Details about Sean Allen" id="seana" data-target="sean" src="about_us/allen.jfif" width="20%" >
                  <figcaption>Sean Allen M. Bautista</figcaption>
               </div>
               <div class="col s2 m2 l2">
                  <img class="circle modal-trigger tooltipped" data-position="top" data-tooltip="Click to show Details about Darrel" id="dbags" data-target="bags" src="about_us/bags.jpg" width="20%" >
                  <figcaption>Darrel T. Bagsic</figcaption>
               </div>
               <div class="col s2 m2 l2">
                  <img class="circle modal-trigger tooltipped" data-position="top" data-tooltip="Click to show Details about Shairp Kissian" id="shairo" data-target="shai" src="about_us/shai.jpg" width="20%" >
                  <figcaption>Shairo Kissian P. Baduria </figcaption>
               </div>
            </center>
            <div class="col s1 m1 l1"></div>
         </div>
      </footer>
      <div class="modal" id="taruc">
         <div class="design2">
            <div class="modal-content">
               <div class="row">
                  <div class="col s12 m3 l3 maroon">
                     <!-- bags content left with icon -->
                     <img src="about_us/icon.jpg" class="responsive-img circle">
                     <center>
                        <ul>
                           <li class="white-text">Name:Taruc, Kim Joshua</li>
                           <li class="white-text">BirthDay:October 04, 1998</li>
                           <li class="white-text">Epic</li>
                           <li class="white-text">ContactNo.:09123456789</li>
                           <li class="white-text">FB Acc: imtaruc</li>
                           <li class="white-text">Email Add: imtaruc25@gmail.com</li>
                        </ul>
                     </center>
                  </div>
                  <div class="col s12 m9 l9 ">
                     <div class="design">
                        <p1><i class="fas fa-user"></i>Profile</p1>
                        <p>put profile here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-user"></i>Experience</p1>
                        <p>put xp here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-book"></i>Education</p1>
                        <p>put education here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-book"></i>Skills</p1>
                        <div class="row ">
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-award"></i>Awards</p1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end taruc -->
      <div class="modal" id="john">
         <div class="design2">
            <div class="modal-content">
               <div class="row">
                  <div class="col s12 m3 l3 maroon">
                     <!-- bags content left with icon -->
                     <img src="about_us/icon.jpg" class="responsive-img circle">
                     <center>
                        <ul>
                           <li class="white-text">Name:Cocal, John Reigfred S.</li>
                           <li class="white-text">BirthDay:May 12, 1997</li>
                           <li class="white-text">Epic</li>
                           <li class="white-text">ContactNo.:09123456789</li>
                           <li class="white-text">FB Acc: imtaruc</li>
                           <li class="white-text">Email Add: imtaruc25@gmail.com</li>
                        </ul>
                     </center>
                  </div>
                  <div class="col s12 m9 l9 ">
                     <div class="design">
                        <p1><i class="fas fa-user"></i>Profile</p1>
                        <p>put profile here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-user"></i>Experience</p1>
                        <p>put xp here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-book"></i>Education</p1>
                        <p>put education here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-book"></i>Skills</p1>
                        <div class="row ">
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-award"></i>Awards</p1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end fred -->
      <div class="modal" id="sean">
      	<div class="design2">
            <div class="modal-content">
               <div class="row">
                  <div class="col s12 m3 l3 maroon">
                     <!-- bags content left with icon -->
                     <img src="about_us/icon.jpg" class="responsive-img circle">
                     <center>
                        <ul>
                           <li class="white-text">Name:Bautista, Seal Allen M.</li>
                           <li class="white-text">BirthDay:September 27, 1997</li>
                           <li class="white-text">Epic</li>
                           <li class="white-text">ContactNo.:09123456789</li>
                           <li class="white-text">FB Acc: imtaruc</li>
                           <li class="white-text">Email Add: imtaruc25@gmail.com</li>
                        </ul>
                     </center>
                  </div>
                  <div class="col s12 m9 l9 ">
                     <div class="design">
                        <p1><i class="fas fa-user"></i>Profile</p1>
                        <p>put profile here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-user"></i>Experience</p1>
                        <p>put xp here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-book"></i>Education</p1>
                        <p>put education here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-book"></i>Skills</p1>
                        <div class="row ">
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-award"></i>Awards</p1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--end allen-->
      <div class="modal" id="bags">
      	<div class="design2">
            <div class="modal-content">
               <div class="row">
                  <div class="col s12 m3 l3 maroon">
                     <!-- bags content left with icon -->
                     <img src="about_us/icon.jpg" class="responsive-img circle">
                     <center>
                        <ul>
                           <li class="white-text">Name:Bagsic, Darrel T.</li>
                           <li class="white-text">BirthDay:September 09, 1996</li>
                           <li class="white-text">Epic</li>
                           <li class="white-text">ContactNo.:09123456789</li>
                           <li class="white-text">FB Acc: imtaruc</li>
                           <li class="white-text">Email Add: imtaruc25@gmail.com</li>
                        </ul>
                     </center>
                  </div>
                  <div class="col s12 m9 l9 ">
                     <div class="design">
                        <p1><i class="fas fa-user"></i>Profile</p1>
                        <p>put profile here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-user"></i>Experience</p1>
                        <p>put xp here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-book"></i>Education</p1>
                        <p>put education here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-book"></i>Skills</p1>
                        <div class="row ">
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-award"></i>Awards</p1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end bags-->
      <div class="modal" id="shai">
      	<div class="design2">
            <div class="modal-content">
               <div class="row">
                  <div class="col s12 m3 l3 maroon">
                     <!-- bags content left with icon -->
                     <img src="about_us/icon.jpg" class="responsive-img circle">
                     <center>
                        <ul>
                           <li class="white-text">Name:Baduria, Shairo Kissian</li>
                           <li class="white-text">BirthDay:September 08, 1997</li>
                           <li class="white-text">Epic</li>
                           <li class="white-text">ContactNo.:09123456789</li>
                           <li class="white-text">FB Acc: imtaruc</li>
                           <li class="white-text">Email Add: imtaruc25@gmail.com</li>
                        </ul>
                     </center>
                  </div>
                  <div class="col s12 m9 l9 ">
                     <div class="design">
                        <p1><i class="fas fa-user"></i>Profile</p1>
                        <p>put profile here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-user"></i>Experience</p1>
                        <p>put xp here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-book"></i>Education</p1>
                        <p>put education here</p>
                     </div>
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-book"></i>Skills</p1>
                        <div class="row ">
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                           <div class="col s12 m4 l4">
                              <ul>
                                 <li>Programming</li>
                                 <li>Programming</li>
                                 <li>Programming</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                     <hr>
                     <div class="design">
                        <p1><i class="fas fa-award"></i>Awards</p1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <script>
         $('.materialboxed').materialbox()
         	$('.modal').modal();
         	$('.tooltipped').tooltip();
         	
         
         
      </script>
   </body>
</html>