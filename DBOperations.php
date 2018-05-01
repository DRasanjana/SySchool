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

	public function insertStudent($student){
		$this->connect()->query("INSERT INTO student VALUES ('$student->admissionNumber','$student->fullName','$student->nameWithInitials','$student->address','$student->dateOfBirth','$student->gender','$student->nicNumber','$student->contactNumber','$student->fatherName','$student->fatherOccupation','$student->motherName','$student->motherOccupation','$student->username','$student->password')");
	}

	public function insertTeacher($teacher){
		$this->connect()->query("INSERT INTO teacher VALUES ('$teacher->referenceNumber','$teacher->fullName','$teacher->nameWithInitials','$teacher->address','$teacher->dateOfBirth','$teacher->gender','$teacher->nicNumber','$teacher->contactNumber','$teacher->fieldOfSpecialized','$teacher->workingExperience','$teacher->position','$teacher->username','$teacher->password')");
	}
	public function insertStaffMember($staffmember){
		$this->connect()->query("INSERT INTO teacher VALUES ('$staffmember->referenceNumber','$staffmember->fullName','$staffmember->nameWithInitials','$staffmember->address','$staffmember->dateOfBirth','$staffmember->gender','$staffmember->nicNumber','$staffmember->contactNumber','$staffmember->fieldOfSpecialized','$staffmember->workingExperience','$staffmember->position','$staffmember->username','$staffmember->password')");
	}

}