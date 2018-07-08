<?php
include_once "dbconnect.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){

	$date=explode("-",$_POST['Date']);

	$dateDiff = time()-mktime(0,0,0,$date[2],$date[1],$date[0]);
	if($dateDiff>=0){
		$grade=$_POST['grade'];
	    $class=$_POST['class'];
	    $classTable=$grade.$class;
		$result = mysqli_query($con, "SELECT * FROM student WHERE class='$classTable'");
	}
	else{
		Print '<script>alert("Incorrect Date!");</script>';
		header("location:studentattendance.php");
	}
}
?>
