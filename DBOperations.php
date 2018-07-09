<?php

class DBOperations{
	private $serverName;
	private $userName;
	private $password;
	private $dbName;
	private $charset;

	public function connect(){
		$this->serverName='localhost';
		$this->userName='root';
		$this->password='';
		$this->dbName='syschool';
		$this->charset='utf8mb4';

		try {
			$dsn = "mysql:host=".$this->serverName.";dbname=".$this->dbName.";charset=".$this->charset;
			$pdo = new PDO($dsn,$this->userName,$this->password);
			return $pdo;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function addUser($user){
		$this->connect()->query("INSERT INTO user VALUES ('$user->username','$user->password','$user->type')");
	}

	public function checkExistance($username,$type){
		if($type=='student'){$field='admissionNumber';}
		elseif($type=='teacher'){$field='referenceNumber';}
		elseif($type=='staff'){$field='referenceNumber';}
		$result = $this->connect()->query("SELECT * FROM $type WHERE $field=$username");
        return $result->rowCount();
    }
	
	public function checkLogin($username,$password){
		session_start();
		$password=md5($password);
		$link= mysqli_connect("localhost", "root", "", "syschool") or die("Something wrong with the server, try again later");
		$sqll = "SELECT * FROM user WHERE user_id='{$username}' && pw='{$password}'";
		$res = mysqli_query($link,$sqll);
		if($row=mysqli_fetch_assoc($res)){
			if($row['Type']=="student"){
				$_SESSION['user'] = $username;
				$resn=mysqli_query($link,"SELECT * FROM student WHERE admission_number='{$username}'");
				if($rown=mysqli_fetch_assoc($resn)){
					$_SESSION['uname']=$rown['name'];
				}
				header("location: homestudent.php");
			}
			elseif($row['type']=="teacher"){
				$_SESSION['user'] = $username;
				$resn=mysqli_query($link,"SELECT * FROM teacher WHERE reference_number='{$username}'");
				if($rown=mysqli_fetch_assoc($resn)){
					$_SESSION['uname']=$rown['name'];
				}
				header("location: hometeacher.php");
			}
			elseif($row['type']=="staff"){
				$_SESSION['user'] = $username;
				$resn=mysqli_query($link,"SELECT * FROM staff WHERE reference_number='{$username}'");
				if($rown=mysqli_fetch_assoc($resn)){
					$_SESSION['uname']=$rown['name'];
				}
				header("location: homestaff.php");
			}
		}else{
			Print '<script>alert("Password Mismatched!");</script>';
			Print '<script>window.location.assign("index.php");</script>';
		}
    }

	public function insertStudent($student){
		$this->connect()->query("INSERT INTO student VALUES ('$student->admissionNumber','$student->fullName','$student->nameWithInitials','$student->address','$student->dateOfBirth','$student->gender','$student->nicNumber','$student->contactNumber','$student->class','$student->fatherName','$student->fatherOccupation','$student->motherName','$student->motherOccupation')");
	}

	public function insertTeacher($teacher){
		$this->connect()->query("INSERT INTO teacher VALUES ('$teacher->referenceNumber','$teacher->fullName','$teacher->nameWithInitials','$teacher->address','$teacher->dateOfBirth','$teacher->gender','$teacher->nicNumber','$teacher->contactNumber','$teacher->fieldOfSpecialized','$teacher->workingExperience','$teacher->position')");
	}
	public function insertStaffMember($staffmember){
		$this->connect()->query("INSERT INTO staff VALUES ('$staffmember->referenceNumber','$staffmember->fullName','$staffmember->nameWithInitials','$staffmember->address','$staffmember->dateOfBirth','$staffmember->gender','$staffmember->nicNumber','$staffmember->contactNumber','$staffmember->fieldOfSpecialized','$staffmember->workingExperience','$staffmember->position')");
	}

	public function changePassword($user){
		$this->connect()->query("UPDATE user SET pw='$user->password' WHERE user_id='$user->username'");
	}
	
	public function updateStudent($student){
		$this->connect()->query("UPDATE student SET full_name='$student->fullName',name='$student->nameWithInitials',address='$student->address',date_of_birth='$student->dateOfBirth',gender='$student->gender',nic_Number='$student->nicNumber',contact_number='$student->contactNumber',class='$student->class',father_name='$student->fatherName',father_occupation='$student->fatherOccupation',mother_name='$student->motherName',mother_ccupation='$student->motherOccupation' WHERE admission_number='$student->admissionNumber'");
	}

	public function updateTeacher($teacher){
		$this->connect()->query("UPDATE teacher SET full_name='$teacher->fullName',name='$teacher->nameWithInitials',address='$teacher->address',date_of_birth='$teacher->dateOfBirth',gender='$teacher->gender',nic_Number='$teacher->nicNumber',contact_number='$teacher->contactNumber',field='$teacher->fieldOfSpecialized',experience='$teacher->workingExperience',position='$teacher->position' WHERE reference_number='$teacher->referenceNumber'");
	}

	public function updateStaff($staff){
		$this->connect()->query("UPDATE staff SET full_name='$staff->fullName',name='$staff->nameWithInitials',address='$staff->address',date_of_birth='$staff->dateOfBirth',gender='$staff->gender',nic_Number='$staff->nicNumber',contact_number='$staff->contactNumber',field='$staff->fieldOfSpecialized',experience='$staff->workingExperience',position='$staff->position' WHERE reference_number='$staff->referenceNumber'");
	}
}