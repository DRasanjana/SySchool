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
      <title>SySchool - Home</title>
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
      <div id="slider">
         <img   src="images/backgrounds/1.jpg" border="0"/>
         <img   src="images/backgrounds/2.jpg" border="0"/>
         <img   src="images/backgrounds/3.jpg" border="0"/>        
      </div>
      <!--end of slider-->  
      <div  class="text">
         <h1><span>&nbsp;CONNECT ALL THINGS TOGETHER</span> </h1>
      </div>
      <div id="text-slider">
         <h1 class="wel">REL<span>IAB</span>LE</h1>
         <h1 class="wel">INTEL<span>LIG</span>IBLE</h1>
         <h1 class="wel">HONO<span>RAB</span>LE</h1>
      </div>
      <!--end of text-slider-->
      <!--end of text-slider-->
      <div id="next">
         <a id="p" href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
      </div>
      <!--end of skip-->
      <div id="prev">
         <a id="n" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
      </div>
      <!--end of skip-->

      <div class="top top-index">
      <?php
         require_once "header.php";
      ?>
      </div>
      <?php
      require_once "footer.php";
      ?>  
   </body>
</html>