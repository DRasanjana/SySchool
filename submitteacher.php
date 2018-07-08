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
		if($_POST["password"] == $_POST["confirmPassword"]){
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
			$username=$_POST['username'];
			$password=md5($_POST['password']);

			$dob=explode("-",$dateOfBirth);
			$date =time()-mktime(0,0,0,$dob[2],$dob[1],$dob[0]);
			$age=$date/31536000;
			echo $age;
			if($age<18){
				Print '<script>alert("Recheck your Date of Birth!");</script>';
				Print '<script>window.location.assign("signupteacher.php");</script>';
			}else{
				$database = new DBOperations();
				$teacher = new Teacher($referenceNumber,$fullName,$nameWithInitials,$address,$dateOfBirth,$gender,$nicNumber,$contactNumber,$fieldOfSpecialized,$workingExperience,$position,$username,$password);
				$database->insertTeacher($teacher);
				header ("Location:hometeacher.php");
			}
		}else{
			Print '<script>alert("Incorrect password!");</script>';
			Print '<script>window.location.assign("signupteacher.php");</script>';
		}
	?>

</body>
</html>