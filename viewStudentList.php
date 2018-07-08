<?php
include_once "dbconnect.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$date=$_POST['Date'];
	$grade=$_POST['grade'];
    $class=$_POST['class'];
    $classTable=$grade.$class;
	$result = mysqli_query($con, "SELECT * FROM student WHERE class=$classTable");
}
?>
