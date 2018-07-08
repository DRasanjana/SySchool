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
			$type="teacher";
			if($database->checkExistance($username,$type)==1){	
				$password=md5($_POST['password']);
				$user = new User($username,$password,$type);
				$database->addUser($user);
				header("Location: hometeacher.php");
			}else{
				Print '<script>alert("You have to register first!");</script>';
				Print '<script>window.location.assign("registerteacher.php");</script>';
			}
			
			//header ("Location: homestudent.php");
		}else{
			Print '<script>alert("Password Mismatched!");</script>';
			Print '<script>window.location.assign("signupteacher.php");</script>';
		}
		
	?>

</body>
</html>