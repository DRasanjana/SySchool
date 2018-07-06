<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$date=$_POST['Date'];
	$grade=$_POST['grade'];
    $class=$_POST['class'];
    $classTable=$grade.$class;
    $classAttendanceRecord=$classTable."_AttendanceRecord";
	$con = mysqli_connect("localhost","root","","syschool");
	$result = mysqli_query($con, "select * from $classTable");
}
?>
