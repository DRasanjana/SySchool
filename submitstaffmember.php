<?php
	include_once "StaffMember.php";
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

		$database = new DBOperations();
		$staffMember = new StaffMember($referenceNumber,$fullName,$nameWithInitials,$address,$dateOfBirth,$gender,$nicNumber,$contactNumber,$fieldOfSpecialized,$workingExperience,$position,$username,$password);
		$database->insertStaffMember($staffMember);
		header ("Location:homestaffmember.php");

		}else{
			Print '<script>alert("Incorrect password!");</script>';
		//Print '<script>window.location.assign("createProfile.php");</script>';
		}
	?>


</body>
</html>