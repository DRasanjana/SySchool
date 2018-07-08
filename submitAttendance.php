<?php
include_once "dbconnect.php";    
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		foreach($_POST['attendance_status'] as $id=>$attendance_status){	
			$admission_number=$_POST['admission_number'][$id];
			$date=date("Y-m-d");
			$qry=mysqli_query($con,"SELECT class FROM student WHERE admission_number='$admission_number'");
			$crow=mysqli_fetch_array($qry);
			$class=$crow['class'];

			$Result=mysqli_query($con,"INSERT INTO attendence(admission_number,class,attended,date) VALUES ('$admission_number','$class','$attendance_status','$date')");
			if($Result){
				Print '<script>alert("Attendence recorded successfully!");</script>'; 
			}

		} header("location: studentAttendance.php");
	}
?>
   
