<?php    
	$grade=$_POST['grade'];
    $class=$_POST['class'];
    $classTable=$grade.$class;
    $classAttendanceRecord=$classTable."_AttendanceRecord";
    mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("syschool") or die("Cannot connect to database"); //Connect to database.
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		foreach($_POST['attendance_status'] as $id=>$attendance_status){	
			$Name=$_POST['Name'][$id];
			$ReferenceNum=$_POST['ReferenceNum'][$id];
			$date=date("Y-m-d");
			$Result=mysql_query("INSERT INTO 1A_AttendanceRecord(Name,IndexNo,Attendance,Date) VALUES ('$Name','$ReferenceNum','$attendance_status','$date')");
			if($Result){
				Print '<script>alert("Attendence recorded successfully!");</script>'; 
			}

		} header("location: studentAttendance.php");
	}
?>
   
