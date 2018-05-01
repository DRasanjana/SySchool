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
	//if($_SERVER["REQUEST_METHOD"] == "POST"){
	if($_POST['password'] == $_POST['confirmPassword']){ 
		$admissionNumber=$_POST['admissionNumber'];
		$fullName=$_POST['fullName'];
		$nameWithInitials=$_POST['nameWithInitials'];
		$address=$_POST['address'];
		$dateOfBirth=$_POST['dateOfBirth'];
		$gender=$_POST['gender'];
		$nicNumber=$_POST['nicNumber'];
		$contactNumber=$_POST['contactNumber'];
		$fatherName=$_POST['fatherName'];
		$fatherOccupation=$_POST['fatherOccupation'];
		$motherName=$_POST['motherName'];
		$motherOccupation=$_POST['motherOccupation'];
		$username=$_POST['username'];
		$password=md5($_POST['password']);

		$database = new DBOperations();
		$student = new Student($admissionNumber,$fullName,$nameWithInitials,$address,$dateOfBirth,$gender,$nicNumber,$contactNumber,$fatherName,$fatherOccupation,$motherName,$motherOccupation,$username,$password);
		$database->insertStudent($student);
		header ("Location:homestudent.php");
	}else{
		Print '<script>alert("Incorrect password!");</script>';
		//header ("Location:signupstudent.php");
	}
?>

</body>
</html>