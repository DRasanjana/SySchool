<?php
	include_once "Student.php";
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
			$admissionNumber=$_POST['admissionNumber'];
			$fullName=$_POST['fullName'];
			$nameWithInitials=$_POST['nameWithInitials'];
			$address=$_POST['address'];
			$dateOfBirth=$_POST['dateOfBirth'];
			$gender=$_POST['gender'];
			$nicNumber=$_POST['nicNumber'];
			$contactNumber=$_POST['contactNumber'];
			$class=$_POST['class'];
			$fatherName=$_POST['fatherName'];
			$fatherOccupation=$_POST['fatherOccupation'];
			$motherName=$_POST['motherName'];
			$motherOccupation=$_POST['motherOccupation'];

			$dob=explode("-",$dateOfBirth);
			$date =time()-mktime(0,0,0,$dob[2],$dob[1],$dob[0]);
			$age=$date/31536000;
			echo $age;
			if($age<18){
				Print '<script>alert("Recheck your Date of Birth!");</script>';
				Print '<script>window.location.assign("signupteacher.php");</script>';
			}else{
				$database = new DBOperations();
				$student = new Student($admissionNumber,$fullName,$nameWithInitials,$address,$dateOfBirth,$gender,$nicNumber,$contactNumber,$fatherName,$fatherOccupation,$motherName,$motherOccupation,$username,$password);
				$database->insertStudent($student);
				header ("Location: homestudent.php");
			}
		}else{
			Print '<script>alert("Incorrect password!");</script>';
			Print '<script>window.location.assign("signupstudent.php");</script>';
		}
	?>

</body>
</html>