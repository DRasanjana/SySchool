<?php
	include_once "Teacher.php";
	include_once "DBOperations.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		session_start();
        $link= mysqli_connect("localhost", "root", "", "syschool") or die("Something wrong with the server, try again later");
        $sqll = "SELECT * FROM teacher WHERE reference_number='{$_SESSION['user']}'";            
        $res = mysqli_query($link,$sqll);
        if($row=mysqli_fetch_assoc($res)){  
		$fullName=$_POST['fullName'];
		$nameWithInitials=$_POST['nameWithInitials'];
		$address=$_POST['address'];
		$dateOfBirth=$_POST['dateOfBirth'];
		$gender=$_POST['gender'];
		$nicNumber=$_POST['nicNumber'];
		$contactNumber=$_POST['contactNumber'];
		$fieldOfSpecialized=$_POST['fieldOfSpecialized'];
		$workingExperience=$_POST['workingExperience'];
		$position=$_POST['position'];

		$dob=explode("-",$dateOfBirth);
		$date =time()-mktime(0,0,0,$dob[2],$dob[1],$dob[0]);
		$age=$date/31536000;
		if($age<5){
			if($age>18){
				Print '<script>alert("Recheck your Date of Birth!");</script>';
				Print '<script>window.location.assign("registerstudent.php");</script>';
			}
		}else{
			$database = new DBOperations();
			$teacher = new Teacher($row['reference_number'],$fullName,$nameWithInitials,$address,$dateOfBirth,$gender,$nicNumber,$contactNumber,$fieldOfSpecialized,$workingExperience,$position);
			$database->updateTeacher($teacher);
			header("location:hometeacher.php");
		} 
        }	
	?>
</body>
</html>