<?php
include_once "dbconnect.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){

	$date=explode("-",$_POST['Date']);

	$dateDiff = time()-mktime(0,0,0,$date[2],$date[1],$date[0]);
	if($dateDiff>=0){
		$result = mysqli_query($con, "SELECT * FROM teacher");
	}
	else{
		Print '<script>alert("Incorrect Date!");</script>';
		header("location:teacherAttendence.php");
	}
}
?>
