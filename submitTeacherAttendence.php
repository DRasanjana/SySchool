<?php
include_once "dbconnect.php";    
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		foreach($_POST['attendance_status'] as $id=>$attendance_status){	
			$reference_number=$_POST['reference_number'][$id];
			$date=date("Y-m-d");
			$Result=mysqli_query($con,"INSERT INTO teacherattendence(reference_number,attended,date) VALUES ('$reference_number','$attendance_status','$date')");
			if($Result){
				Print '<script>alert("Attendence recorded successfully!");</script>'; 
			}

		}echo "<META HTTP-EQUIV='REFRES' CONTENT=\"1; 'homestaff.php'\">"; 
	}
?>