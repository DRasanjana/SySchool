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
      <title>SySchool - Time Table</title>
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
               <button>B L O D HEMACHANDRA</button>                           
            </form>
         </div>
         <!--end of login menu-->
         <div class="menu">
            <ul>
               <li class="selected"><a href="homestudent.php">HOME</a></li>
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
         <h1>STUDENT TIME TABLE</h1>
      </div>
      <!--end of banner-->

      <div class="timetable" style="overflow-x:auto;">
         <table>
            <tr>
               <th></th>
               <th>Monday</th>
               <th>Tuesday</th>
               <th>Wednesday</th>
               <th>Thursday</th>
               <th>Friday</th>
            </tr>
            <tr>
               <td>07.50-08.30</td>
               <td>Mathematics</td>
               <td>History</td>
               <td>History</td>
               <td>Sinhala</td>
               <td>English</td>
            </tr>
            <tr>
               <td>08.30-09.10</td>
               <td>Mathematics</td>
               <td>History</td>
               <td>History</td>
               <td>Sinhala</td>
               <td>English</td>
            </tr>
            <tr>
               <td>09.10-09.50</td>
               <td>Mathematics</td>
               <td>History</td>
               <td>History</td>
               <td>Sinhala</td>
               <td>English</td>
            </tr>
            <tr>
               <td>09.50-10.30</td>
               <td>Mathematics</td>
               <td>History</td>
               <td>History</td>
               <td>Sinhala</td>
               <td>English</td>
            </tr>
            <tr>
               <td>10.30-10.50</td>
               <td>I N</td>
               <td>T E</td>
               <td>R</td>
               <td>V A</td>
               <td>L</td>
            </tr>
            <tr>
               <td>10.50-11.30</td>
               <td>Mathematics</td>
               <td>History</td>
               <td>History</td>
               <td>Sinhala</td>
               <td>English</td>
            </tr>
            <tr>
               <td>11.30-12.10</td>
               <td>Mathematics</td>
               <td>History</td>
               <td>History</td>
               <td>Sinhala</td>
               <td>English</td>
            </tr>
            <tr>
               <td>12.10-12.50</td>
               <td>Mathematics</td>
               <td>History</td>
               <td>History</td>
               <td>Sinhala</td>
               <td>English</td>
            </tr>
            <tr>
               <td>12.50-01.30</td>
               <td>Mathematics</td>
               <td>History</td>
               <td>History</td>
               <td>Sinhala</td>
               <td>English</td>
            </tr>
         </table>
      </div>

      <?php
      require_once 'footer.php';
      ?>
      
   </body>
</html>