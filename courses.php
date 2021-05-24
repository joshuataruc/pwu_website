<?php
   include 'logo_query.php';
   ?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/materialize.min.js"></script>
   </head>
   <style>
      .cont{
      padding: 5px;
      width: 100%;
      margin:auto;    
      }
      .nav{
      width: 28%;
      float: left;
      margin-right: 1%;
      position: fixed;
      padding: 20px;
      }
      .content{
      width: 71%;
      float: right;
      }
      hr{
      color: #777;
      width: 80%;
      }
      .btn-small:hover{
      background-color: white;
      }
      .sm{
      font-size: 11px;
      }
      a{
      color:black;
      }
      .maroon{
      color:#800000;
      }
      blockquote{
         border-left: 5px solid #800000;
      }
   </style>
   <body>
      <?php include 'navbar.php';?>
      <div class="cont">
         <div class=" nav card-panel   ">
            <div class="col s12 m4 l4">
               <ul class="collapsible">
                  <li>
                     <a class="collapsible-header">Senior Highschool<i class="material-icons">arrow_drop_down</i></a>
                     <div class="collapsible-body">
                        <ul>
                           <li>
                              <a class="subheader">
                                 <center><label>Academic Track</label></center>
                              </a>
                           </li>
                           <li><a href="#stem">Science, Technology, Engineering & Mathematics </a></li>
                           <li><a href="#abm">Accountancy, Business & Management</a></li>
                           <li><a href="#humss">Humanities & Social Sciences</a></li>
                           <li><a href="#gas">General Academics </a></li>
                           <li>
                              <a class="subheader">
                                 <center><label>Technical-Vocational Track</label></center>
                              </a>
                           </li>
                           <li><a href="#hrs">Hotel & Restaurant Specialization </a></li>
                           <li><a href="#culinary">Culinary Specialization </a></li>
                           <li><a href="#trs">Tourism Services </a></li>
                           <li><a href="#ict">Information & Communication Technology </a></li>
                        </ul>
                     </div>
                  </li>
               </ul>
               <ul class="collapsible">
                  <li>
                     <a class="collapsible-header">College<i class="material-icons">arrow_drop_down</i></a>
                     <div class="collapsible-body">
                        <ul>
                           <li><a href="#bshi">BS Hospitality Industry </a></li>
                           <li><a href="#bstm">BS Tourism Management </i></a></li>
                           <li><a href="#bsis">BS Information System </a></li>
                           <li><a href="#bsais">BS Accounting Information System </a></li>
                           <li><a href="#act">Associate in Computer Technology</a></li>
                        </ul>
                     </div>
                  </li>
               </ul>
               <ul class="collapsible">
                  <li>
                     <a class="collapsible-header">TESDA Programs<i class="material-icons">arrow_drop_down</i></a>
                     <div class="collapsible-body">
                        <ul>
                           <li><a href="#hm_tech">3yr Diploma in Hospitality Technology </a></li>
                           <li><a href="#tm_tech">3yr Diploma in Tourism Technology</a></li>
                           <li><a href="#pn">2yr Practical Nursing</a></li>
                           <li><a href="#cg">7mos Caregiving</a></li>
                        </ul>
                     </div>
                  </li>
               </ul>
               <ul class="collapsible">
                  <li>
                     <a class="collapsible-header">Testimonials<i class="material-icons">arrow_drop_down</i></a>
                     <div class="collapsible-body">
                        <ul>
                           <li><a href="#hm_testimonials">HRM Testimonials</a></li>
                           <li><a href="#tm_testimonials">TM Testimonials</a></li>
                           <li><a href="#is_testimonials">BSIS Testimonials</a></li>
                           <li><a href="#ais_testimonials">BSAIS testimonials</a></li>
                        </ul>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class=" content card-panel">
            <div class="section scrollspy" id="stem">
               <center>
                  <img src="course_logo/<?php echo $fetch_stem['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">Science, Technology, Engineering & Mathematics</p>
                  <hr>
               </center>
               <center>
                  <p>What is STEM</p>
               </center>
               <p>
                  STEM is an educational program developed to prepare primary and secondary students for college and graduate study in the fields of science, technology, engineering, and mathematics (STEM). In addition to subject-specific learning, STEM aims to foster inquiring minds, logical reasoning, and collaboration skills.
               </p>
               <center>
                  <p>What you will learn in stem</p>
               </center>
               <p>   Learn and apply content, Integrate content, Interpret and communicate information, Engage in inquiry, Engage in logical reasoning, Collaborate as a team and Apply technology appropriately</p>
            </div>
            <!-- end stem -->
            <div class="section scrollspy" id="abm">
               <center>
                  <img src="course_logo/<?php echo $fetch_abm['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">Accountancy, Business and Management </p>
                  <hr>
               </center>
               <center>
                  <p>What is ABM</p>
               </center>
               <p>
                  The Accountancy, Business and Management (ABM) strand would focus on the basic concepts of financial management, business management, corporate operations, and all things that are accounted for. ABM can also lead you to careers on management and accounting which could be sales manager, human resources, marketing director, project officer, bookkeeper, accounting clerk, internal auditor, and a lot more.
               </p>
               <center>
                  <p>What you will learn in ABM</p>
               </center>
               <p>   The ABM curriculum will allow you to get a deeper appreciation of the fantastic world of accounting and business management without the hassle of going to Algebra, Geometry, Trigonometry, and other specialize mathematical subjects that you won’t need.
                  Subjects in the ABM will give you the tools you will need on your journey to success in the corporate world. Expect that you will be studying financial and management accounting alongside the legal, business, and organizational contexts that you will be encountering as enterprise. In taking this strand, you will be able to analyse assets, interpret profitability, understand financial positions, and prepare audit accounts.
               </p>
            </div>
            <!-- end abm -->
            <div class="section scrollspy" id="humss">
               <center>
                  <img src="course_logo/<?php echo $fetch_humss['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">Humanities and Social Sciences </p>
                  <hr>
               </center>
               <center>
                  <p>What is HUMSS</p>
               </center>
               <p>
                  HUMSS stands for Humanities and Social Sciences. It is one of the strands offered to Senior High students. This strand is for learners who aim to take up journalism, communication arts, liberal arts, education, and other social science-related courses in college. The HUMSS strand revolves around improving a student’s reading, writing, and speaking skills because if you haven’t noticed yet, people who choose this strand are aspiring to become members of the society who will be dealing with a lot of people. (e.g teacher, psychologist, lawyer, etc.) Honing these skills are crucial for them to establish effective communication with people when they are working. For these reasons, half of the subjects involved in this strand focus on Language and Speech. While Mathematics and Science are still included in their daily schedules, they are not too difficult since they do not belong to the specialization subjects of the said strand.
               </p>
               <center>
                  <p>What you will learn in HUMSS</p>
               </center>
               <p>   This strand covers a wide range of disciplines that delve into the investigation and inquiry of the human conditions that uses empirical, analytical, and critical methods of studying human behavior and societal changes. Students pursuing college degrees on this strand will have a deeper understanding of arts, culture, literature, politics, and society and how the complex interplay of these facets help them appreciate individual behavior and social group and the pressing issues corresponding them.</p>
            </div>
            <!-- end abm -->
            <div class="section scrollspy" id="gas">
               <center>
                  <img src="course_logo/<?php echo $fetch_gas['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">General Academic Strand  </p>
                  <hr>
               </center>
               <center>
                  <p>What is GAS</p>
               </center>
               <p>
                  The General Academic Strand or GAS is one of the four strands of the Academic Track for Senior High School. Unlike the other career-specific strands, GAS is designed for students who are not decided yet on what course they want to take in college. In this strand, you can choose from the electives of the different tracks such as Applied Economics, Organization and Management, Humanities, Social Sciences, and Disaster Preparedness.
               </p>
               <center>
                  <p>What you will learn in GAS</p>
               </center>
               <p>   Yes, you read that right. With cool subjects such as Disaster Readiness and Risk Reduction and Organization Management, you can be sure to stand out and study something unique. You can choose not one but two subjects from any other academic strand, and mix and match as you please. It’s like the times you get two scoops of ice cream when you can’t make up your mind one. Not specializing in a strand would open the doors to a world of amazing options. You could even choose to specialize once you’ve got the hang of things.</p>
               </p>
            </div>
            <!-- end gas -->
            <div class="section scrollspy" id="hrs">
               <center>
                  <img src="course_logo/<?php echo $fetch_hrs['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">Hotel & Restaurant Specialization </p>
                  <hr>
               </center>
               <center>
                  <p>What is HRS</p>
               </center>
               <p>
                  The program contains subjects that will address the needs of different sectors in the hospitality industry, such as culinary, front office, tourism, resort and hotel operations.
               </p>
               <center>
                  <p>What you will learn in hrs</p>
               </center>
               <p>   The two-year Hospitality and Restaurant Services program is designed to provide students with a thorough foundation on the skills required to begin a competitive career in the hotel and restaurant industry.</p>
            </div>
            <!-- end hrs -->
            <div class="section scrollspy" id="culinary">
               <center>
                  <img src="course_logo/<?php echo $fetch_culinary['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">Culinary Specialization</p>
                  <hr>
               </center>
               <center>
                  <p>What is Culinary Specialization</p>
               </center>
               <p>
                  The field of culinary arts offers almost unlimited career possibilities. Because we live in a world that is fascinated by food, culinary arts has become a popular degree choice in recent years. The number of schools offering culinary arts majors have grown tremendously and students today can choose from a variety of programs and specializations.
               </p>
               <center>
                  <p>What you will learn in What is Culinary Specialization</p>
               </center>
               <p>   Learning how to read a recipe is arguably the most important thing you can learn as a new cook. It’s not about just reading directions and gathering ingredients. Chef always asked us to write out the recipe in our own words in class so that we would have a better understanding of what was needed. As you read a recipe, he said, you should start miming how the recipe will work in your own way. This confidence comes from two things: Speed and patience. We worked under an incredibly tight schedule, so there wasn’t a lot of time to question yourself (a push that I needed). I also learned that some things simply need time to cook, and pushing the ingredients around in the pan isn’t going to help. Let it be. We worked with a lot of meat and fish in culinary school, but the most essential thing we learned was how to quarter and truss a chicken. I didn’t find it easy, but with continued practice I’m starting to get the hang of it. Everyone always talks about how important a good chef’s knife is, but a good paring knife is also really essential in any kitchen. Until culinary school, I’m embarrassed to say, I didn’t even own a paring knife. We used it in class all the time to cut and peel vegetables, trim out ugly spots on potatoes, and do any small work that a chef’s knife simply couldn’t. Butter makes things delicious, salt adds flavor (trust me, you are always under-salting everything), lemon adds freshness, and eggs are just the miracle ingredient that can do anything and everything in the kitchen A word that is constantly thrown around in culinary school is nappe,or when you put sauce on the back of a spoon and run your finger through the sauce and it leaves its mark. This is how you know when something is thick enough.If you need to add thickness to your sauce, we always used arrowroot, cornstarch, or agar agar. A little at a time, you mix your powder with water and then add it the sauce. Continue doing this until you get to nappe.There’s many ways to tell when oil is hot enough to start cooking, but I learned a new one in culinary school. After you put the oil in the pan move the oil back and forth until you start seeing “the fingers” as one of my instructors called it. Making do with what you have was always very important in culinary school. Don’t have pot lids? Use parchment paper! Don’t have cheesecloth for your bouqet garni? Use leek skins! Don’t let the lack of something stop you from creating something in the kitchen. When you’re making soups, stocks, or sauces, instead of putting the herbs straight in the pot, we would bundle them up in cheesecloth (or leek skin!) and tie it to the pot. That way you wouldn’t have to fish out the cloves, thyme, or bay leaf when you were done cooking. It’s a game changer. Until culinary school I had always simply bought pre-made stock. I would throw out the bones of whatever meat I would make simply thinking it couldn’t possibly be worth the extra effort. But I learned in culinary school, however, that homemade stock is incredibly easy to make and adds an incredible amount of flavor to so many dishes.</p>
            </div>
            <!-- end clr -->
            <div class="section scrollspy" id="trs">
               <center>
                  <img src="course_logo/<?php echo $fetch_trs['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">Tourism Services </p>
                  <hr>
               </center>
               <center>
                  <p>What is Tourism Services</p>
               </center>
               <p>
                  Tourism and travel-related services includes services provided by hotels and restaurants (including catering), travel agencies and tour operator services, tourist guide services and other related services. One of the most crucial aspects of international tourism is the cross-border movement of consumers.
               </p>
               <center>
                  <p>What you will learn in Tourism Servisec</p>
               </center>
               <p>   Travel and tourism graduates gain knowledge about products, structures and operations within the tourism industry, learning about tour operators, airlines, hotels and tourist boards. ... The course also equips you with a range of transferable skills, including: leadership.</p>
            </div>
            <!-- end trs -->
            <div class="section scrollspy" id="ict">
               <center>
                  <img src="course_logo/<?php echo $fetch_ict['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">information and communications technology  </p>
                  <hr>
               </center>
               <center>
                  <p>What is information and communications technology </p>
               </center>
               <p>
                  ICT, or information and communications technology (or technologies), is the infrastructure and components that enable modern computing. Although there is no single, universal definition of ICT, the term is generally accepted to mean all devices, networking components, applications and systems that combined allow people and organizations (i.e., businesses, nonprofit agencies, governments and criminal enterprises) to interact in the digital world.
               </p>
               <center>
                  <p>What you will learn in information and communications technology </p>
               </center>
               <p>Studying ICT (Computing Science) at third level means you will develop more advanced skills and knowledge. You will deepen your knowledge of technology and how it works. You will learn practical skills like coding/programming and gain a theoretical understanding of topics like computer science and web development.</p>
            </div>
            <!-- end trs -->
            <div class="section scrollspy" id="bshi">
               <center>
                  <img src="course_logo/<?php echo $fetch_bshrm['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">Bachelor of Science in Hospitality Industry  </p>
                  <hr>
               </center>
               <center>
                  <p>What is Bachelor of Science in Hospitality Industry </p>
               </center>
               <p>
                  A Bachelor of Science in Hospitality Industry program gives students the managerial and educational tools to manage restaurants, hotels, and other places where hospitality is essential to the business.
               </p>
               <center>
                  <p>What you will learn in Bachelor of Science in Hospitality Industry </p>
               </center>
               <p>Within a Bachelor of Science in Hospitality Industry program, students learn to resolve guest conflicts, preserve cost controls, anticipate market conditions, manage team members and provide high-quality service. Hospitality law, public relations, marketing, economics, risk management and international business are examples of topics the program may explore. The programs emphasize strong communication, organizational and interpersonal skills, and allow for opportunities for practical work in the field through co-ops and internships.</p>
            </div>
            <!-- end bshi -->
            <div class="section scrollspy" id="bstm">
               <center>
                  <img src="course_logo/<?php echo $fetch_bstm['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">Bachelor of Science in Tourism Management </p>
                  <hr>
               </center>
               <center>
                  <p>What is Bachelor of Science in Tourism Management </p>
               </center>
               <p>
                  Bachelor of Science in Tourism Management is a four-year college course recommended for people who wants to have a career in the field of Tourism and Event Management. This course leads to expertise in management of tour-operating agencies, as well as other jobs in the tourism and hospitality sector.
               </p>
               <center>
                  <p>What you will learn in Bachelor of Science in Tourism Management</p>
               </center>
               <p>The BS in Tourism Management course consists of several CHED-mandated general subjects, while the focus of the study is on the administrative aspect of Tour Operating business, particularly entrepreneurship and trade planning. The curriculum also includes operational competencies, event management classes, investment, market study and more. The combination of theories learned inside the classroom and on-the-job training will prepare the students to be globally competitive in tourism management operations.</p>
            </div>
            <!-- end bstm -->
            <div class="section scrollspy" id="bsis">
               <center>
                  <img src="course_logo/<?php echo $fetch_bsis['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">Bachelor of Science in Information Systems </p>
                  <hr>
               </center>
               <center>
                  <p>What is Bachelor of Science in Information Systems </p>
               </center>
               <p>
                  Bachelor of Science in Information Systems (BSIS), formerly known as BS in Information Management, is a four year degree program that deals with the design and implementation of solutions that integrate information technology with business processes. The program teaches students all about hardware and software applications and how they can use them to collect, filter, and process, create and distribute data
               </p>
               <center>
                  <p>What you will learn in Bachelor of Science in Information Systems</p>
               </center>
               <p>The BS in Information Systems program focuses on the design, development and implementation of information and communications technology (ICT) resources to ensure information systems applications can be used in various industry sectors (business, education, media and entertainment, healthcare, government, and service)..</p>
            </div>
            <!-- end bsis -->
            <div class="section scrollspy" id="bsais">
               <center>
                  <img src="course_logo/<?php echo $fetch_bsais['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">Bachelor of Science in Accounting Information Systems </p>
                  <hr>
               </center>
               <center>
                  <p>What is Bachelor of Science in Accounting Information Systems </p>
               </center>
               <p>
                  As a specialized degree, an Bachelor of Science in Accounting Information Systems degree uniquely prepares students to enter the field of accounting either as accountants, auditors, in integral support roles, or a combination of these careers. The knowledge in accountancy and information systems obtained through this course of study is sought by employers of all sizes that use accountancy programs. This degree can also prepare students to pursue higher level degrees, which can further enhance career prospects.
               </p>
               <center>
                  <p>What you will learn in Bachelor of Science in Accounting Information Systems</p>
               </center>
               <p>This is the program that provides general accounting education to students wanting to pursue a professional career in Accounting Information System. Further, this is the program that complies with the latest competency framework for professional accountants issued by the International Federation of Accountants (IFAC) thru their International Education Standards. Thus, this qualifies the graduate of this program to take assessments leading to certifications in Accounting Information System given by global professional Accounting Information System Organization.</p>
            </div>
            <!-- end bsais -->
            <div class="section scrollspy" id="act">
               <center>
                  <img src="course_logo/<?php echo $fetch_act['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">Bachelor of Associate in Computer Technology </p>
                  <hr>
               </center>
               <center>
                  <p>What is Bachelor of Associate in Computer Technology </p>
               </center>
               <p>
                  The Associate in Computer Technology program (ACT) provides knowledge and skills in the fundamental of computer programming and basic computation. The program also includes topics related to data structures, network concepts, computer organization, database management system and system analysis and design. It aims to promote analytical, critical thinking, software troubleshooting and programming skills.
               </p>
               <center>
                  <p>What you will learn in Associate in Computer Technology</p>
               </center>
               <p>The course is designed to provide students with the opportunity to learn the necessary skills to use the state-of-the-art computer systems to solve business and information systems related problems. It involves the teaching of different Programming Languages, Web Development, Database Design/Development, Networking and other computer programs.</p>
            </div>
            <!-- end bsais -->
            <div class="section scrollspy" id="pn">
               <center>
                  <img src="course_logo/<?php echo $fetch_pn['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">Practical nursing </p>
                  <hr>
               </center>
               <center>
                  <p>What is Practical nursing </p>
               </center>
               <p>
                  Provide basic medical and nursing care such as checking blood pressure and inserting catheters, ensure the comfort of patients by helping them bathe or dress, discuss health care with patients, and report status of patients to registered nurses and doctors.
               </p>
               <center>
                  <p>What you will learn in Practical nursing</p>
               </center>
               <p>You must complete an accredited practical nursing program which usually takes about two years to complete. These programs are most often taken at technical or community colleges. Courses usually combine academia in nursing, biology, and pharmacology, in addition to supervised clinical experiences.</p>
            </div>
            <!-- end bsais -->
            <div class="section scrollspy" id="cg">
               <center>
                  <img src="course_logo/<?php echo $fetch_cg['logo'] ?>" width="100px" height="100px" class="materialboxed">
                  <p class="maroon">Caregiving </p>
                  <hr>
               </center>
               <center>
                  <p>What is Caregiving </p>
               </center>
               <p>
                  Caregiving is providing care for the physical and emotional needs of a family member or a friend at home. Assisting with meals, personal care and transportation, helping with medical procedures and therapy, devoting just a few hours weekly or many hours each day.
               </p>
               <center>
                  <p>What you will learn in Caregiving</p>
               </center>
               <p>Physically–The proper lifting and transferring techniques and equipment can make some of your tasks easier.
                  Mentally–Giving care demands a lot of thought. Learning to plan ahead and use your time is very important and vital to your well-being.
                  Emotionally–Caregivers can easily feel isolated and frustrated.  Understanding the challenges of caregiving is the first step in meeting them.
                  .
               </p>
            </div>
            <!-- end bsais -->

            <!-- testimonials -->

            <div class="section scrollspy" id="hm_testimonials">
               <div class="row">
                  <div class="col s12 m12 l4">
                     <center><img src="image/noimg.png" class="materialboxed responsive-image">
                     </center>
                  </div>
                  <div class="col s12 m12 l8">
                     <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>
                     <p class="right"Name of Graduate></p>
                  </div>
               </div><!-- end row -->
            </div><!-- end hm testimonials -->
            <div class="section scrollspy" id="tm_testimonials">
               <div class="row">
                  <div class="col s12 m12 l4">
                     <center><img src="image/joyce1.jpg" class="materialboxed " width="200px" height="200px;">
                     </center>
                  </div>
                  <div class="col s12 m12 l8">
                     <blockquote>Always go after the things that you want with passion and perseverance. Because if you really want it, you'd get it. If it scares you, it means it is worth the try. Don't fear failure and don't make waiting a habit. Live your dreams and take risks. Just like what I did, keep rockin' the adult life above the wing. Aim high, fly high!</blockquote>
                     <p class="right">Joyce Frances Esteban</p>
                  </div>
               </div><!-- end row -->
            </div><!-- end tm testimonials -->
            <div class="section scrollspy" id="is_testimonials">
               <div class="row">
                  <div class="col s12 m12 l4">
                     <center><img src="image/lynelle.jpg" class="materialboxed " width="200px" height="200px;">
                     </center>
                  </div>
                  <div class="col s12 m12 l8">
                     <blockquote>The Philippine Women's University gives every student an opportunity to be the best version of them. The instructors and staffs are very friendly and approachable. There's a lot of organizations where you can join that will help you improve your self confidence.</blockquote>
                     <p class="right">Lynelle Anne Y Maula</p>
                  </div>
               </div><!-- end row -->
            </div><!-- end is testimonials -->
            <div class="section scrollspy" id="ais_testimonials">
               <div class="row">
                  <div class="col s12 m12 l4">
                     <center><img src="image/noimg.png" class="materialboxed responsive-image">
                     </center>
                  </div>
                  <div class="col s12 m12 l8">
                     <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>
                     <p class="right">Name of Graduate</p>
                  </div>
               </div><!-- end row -->
            </div><!-- end ais testimonials -->


         </div><!-- end content -->
      </div>
      <!-- end cont -->
      <script>
         $('.scrollspy').scrollSpy();
         $('.tooltipped').tooltip();
         $('.collapsible').collapsible();
         $('.materialboxed').materialbox();
      </script>
   </body>
</html>