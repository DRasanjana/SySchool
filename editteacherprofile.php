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
      <title>SySchool - Student SignUp </title>
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
      <?php
         session_start();
         $link= mysqli_connect("localhost", "root", "", "syschool") or die("Something wrong with the server, try again later");
         $sqll = "SELECT * FROM teacher WHERE reference_number='{$_SESSION['user']}'";            
         $res = mysqli_query($link,$sqll);
         if($row=mysqli_fetch_assoc($res)){     
      ?>
      <div class="top top-bar-bg">
         <div class="logo">
            <a href="index.php">Sy<span>S</span>chool</a>
         </div>
         <!--end of logo-->
         <div class="login">
            <form>
               <button><?php echo $_SESSION['uname']; ?></button>                       
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
               <li><a  href="logout.php">LOGOUT</a></li>
            </ul>
         </div>
         <!--end of menu-->
      </div>
      <!--end of top-->
      <div class="banner">
         <h1>EDIT TEACHER PROFILE</h1>
      </div>
      <!--end of banner-->  
      <div class="col-md-12">
         <div class="address">
            <form action="updateteacher.php" method="POST"> 
               <fieldset>
                  <legend>Personal Info</legend>
                  <ul>
                  <li class="col-md-3">Reference Number</li>
                  <li><input class="col-md-12" type="text" name="referenceNumber" disabled value=<?php echo $row['reference_number']; ?> ></li>
                  <li class="col-md-3">Full Name</li>
                  <li><input class="col-md-12" type="text" title="Recheck your Name!" pattern="[a-zA-Z ]{4,}" name="fullName" placeholder="Full Name" value=<?php echo $row['full_name']; ?>></li>
                  <li class="col-md-3">Name with Initials</li>
                  <li><input class="col-md-12" type="text" title="Recheck your Name!" pattern="[a-zA-Z .]{4,}" name="nameWithInitials" placeholder="Name with initials" value=<?php echo $row['name']; ?>></li>
                  <li class="col-md-3">Address</li>
                  <li><input class="col-md-12" type="text" title="Recheck your Address!" pattern="[a-z0-9A-Z ,./-]{4,}" name="address" placeholder="Address" value=<?php echo $row['address']; ?>></li>
                  <li class="col-md-3">Date Of Birth</li>
                  <li><input class="col-md-12" type="Date" name="dateOfBirth"></li>
                  <li class="col-md-3">Gender</li>
                  <li>
                  <select name="gender">
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                  </select>
                  </li>
                  <li class="col-md-3">NIC Number</li>
                  <li><input class="col-md-12" type="text" title="Enter valid NIC Number!" pattern="[0-9]+[Vv]" name="nicNumber" placeholder="NIC Number" value=<?php echo $row['nic_number']; ?>></li>
                  <li class="col-md-3">Contact Number</li>
                  <li><input class="col-md-12" type="text" name="contactNumber" placeholder="Contact Number" value=<?php echo $row['contact_number']; ?>></li>
                  </ul>
               </fieldset>
               <fieldset>
                  <legend>Career Details</legend>
                  <ul>
                  <li class="col-md-3">Field Of Specialized</li>
                  <li><input class="col-md-12" type="text" name="fieldOfSpecialized" placeholder="Field Of Specialized" value=<?php echo $row['field']; ?>></li>
                  <li class="col-md-3">Working Experience</li>
                  <li>
                     <select name="workingExperience">
                        <option value="below1yrs">Below 1 year</option>
                        <option value="below2yrs">Below 2 years</option>
                        <option value="below5yrs">Below 5 years</option>
                        <option value="below10yrs">Below 10 years</option>
                        <option value="below25yrs">Below 25 years</option>
                        <option value="above25yrs">Above 25 years</option>
                     </select>
                  </li>
                  <li class="col-md-3">Position</li>
                  <li><input class="col-md-12" type="text" name="position" placeholder="Position" value=<?php echo $row['position']; ?>></li>
                  </ul>
               </fieldset>
               <?php
                  }
               ?>
               <div class="col-md-2"><button>CANCEL</button></div>
               <button type="submit">UPDATE</button></div>            
            </form>
         </div>
         <!--end of address-->
      </div>
      <!--end of col-md-12-->

      <div class="foot">
         <div class="row">
            <div class="col-md-12 ">
               <div class="col-md-1 nopadding">
                  <div class="head4">
                  <p>CONTACT FOR MORE</p>
                  </div>
               </div>
               <div class="col-md-11 nopadding">
                  <div class="col-md-12 nopadding">
                     <div class="head3">
                        <h3>GET IN   <span>TOUCH</span> WITH US</h3>
                     </div>
                     <div class="sos">
                        <ul>
                           <li>
                              <div class="circle"><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></div>
                           </li>
                           <li>
                              <div class="circle"><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></div>
                           </li>
                           <li>
                              <div class="circle"><a href="http://www.googleplus.com"><i class="fa fa-google-plus"></i></a></div>
                           </li>
                           <li>
                              <div class="circle"><a href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></div>
                           </li>
                        </ul>
                     </div>
                     <!--end of sos-->
                     <div class="con-home">
                        <div class="col-md-4 nopadding">
                           <div class="contact-home">
                              <h4><i class="fa fa-phone"></i></h4>
                              <h3> +94 77 312 90 22</h3>
                              <h3> +94 112 23 45 20</h3>
                           </div>
                           <!--end of contact home-->
                        </div>
                        <!--end of nopadding-->
                        <div class="col-md-4 nopadding">
                           <div class="contact-home">
                              <h4><i class="fa fa-envelope"></i></h4>
                              <h3> 11, A R De Mel Rd,</h3>
                              <h3>Colombo 04</h3>
                           </div>
                           <!--end of contact home-->
                        </div>
                        <!--end of nopadding-->
                        <div class="col-md-4 nopadding">
                           <div class="contact-home">
                              <h4><i class="fa fa-envelope"></i></h4>
                              <h3>contact@gmail.com</h3>
                              <h3>contact@syschool.com</h3>
                           </div>
                           <!--end of contact home-->
                        </div>
                        <!--end of nopadding-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--end of foot-->
      <div class="bottom-foot">
         <div class="row nopadding">
            <div class="col-md-12 nopadding">
               <div class="col-md-6 nopadding">
                  <p>Copyrights &copy; 2018 | <a href="http://www.SySchool.com" style=" color: #16a085;">SySchool</a> Inc</p>
               </div>
               <!--end of col-12-->
               <div class="col-md-6 nopadding">
                  <ul>
                     <li><a href="index.php">HOME</a></li>
                     <li><a href="about.php">ABOUT</a></li>
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