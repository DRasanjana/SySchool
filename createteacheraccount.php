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
				session_start();
				$_SESSION['user'] = $username;
				$link= mysqli_connect("localhost", "root", "", "syschool") or die("Something wrong with the server, try again later");
				$resn=mysqli_query($link,"SELECT * FROM teacher WHERE ReferenceNumber='{$username}'");
				if($rown=mysqli_fetch_assoc($resn)){
					$_SESSION['uname']=$rown['NameWithInitials'];
				}
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