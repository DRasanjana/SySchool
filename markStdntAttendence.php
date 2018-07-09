<?php
session_start();
   if( $_SESSION['user']==''){
      header("location: index.php");
   }
?>
<?php
	include("viewStudentList.php");
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
            <a>Sy<span>S</span>chool</a>
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
               <li><a href="hometeacher.php">HOME</a></li>
               <li><a href="downloads.php">DOWNLOADS</a></li>
               <li><a  href="logout.php">LOGOUT</a></li>
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
            <form action="submitAttendence.php" method="POST"> 
               <div class="timetable" style="overflow-x:auto;">
               <table>
            	<tr>
               <th>Number</th>
               <th>Name</th>
               <th>IndexNumber</th>
               <th>Attendence</th>
               </tr>
               <?php
               $counter=0;
               $serialNumber = 0;
               while($row=mysqli_fetch_array($result)){
               	$serialNumber++;
               ?>
               <tr>
               <td> <?php echo $serialNumber; ?></td>
               <td> <?php echo $row['name']; ?>
               <input type="hidden" value="<?php echo $row['name']; ?>" name="name[]">
               </td>
               <td> <?php echo $row['admission_number']; ?>
               <input type="hidden" value="<?php echo $row['admission_number']; ?>" name="admission_number[]">
               </td>
               <td> 
               <input type="radio" name="attendance_status[<?php echo $counter;?>]" value="Present" required>Present
               <input type="radio" name="attendance_status[<?php echo $counter;?>]" value="Absent" required>Absent
               </td>
               </tr>
               <?php
               $counter++;
               }
               ?>
               </table>
               </div>
            <button type="submit">SUBMIT</button></div>            
         </form>
      </form>
   </div>
   <!--end of address-->
</div>
<!--end of col-md-12-->

<?php
   require_once "footer.php";
?>
   </body>
</html>

