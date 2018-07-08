<?php
	include_once "User.php";
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
			$database = new DBOperations();
			$username=$_POST['username'];
			$type="student";
			if($database->checkExistance($username,$type)==1){	
				$password=md5($_POST['password']);				
				$user = new User($username,$password,$type);
				$database->addUser($user);
				header ("Location: homestudent.php");
			}else{
				Print '<script>alert("You have to register first!");</script>';
				Print '<script>window.location.assign("registerstudent.php");</script>';
			}
			
			//header ("Location: homestudent.php");
		}else{
			Print '<script>alert("Password Mismatched!");</script>';
			Print '<script>window.location.assign("signupstudent.php");</script>';
		}
		
	?>

</body>
</html>