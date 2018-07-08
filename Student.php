<?php

class Student{
	public $admissionNumber;
	public $fullName;
	public $nameWithInitials;
	public $address;
	public $dateOfBirth;
	public $gender;
	public $nicNumber;
	public $contactNumber;
	public $fatherName;
	public $fatherOccupation;
	public $motherName;
	public $motherOccupation;

	public function __construct($admissionNumber,$fullName,$nameWithInitials,$address,$dateOfBirth,$gender,$nicNumber,$contactNumber,$fatherName,$fatherOccupation,$motherName,$motherOccupation){
		$this->admissionNumber=$admissionNumber;
		$this->fullName=$fullName;
		$this->nameWithInitials=$nameWithInitials;
		$this->address=$address;
		$this->dateOfBirth=$dateOfBirth;
		$this->gender=$gender;
		$this->nicNumber=$nicNumber;
		$this->contactNumber=$contactNumber;
		$this->fatherName=$fatherName;
		$this->fatherOccupation=$fatherOccupation;
		$this->motherName=$motherName;
		$this->motherOccupation=$motherOccupation;
	}
}