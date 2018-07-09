<?php
	include_once "dbconnect.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){

	$date=explode("-",$_POST['Date']);

	$dateDiff = time()-mktime(0,0,0,$date[2],$date[1],$date[0]);
	if($dateDiff>=0){
		$grade=$_POST['grade'];
	    $class=$_POST['class'];
	    $classTable=$grade.$class;
		$result = mysqli_query($con, "SELECT * FROM attendence WHERE date='$date' AND class='$classTable'");
	}
	else{
		Print '<script>alert("Incorrect Date!");</script>';
		header("location:studentattendance.php");
	}
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
         <h1>VIEW STUDENT ATTENDENCE DETAILS </h1>
      </div>
      <!--end of banner-->  
      <div class="col-md-12">
         <div class="address">
            <form method="POST"> 
               <div class="timetable" style="overflow-x:auto;">
         <table>
         	<tr>
               <th>Number</th>
               <th>Admission Number</th>
               <th>Attendance</th>
           </tr>
               <?php
        	   $counter=0;
               $serialNumber = 0;
               while($row=mysqli_fetch_array($result)){
               	$serialNumber++;
               ?>
               <tr>
               <td> <?php echo $serialNumber; ?></td>

               <td> <?php echo $row['admission_number']; ?>
               <input type="hidden" value="<?php echo $row['admission_number']; ?>" name="admission_number[]">
               </td>

               <td> <?php echo $row['attended']; ?>
               <input type="hidden" value="<?php echo $row['attended']; ?>" name="attended[]">
               </td>
               
            </tr>
               <?php
               $counter++;
               }
               ?>
         </table>
      </div>         
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