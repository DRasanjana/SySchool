<?php
session_start();
   if( $_SESSION['user']==''){
      header("location: index.php");
   }
?>
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
      <title>SySchool - Edit User Profile</title>
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
         $sqll = "SELECT * FROM student WHERE admission_number='{$_SESSION['user']}'";            
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
               <li class="selected"><a href="homestudent.php">HOME</a></li>
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
         <h1>EDIT STUDENT PROFILE</h1>
      </div>
      <!--end of banner-->  
      <div class="col-md-12">
         <div class="address">
            <form action="updatestudent.php" method="POST"> 
               <fieldset>
                  <ul>
                  <li class="col-md-3">Admission Number</li>
                  <li><input class="col-md-12" type="text" title="Enter valid Admission Number!" pattern="[0-9]{3,6}" name="admissionNumber" placeholder="Admission Number" disabled value=<?php echo $row['admission_number']; ?> ></li>
                  <li class="col-md-3">Full Name</li>
                  <li><input class="col-md-12" type="text" title="Recheck your Name!" pattern="[a-zA-Z ]{4,}" name="fullName" placeholder="Full Name" value=<?php echo $row['full_name']; ?>></li>
                  <li class="col-md-3">Name with Initials</li>
                  <li><input class="col-md-12" type="text" title="Recheck your Name!" pattern="[a-zA-Z .]{4,}" name="nameWithInitials" placeholder="Name with initials" value=<?php echo $row['name']; ?>></li>
                  <li class="col-md-3">Address</li>
                  <li><input class="col-md-12" type="text" title="Recheck your Address!" pattern="[a-z0-9A-Z ,./-]{4,}" name="address" placeholder="Address" value=<?php echo $row['address']; ?>></li>
                  <li class="col-md-3">Date Of Birth</li>
                  <li><input class="col-md-12" type="Date" name="dateOfBirth" value=<?php echo $row['date_of_birth']; ?>></li>
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
                  <li class="col-md-3">Class</li>
                  <li><input class="col-md-12" type="text" name="class" placeholder="Class" value=<?php echo $row['class']; ?>></li>
                  <li class="col-md-3">Father's Name</li>
                  <li><input class="col-md-12" type="text" title="Recheck Father's Name!" pattern="[a-zA-Z ]{4,}" name="fatherName" placeholder="Father's Name" value=<?php echo $row['father_name']; ?>></li>
                  <li class="col-md-3">Occupation</li>
                  <li><input class="col-md-12" type="text" name="fatherOccupation" placeholder="Occupation" value=<?php echo $row['father_occupation']; ?>></li>
                  <li class="col-md-3">Mother's Name</li>
                  <li><input class="col-md-12" type="text" title="Recheck Mother's Name!" pattern="[a-zA-Z ]{4,}" name="motherName" placeholder="Mother's Name" value=<?php echo $row['mother_name']; ?>></li>
                  <li class="col-md-3">Occupation</li>
                  <li><input class="col-md-12" type="text" name="motherOccupation" placeholder="Occupation" value=<?php echo $row['mother_occupation']; ?>></li>
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
      <?php
      require_once 'footer.php';
      ?>
   </body>
</html>