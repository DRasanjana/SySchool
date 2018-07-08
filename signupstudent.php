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
      <div class="top top-bar-bg">
         <?php include_once "header.php"?>
      </div>
      <!--end of top-->
      <div class="banner">
         <h1>STUDENT SIGNUP</h1>
      </div>
      <!--end of banner-->  
      <div class="col-md-12">
         <div class="address">
            <form action="createstudentaccount.php" method="POST"> 
               <fieldset>
                  <legend>Create an Account</legend>
                  <ul>
                  <li class="col-md-3">Username</li>
                  <li><input class="col-md-12" type="text" name="username" placeholder="Username" required></li>
                  <li class="col-md-3">Password</li>
                  <li><input class="col-md-12" type="Password" name="password" placeholder="Password" required></li>
                  <li class="col-md-3">Confirm Password</li>
                  <li><input class="col-md-12" type="Password" name="confirmPassword" placeholder="Confirm Password" required></li>
                  </ul>
               </fieldset>
               <br>
               <fieldset>
                  <legend>Payment Info</legend>
                  <ul>
                  <li class="col-md-3">Payment Method</li>
                  <li class="col-md-9">
                  <select required>
                     <option>Cash</option>
                     <option>Bank Card</option>
                  </select>
                  </li>
                  <li class="col-md-3">Amount</li>
                  <li><input class="col-md-12" type="text" name="" placeholder="Amount" required></li>
                  <li class="col-md-3">Payment Slip Invoice No</li>
                  <li><input class="col-md-12" type="text" name="" placeholder="Payment Slip Invoice Number" required></li>
                  </ul>
               </fieldset>
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