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
      <title>SySchool - View Assignments </title>
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
         <h1>VIEW ASSIGNMENT </h1>
      </div>
      <!--end of banner-->  
      <div class="col-md-12">
         <div class="address">
            <form action="selectAssignment.php" method="POST"> 
               <?php
                  if(!isset($_POST['assignmentname'])){

                  include_once "assignment.php";
                  include_once "dbconnect.php";
                  $subject=$_POST['subject'];
                  $sql = "SELECT * FROM Assignments WHERE id='$subject'"; 
                  $qry = $con->query($sql);
                  $opt = "<select name='assignmentname' onchange='this.form.submit()'> ";
                  $opt .= '<option disabled selected value> -- select an option -- </option>';
                  $result=mysqli_fetch_array($qry);
                  $size=sizeof($result);

                if($size>0){
                  while($row = $qry->fetch_assoc()){
                    $assignment = unserialize($row['val']);
                    if($_POST['class']==$assignment->getClass() && $assignment->getGrade() == $_POST['grade']){
                      $opt .= '<option value="'.$assignment->getAssignmentname().'">'.$assignment->getAssignmentname().'</option>';
                  
                    }
                }
                }
                  $opt .= "</select>";
                  ?>
                  <fieldset>
                  <ul>
                  <li class="col-md-3">Select Assignment</li>
                  <li>
                  <?php
                  echo $opt;}     
                  ?>
                </li>
              </ul>
            </fieldset>
            <!-- <button type="submit" name="submit">NEXT</button> -->

                     
   </form>

         </div>
         <!--end of address-->
      </div>
      <!--end of col-md-12-->
<li class="col-md-3">Download Assignment</li>;
        <?php
        if(isset($_POST['assignmentname'])){
            
            include_once "assignment.php";
            include_once "dbconnect.php";
            $assignmentname=$_POST['assignmentname'];
            $asql = "SELECT val FROM Assignments WHERE assignmentname='$assignmentname'"; 
            $aqry = $con->query($asql);
            $row = $aqry->fetch_assoc();
            $assignment = unserialize($row['val']);
        ?>
            <fieldset>
            <ul>
            <li>
              
              <?php

              echo "<a href='".$assignment->getLink()."' download>Download</a>";

            }
            ?>
</li>
</ul>
</fieldset>
<?php
require_once 'footer.php';
?>
   </body>
</html>

