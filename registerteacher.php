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
      <title>SySchool - Teacher Registration </title>
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
         <?php include_once "header.php"?>
      </div>
      <!--end of top--> 
      <div class="banner">
         <h1>TEACHER REGISTRATION FORM</h1>
      </div>
      <!--end of banner-->  
      <div class="col-md-12">
         <div class="address">
            <form action="submitteacher.php" method="POST">
               <fieldset>
                  <legend>Personal Info</legend>
                  <ul>
                  <li class="col-md-3" class="address">Reference Number</li>
                  <li><input class="col-md-12" type="text" title="Enter valid Reference Number!" pattern="[0-9]{3,6}" name="referenceNumber" placeholder="Reference Number" required></li>
                  <li class="col-md-3">Full Name</li>
                  <li><input class="col-md-12" type="text" title="Recheck your Name!" pattern="[a-zA-Z ]{4,}" name="fullName" placeholder="Full Name" required></li>
                  <li class="col-md-3">Name with Initials</li>
                  <li><input class="col-md-12" type="text" title="Recheck your Name!" pattern="[a-zA-Z .]{4,}" name="nameWithInitials" placeholder="Name with initials" required></li>
                  <li class="col-md-3">Address</li>
                  <li><input class="col-md-12" type="text" title="Recheck your Address!" pattern="[a-z0-9A-Z ,./-]{4,}" name="address" placeholder="Address" required></li>
                  <li class="col-md-3">Date Of Birth</li>
                  <li><input class="col-md-12" type="Date" name="dateOfBirth" required></li>
                  <li class="col-md-3">Gender</li>
                  <li>
                  <select name="gender" required>
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                  </select>
                  </li>
                  <li class="col-md-3">NIC Number</li>
                  <li><input class="col-md-12" type="text" title="Enter valid NIC Number!" pattern="[0-9]+[Vv]" name="nicNumber" placeholder="NIC Number" required></li>
                  <li class="col-md-3">Contact Number</li>
                  <li><input class="col-md-12" type="text" name="contactNumber" placeholder="Contact Number" required></li>
                  </ul>
               </fieldset>
               <fieldset>
                  <legend>Career Details</legend>
                  <ul>
                  <li class="col-md-3">Field Of Specialized</li>
                  <li><input class="col-md-12" type="text" name="fieldOfSpecialized" placeholder="Field Of Specialized" required></li>
                  <li class="col-md-3">Working Experience</li>
                  <li>
                     <select name="workingExperience" required>
                        <option value="below1yrs">Below 1 year</option>
                        <option value="below2yrs">Below 2 years</option>
                        <option value="below5yrs">Below 5 years</option>
                        <option value="below10yrs">Below 10 years</option>
                        <option value="below25yrs">Below 25 years</option>
                        <option value="above25yrs">Above 25 years</option>
                     </select>
                  </li>
                  <li class="col-md-3">Position</li>
                  <li><input class="col-md-12" type="text" name="position" placeholder="Position" required></li>
               </ul>
               </fieldset>
               
               <div class="col-md-2"><button>PRINT</button></div>
               <div class="col-md-10"><button type="submit">SUBMIT</button></div>
            </form>
         </div>
         <!--end of address-->
         <?php
         require_once 'footer.php';
         ?>
   </body>
</html>