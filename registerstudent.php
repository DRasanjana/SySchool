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
      <title>SySchool - Student Registration </title>
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
         <h1>STUDENT REGISTRATION FORM</h1>
      </div>
      <!--end of banner-->  
      <div class="col-md-12">
         <div class="address">
            <form action="submitstudent.php" method="POST"> 
               <fieldset>
                  <ul>
                  <li class="col-md-3">Admission Number</li>
                  <li><input class="col-md-12" type="text" title="Enter valid Admission Number!" pattern="[0-9]{3,6}" name="admissionNumber" placeholder="Admission Number" required></li>
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
                  <li class="col-md-3">Class</li>
                  <li><input class="col-md-12" type="text" name="class" placeholder="Class" required></li>
                  <li class="col-md-3">Father's Name</li>
                  <li><input class="col-md-12" type="text" title="Recheck Father's Name!" pattern="[a-zA-Z ]{4,}" name="fatherName" placeholder="Father's Name" required></li>
                  <li class="col-md-3">Occupation</li>
                  <li><input class="col-md-12" type="text" name="fatherOccupation" placeholder="Occupation" required></li>
                  <li class="col-md-3">Mother's Name</li>
                  <li><input class="col-md-12" type="text" title="Recheck Mother's Name!" pattern="[a-zA-Z ]{4,}" name="motherName" placeholder="Mother's Name" required></li>
                  <li class="col-md-3">Occupation</li>
                  <li><input class="col-md-12" type="text" name="motherOccupation" placeholder="Occupation" required></li>
                  </ul>
               </fieldset>
               <div class="col-md-2"><button>PRINT</button></div>
               <button type="submit">REGISTER</button></div>            
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