<?php
include_once "dbconnect.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$temp=$_POST['Date'];
	$date=explode("-",$temp);

	$dateDiff = time() - mktime(0,0,0,$date[1],$date[2],$date[0]);
	if($dateDiff>=0){
		$grade=$_POST['grade'];
	    $class=$_POST['class'];
	    $classTable=$grade.$class;
		$result = mysqli_query($con, "SELECT * FROM student WHERE class='$classTable'");
	}
	else{
		Print '<script>alert("Incorrect Date!");</script>';
		Print '<script>window.location.assign("studentattendence.php");</script>';
	}
}
?>
