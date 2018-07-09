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
		session_start();
		$database=new DBOperations();
		$club=$_POST['club'];
		$database->joinClub($club,$_SESSION['user']);       
	?>
</body>
</html>