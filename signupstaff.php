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
      <title>SySchool - Teacher SignUp </title>
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
         <div class="menu">
            <ul>
               <li><a href="index.php">HOME</a></li>
               <li><a href="services.php">DOWNLOADS</a></li>
               <li ><a href="about.php">ABOUT</a></li>
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
         <h1>STAFF MEMBER REGISTRATION FORM</h1>
      </div>
      <!--end of banner-->  
      <div class="col-md-12">
         <div class="address">
            <form action="submitstaffmember.php" method="POST">
               <fieldset>
                  <legend>Personal Info</legend>
                  <ul>
                  <li class="col-md-3" class="address">Reference Number</li>
                  <li><input class="col-md-12" type="text" name="referenceNumber" placeholder="Reference Number"></li>
                  <li class="col-md-3">Full Name</li>
                  <li><input class="col-md-12" type="text" name="fullName" placeholder="Full Name"></li>
                  <li class="col-md-3">Name with Initials</li>
                  <li><input class="col-md-12" type="text" name="nameWithInitials" placeholder="Name with initials"></li>
                  <li class="col-md-3">Address</li>
                  <li><input class="col-md-12" type="text" name="address" placeholder="Address"></li>
                  <li class="col-md-3">Date Of Birth</li>
                  <li><input class="col-md-12" type="Date" name="dateOfBirth" placeholder="Date of Birth"></li>
                  <li class="col-md-3">Gender</li>
                  <li>
                  <select name="gender">
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                  </select>
                  </li>
                  <li class="col-md-3">NIC Number</li>
                  <li><input class="col-md-12" type="text" name="nicNumber" placeholder="NIC Number"></li>
                  <li class="col-md-3">Contact Number</li>
                  <li><input class="col-md-12" type="text" name="contactNumber" placeholder="Contact Number"></li>
                  <li class="col-md-3">Field Of Specialized</li>
                  <li><input class="col-md-12" type="text" name="fieldOfSpecialized" placeholder="Field Of Specialized"></li>
                  <li class="col-md-3">Working Experience</li>
                  <li><input class="col-md-12" type="text" name="workingExperience" placeholder="Working Experience"></li>
                  <li class="col-md-3">Position</li>
                  <li><input class="col-md-12" type="text" name="position" placeholder="Position"></li>
               </ul>
               </fieldset>
               <fieldset>
                  <legend>Payment Info</legend>
                  <ul>
                  <li class="col-md-3">Bank</li>
                              <li><input class="col-md-12" type="text" name="" placeholder="Bank"></li>
                              <li class="col-md-3">Branch</li>
                              <li><input class="col-md-12" type="text" name="" placeholder="Branch"></li>
                              <li class="col-md-3">Account/Card Number</li>
                              <li><input class="col-md-12" type="text" name="" placeholder="Account/Card Number"></li>
                              <li class="col-md-3">Account/Card Name</li>
                              <li><input class="col-md-12" type="text" name="" placeholder="Account/Card Name"></li>
                           </ul>
               </fieldset>
            <fieldset>
                  <legend>Create an Account</legend>
                  <ul>
                  <li class="col-md-3">Username</li>
                  <li><input class="col-md-12" type="text" name="username" placeholder="Username" required="required" ></li>
                  <li class="col-md-3">Password</li>
                  <li><input class="col-md-12" type="Password" name="password" placeholder="Password" required="required"></li>
              <li class="col-md-3">Confirm Password</li>
                  <li><input class="col-md-12" type="Password" name="confirmPassword" placeholder="Confirm Password" required="required"></li>
                  </ul>
               </fieldset>
            
               <div class="col-md-2"><button>PRINT</button></div>
               <div class="col-md-10"><button type="submit">SUBMIT</button></div>

            </form>
         </div>
         <!--end of address-->
      </div>
      <div class="bottom-foot">
         <div class="row nopadding">
            <div class="col-md-12 nopadding">
               <div class="col-md-6 nopadding">
                  <p>Copyrights &copy; 2018 SySchool | Design :<a href="http://www.themeswild.com" style=" color: #16a085;"> themeswild</a></p>
               </div>
               <!--end of col-12-->
               <div class="col-md-6 nopadding">
                  <ul>
                     <li><a href="about.php">ABOUT</a></li>
                     <li><a href="privacy.php">PRIVACY</a></li>
                     <li><a href="terms.php">TERMS & CONDITIONS</a></li>
                  </ul>
               </div>
               <!--end of col-12-->
            </div>
            <!--end of col-12-->
         </div>
         <!--en of row-->
      </div>
      <!--end of bottom foot-->
   </body>
</html>