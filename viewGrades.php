<?php
//session_start();
  // if( $_SESSION['user']==''){
    //  header("location: index.php");
   //}
?>
<?php 

function get_grades(){
   $conn = mysqli_connect('localhost','root','');
   $db = mysqli_select_db($conn,'syschool');
   $query = "SELECT * FROM `score_record` WHERE `admission_number`=123";
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
      $table_str.="<th>Mathematics</th><th>Science</th><th>Sinhala</th><th>English</th><th>Total</th><th>Average</th><th>Rank</th><th>Term</th><th>Year</th>";
      $table_str.="</tr>";
      foreach($grades as $grade){
         $table_str.="<tr>";
         $table_str.='<td>'.$grade->mathematics.'</td>'.'<td>'.$grade->science.'</td>'.'<td>'.$grade->sinhala.'</td>'.'<td>'.$grade->english.'</td>'.'<td>'.$grade->total.'</td>'.'<td>'.$grade->average.'</td>'.'<td>'.$grade->rank.'</td>'.'<td>'.$grade->term.'</td>'.'<td>'.$grade->year.'</td>';
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
      <title>SySchool - View My Grades </title>
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
               <li><a href="homestudent.php">HOME</a></li>
               <li><a href="downloads.php">DOWNLOADS</a></li>
               <li><a  href="logout.php">LOGOUT</a></li>
            </ul>
         </div>
         <!--end of menu-->
      </div>
      <!--end of top-->

      <div class="banner">
         <h1>VIEW MY GRADES</h1>
      </div>
      <!--end of banner-->  

      <div class="timetable" style="overflow-x:auto;">
         <?php
            echo get_table();
         ?>
      </div>

      <?php 
         require_once 'footer.php';
      ?>
   </body>
</html>