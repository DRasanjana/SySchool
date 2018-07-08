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
			$referenceNumber=$_POST['referenceNumber'];
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
			$age=$date/31536000;			if($age<18){
				Print '<script>alert("Recheck your Date of Birth!");</script>';
				Print '<script>window.location.assign("registerteacher.php");</script>';
			}else{
				$database = new DBOperations();
				$teacher = new Teacher($referenceNumber,$fullName,$nameWithInitials,$address,$dateOfBirth,$gender,$nicNumber,$contactNumber,$fieldOfSpecialized,$workingExperience,$position);
				$database->insertTeacher($teacher);
			Print '<script>confirm("Do you want to create an account?");</script>'; 
			Print '<script>window.location.assign("signupteacher.php");</script>';
			}
	?>

</body>
</html>