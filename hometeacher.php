<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="rating" content="General" >
      <meta name="viewport" content="width=device-width, initial-scale:1.0, user-scale:0"/>
      <meta name="robots" content="index, follow" >
      <meta name="googlebot" content="noodp" >
      <meta name="slurp" content="noydir">
      <title>SySchool - Teacher Home</title>
      <link rel="icon" href="images/fav.png" type="image/gif" sizes="16x16">
      <!-- ********************* CSS  LINKS ********************* -->
      <link href="styles/custom.css" rel="stylesheet">
      <link href="styles/mobile.css" rel="stylesheet">
      <link href="styles/bootstrap/bootstrap.min.css" rel="stylesheet">
      <link href="styles/font-awesome.css" rel="stylesheet">
      <!-- ********************* JS JQUERY LINKS ********************* -->
      <script src="js/jquery-1.11.1.min.js"></script>  
      <script src="js/general.js"></script>     
      <!-- *********************  JS LINKS ********************* -->
      <script src="js/slider.js"></script>   
      <script src="js/cycle.js"></script>      
      <script src="js/scroll.js"></script>    
   </head>
   <body class="bg">
      <div class="top top-bar-bg">
         <div class="logo">
            <a href="index.php">Sy<span>S</span>chool</a>
         </div>
         <!--end of logo-->
         <div class="login">
            <form>
               <button>H V S De Silva</button>                           
            </form>
         </div>
         <!--end of login menu-->
         <div class="menu">
            <ul>
               <li class="selected"><a href="hometeacher.php">HOME</a></li>
               <li><a href="services.php">DOWNLOADS</a></li>
               <li><a href="about.php">ABOUT</a></li>
               <!--<li><a href="services.php">SERVICES</a></li>
               <li><a href="works.php">WORKS</a></li>
               <li ><a href="pricing.php"  >PRICING</a></li>-->
               <li><a  href="signup.php">LOGOUT</a></li>
            </ul>
         </div>
         <!--end of menu-->
      </div>
      <!--end of top-->
      
      <div class="banner">
         <h1>TEACHER HOME</h1>
      </div>
      <!--end of banner-->
<div class="gallery">
         <div class="row">
            <div class="col-md-12 ">
               <div class="galley-container">
                  <div class="col-md-3">
                     <a href="#" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/22.jpg" alt="gallery">
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p>VIEW TIME TABLE</p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="#" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/33.jpg" alt="gallery"  >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p>VIEW STUDENTS GRADES</p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="libraryfront.html" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/3.jpg" alt="gallery" >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p>LIBRARY FACILITIES</p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="#" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/4.jpg" alt="gallery" >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p>VIEW ASSIGNMENTS</p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="#" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/8.jpg" alt="gallery" >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p>INSERT MARKS</p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="#" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/9.jpg" alt="gallery" >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p>REQUEST A LEAVE</p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="#" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/10.jpg" alt="gallery" >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p>UPCOMING EVENTS</p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="#" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/11.jpg" alt="gallery" >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p>FINANCE</p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
               </div>
            </div>
            <!--end of col-12-->
         </div>
      </div>
      
      <?php 
         require_once 'footer.php'; 
      ?>
      
   </body>
</html>