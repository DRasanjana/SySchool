<?php
include_once "dbconnect.php";    
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		foreach($_POST['attendance_status'] as $id=>$attendance_status){	
			$admission_number=$_POST['admission_number'][$id];
			$date=date("Y-m-d");
<<<<<<< HEAD
			$Result=mysqli_query($con,"INSERT INTO attendence(admission_number,attended,date) VALUES ('$admission_number,'$attendance_status','$date')");
=======
			$Result=mysqli_query($con,"INSERT INTO attendence(admission_number,attended,date) VALUES ('$admission_number','$attendance_status','$date')");
>>>>>>> fe7fcc9bc16aecf9a871cad54bf13ea2d7ef0dfb
			if($Result){
				Print '<script>alert("Attendence recorded successfully!");</script>'; 
			}

		} header("location: hometeacher.php");
	}
?>
   
