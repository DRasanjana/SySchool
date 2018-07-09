<?php
include_once "dbconnect.php";    
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		foreach($_POST['attendance_status'] as $id=>$attendance_status){	
			$admission_number=$_POST['admission_number'][$id];
			$date=date("Y-m-d");
			$qry=mysqli_query($con,"SELECT name,class FROM student WHERE admission_number='$admission_number'");
			$crow=mysqli_fetch_array($qry);
			$name=$crow['name'];
			$class=$crow['class'];
			$i=0;
			$j=0;
			$i++;
			$Result=mysqli_query($con,"INSERT INTO attendence(admission_number,name,class,attended,date) VALUES ('$admission_number','$name','$class','$attendance_status','$date')");
			if($Result){
				$j++;
			}

		}if($i==$j){
			Print '<script>alert("Attendence recorded successfully!");</script>';
			echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"1; 'hometeacher.php'\">";
		}else{
			Print '<script>alert("An Error Occured while recoding!");</script>';
			echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"1; 'studentattendence.php'\">"; 
		}
	}
?>