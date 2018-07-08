<?php

$a = $_SERVER['PHP_SELF'];
$b = explode("/", $a);
$c = end($b);

$colorH = 'black';
$colorD = 'black';
$colorA = 'black';
$colorR = 'black';
$colorS = 'black';

if ($c=="index.php") {
   $colorH = '#16a085';
}
elseif ($c=="downloads.php") {
   $colorD = '#16a085';
}
elseif ($c=="about.php") {
   $colorA = '#16a085';
}
elseif ($c=="registration.php" || $c=="registerstudent.php" || $c=="registerteacher.php" || $c=="registerstaff.php") {
   $colorR = '#16a085';
}
elseif ($c=="signup.php" || $c=="signupstudent.php" || $c=="signupteacher.php" || $c=="signupstaff.php") {
   $colorS = '#16a085';
}

?>

<div class="logo">
            <a href="index.php">Sy<span>S</span>chool</a>
         </div>
         <!--end of logo-->
         <div class="login">
            <form action="checklogin.php" method="POST">
               <input type="text" title="User Name" name="username" placeholder="User Name" required>
               <input type="Password" title="Password" name="password" placeholder="Password" required>
               <button type="submit" name="login">LOGIN</button>                           
            </form>
         </div>
         <!--end of login menu-->
         <div class="menu">
            <ul>
               <li><a style="color: <?php echo $colorH; ?>" href="index.php">HOME</a></li>
               <li><a style="color: <?php echo $colorD; ?>" href="downloads.php">DOWNLOADS</a></li>
               <li><a style="color: <?php echo $colorA; ?>" href="about.php">ABOUT</a></li>
               <li><a style="color: <?php echo $colorR; ?>" href="registration.php">REGISTER</a></li>
               <li><a style="color: <?php echo $colorS; ?>" href="signup.php">SIGN UP</a></li>
            </ul>
         </div>
         <!--end of menu-->