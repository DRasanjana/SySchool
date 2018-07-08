<?php
  include_once "User.php";
  include_once "DBOperations.php";


if(isset($_POST['login'])){
  $db = new DBOperations();
  $db->checklogin($_POST['username'],$_POST['password']);
}
	
  /*$Student_query = mysql_query("Select * from user WHERE Username='$username'"); 
	$Teacher_query = mysql_query("Select * from teacher WHERE Username='$username'"); 
	$Admin_query = mysql_query("Select * from staff WHERE Username='$username'");
	*/
  //$Student_exists = mysql_num_rows($Student_query);
	/*$Teacher_exists = mysql_num_rows($Teacher_query);
	$Admin_exists = mysql_num_rows($Admin_query);*/
	
   /* $StudentTableUser = "";
    $StudentTablePassword = "";	
	$TeacherTableUser = "";
	$TeacherTablePassword = "";	
	$AdminTableUser = "";
    $AdminTablePassword = "";
	
    if($Student_exists > 0) 
    {
       while($row = mysql_fetch_assoc($Student_query))
       {																																																																																																																																																																																																																															
          $StudentTableUser = $row['Username']; 
          $StudentTablePassword = $row['Password']; 
       }
       if(($username == $StudentTableUser) && ($password == $StudentTablePassword))
       {
          if($password == $StudentTablePassword)
          {
             $_SESSION['user'] = $username; 
             header("location: homestudent.php"); 
          }
       }
       else
       {
        Print '<script>alert("Incorrect Password!");</script>'; 
        Print '<script>window.location.assign("index.php");</script>'; 
       }
	   
	   
    }
	/*else if($Teacher_exists > 0)
	{
		while($row = mysql_fetch_assoc($Teacher_query))
       {																																																																																																																																																																																																																															
          $TeacherTableUser = $row['Username']; 
          $TeacherTablePassword = $row['Password']; 
       }
       if(($username == $TeacherTableUser) && ($password == $TeacherTablePassword))
       {
          if($password == $TeacherTablePassword)
          {
             $_SESSION['user'] = $username; 
             header("location: hometeacher.php"); 
          }
       }
       else
       {
        Print '<script>alert("Incorrect Password!");</script>'; 
        Print '<script>window.location.assign("index.php");</script>'; 
	
	}
	
	}
	else if($Admin_exists>0)
	{
		while($row = mysql_fetch_assoc($Admin_query))
       {																																																																																																																																																																																																																															
          $AdminTableUser = $row['Username']; 
          $AdminTablePassword = $row['Password']; 
       }
       if(($username == $AdminTableUser) && ($password == $AdminTablePassword))
       {
          if($password == $AdminTablePassword)
          {
             $_SESSION['user'] = $username; 
             header("location: homestaff.php"); 
          }
       }
       else
       {
        Print '<script>alert("Incorrect Password!");</script>'; 
        Print '<script>window.location.assign("index.php");</script>'; 
	}
	}*/
    else{
        Print '<script>alert("Incorrect username!");</script>'; 
        Print '<script>window.location.assign("index.php");</script>';
    }

?>