<!DOCTYPE html>
<html lang="en">
   <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="rating" content="General" >
      <meta name="viewport" content="width=device-width, initial-scale:1.0, user-scale:0"/>
      <meta name="robots" content="index, follow" >
      <meta name="googlebot" content="noodp" >
      <meta name="slurp" content="noydir">
      <title>SySchool - Leave Application </title>
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
               <li><a href="logout.php">LOGOUT</a></li>
            </ul>
         </div>
         <!--end of menu-->
      </div>
      <!--end of top-->
      <div class="banner">
         <h1>LEAVE APPLICATION FORM</h1>
      </div>
      <!--end of banner-->  
      <div class="col-md-12">
         <div class="address">
            <form method="POST"> 
               <fieldset>
                  <ul>
                  <li class="col-md-3">Reference Number</li>
                  <li><input class="col-md-12" type="text" disabled name="nicNumber" placeholder="NIC Number" value=<?php echo $row['reference_number']; ?>></li>
                  <li class="col-md-3">Name With Initials</li>
                  <li><input class="col-md-12" type="text" disabled name="contactNumber" value=<?php echo $row['name']; ?>></li>
                  <li class="col-md-3">Type of Leave</li>
                  <li>
                  <select name="leavetype" id="leave" onChange="myFunction();">
                     <option value="shortleave">Short Leave</option>
                     <option value="halfday">Half Day</option>
                     <option value="longleave">Long Leave</option>
                  </select>
                  </li>
                  <li class="col-md-3">Leave Date</li>
                  <li><input class="col-md-12" type="Date" title="Recheck your Leave Date!" name="leavedate"></li>
                  <li class="col-md-3">Leave Until</li>
                  <li><input class="col-md-12" type="Date" title="Recheck your Leave Date!" name="leaveuntil" id="leaveto" disabled></li>
                  <li class="col-md-3">Reason</li>
                  <li><textarea class="col-md-12" rows="3" type="text" name="address" placeholder="Reason"></textarea></li>             </ul>
               </fieldset>
               <?php
                  }
               ?>
               <div class="col-md-2"><button>CANCEL</button></div>
               <button type="submit">REQUEST</button></div>            
            </form>
            <script>
            function myFunction() {
         
         if($('#leave').val()!="longleave"){
            document.getElementById("leaveto").disabled = true;
         }else{
            document.getElementById("leaveto").disabled = false;
            
         }
      }
</script>
         </div>
         <!--end of address-->
      </div>
      <!--end of col-md-12-->

      <?php
      require_once 'footer.php';
      ?>
   </body>
</html>