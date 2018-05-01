
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if($_POST ["password"] == $_POST ["confirmPassword"]){
		header ("Location:homestudent.php");
	}else{
		Print '<script>alert("Incorrect password!");</script>';
		Print '<script>window.location.assign("createProfile.php");</script>';
	}
}
?>