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
      <title>SySchool - Student Attendence </title>
      <link rel="icon" href="images/fav.png" type="image/gif" sizes="16x16">
      <!-- ********************* CSS  LINKS ********************* -->
      <link href="styles/custom.css" rel="stylesheet">
      <link href="styles/mobile.css" rel="stylesheet">
      <link href="styles/bootstrap/bootstrap.min.css" rel="stylesheet">
      <link href="styles/font-awesome.css" rel="stylesheet">
      <!-- ********************* JS JQUERY LINKS ********************* -->
      <script src="js/jquery-1.11.1.min.js"></script>   
      <!-- *********************  JS LINKS ********************* -->
      <script src="js/slider.js"></script>   
      <script src="js/cycle.js"></script>  
      <script src="js/general.js"></script>   
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
               <input type="text" title="User Name" name="" placeholder="User Name">
               <input type="Password" title="Password" name="" placeholder="Password">
               <button>LOGIN </button>                           
            </form>
         </div>
         <!--end of login menu-->
         <div class="menu">
            <ul>
               <li><a href="index.php">HOME</a></li>
               <li><a href="services.php">DOWNLOADS</a></li>
               <li><a href="about.php">ABOUT</a></li>
               <!--<li><a href="services.php">SERVICES</a></li>
               <li><a href="works.php">WORKS</a></li>
               <li ><a href="pricing.php"  >PRICING</a></li>-->
               <li class="selected"><a  href="signup.php">SIGNUP</a></li>
            </ul>
         </div>
         <!--end of menu-->
      </div>
      <!--end of top-->
      <div class="banner">
         <h1>STUDENT ATTENDENCE</h1>
      </div>
      <!--end of banner-->  
      <div class="col-md-12">
         <div class="address">
            <form action="markStdntAttendence.php" method="POST"> 
               <fieldset>
                  <ul>
                  <li class="col-md-3">Date</li>
                  <li><input class="col-md-12" type="Date" name="Date" placeholder="Date" required></li>
 

                  <li class="col-md-3">Grade</li>
                  <li>
                  <select name="grade" required>
                     <option disabled selected value>-- Select Grade --</option>
                     <option value="6">6</option>
                     <option value="7">7</option>
                  </select>
                  </li>

                  <li class="col-md-3">Class</li>
                  <li>
                  <select name="class" required>
                     <option disabled selected value>-- Select Class --</option>
                     <option value="A">A</option>
                     <option value="B">B</option>
                  </select>
                  </li>
                  </ul>
               </fieldset>
               <button type="submit">NEXT</button></div>            
   </form>
            </form>
         </div>
         <!--end of address-->
      </div>
      <!--end of col-md-12-->
<?php
require_once 'footer.php';
?>
   </body>
</html>