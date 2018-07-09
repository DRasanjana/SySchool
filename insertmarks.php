<?php
session_start();
   if( $_SESSION['user']==''){
      header("location: index.php");
   }
?>
<?php 

function get_grades(){
   $conn = mysqli_connect('localhost','root','');
   $db = mysqli_select_db($conn,'syschool');
   $query = "SELECT `admission_number`, `name` FROM `student` WHERE `class`='6A'";
   $data = mysqli_query($conn,$query);
   $grades = array();
   while($object=mysqli_fetch_object($data)){
      $grades[]=$object;
   }
   mysqli_close($conn);
   return $grades;
}

function get_table(){
      $table_str="<table>";
      $grades=get_grades();
      $table_str.="<tr>";
      $table_str.="<th>Admission Number</th><th>Student Name</th><th>Marks</th>";
      $table_str.="</tr>";
      foreach($grades as $grade){
         $table_str.="<tr>";
         $table_str.='<td>'.$grade->admission_number.'</td>'.'<td>'.$grade->name.'</td>'.'<td><input class="col-md-12" type="text" name="marks"></td>';
         $table_str.="</tr>";
      }
      $table_str.="</table>";
      return $table_str;
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
      <title>SySchool - Submit Marks </title>
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
         <h1>MARKS SUBMISSION</h1>
      </div>
      <!--end of banner-->  
      <div class="col-md-12">
         <div class="address">
            <form action="submitMarks.php" method="POST"> 
               <fieldset>
                  <ul>
                  <li class="col-md-3">Class</li>
                  <li>
                  <select name="class">
                     <option value="6a">6A</option>
                     <option value="7a">7A</option>
                  </select>
                  </li>
                  <li class="col-md-3">Subject</li>
                  <li><input class="col-md-9" type="text" name="subject" placeholder="Subject"></li>
                  <div class="timetable" style="overflow-x:auto;">
                     <?php
                        echo get_table();
                     ?>
                  </div>

                  <li class="col-md-3">Term</li>
                  <li>
                  <select name="term">
                     <option value="term_1">Term 1</option>
                     <option value="term_2">Term 2</option>
                     <option value="term_3">Term 3</option>
                  </select>
                  </li>
                  <li class="col-md-3">Year</li>
                  <li><input class="col-md-3" type="text" name="year" placeholder="Enter the year"></li>

               <div class="col-md-2"><button>PRINT</button></div>
               <button type="submit">SUBMIT</button></div>   
   </form>
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