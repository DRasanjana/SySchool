<?php

class Staff{
	public $referenceNumber;
	public $fullName;
	public $nameWithInitials;
	public $address;
	public $dateOfBirth;
	public $gender;
	public $nicNumber;
	public $contactNumber;
	public $fieldOfSpecialized;
	public $workingExperience;
	public $position;

	public function __construct($referenceNumber,$fullName,$nameWithInitials,$address,$dateOfBirth,$gender,$nicNumber,$contactNumber,$fieldOfSpecialized,$workingExperience,$position){
		$this->referenceNumber=$referenceNumber;
		$this->fullName=$fullName;
		$this->nameWithInitials=$nameWithInitials;
		$this->address=$address;
		$this->dateOfBirth=$dateOfBirth;
		$this->gender=$gender;
		$this->nicNumber=$nicNumber;
		$this->contactNumber=$contactNumber;
		$this->fieldOfSpecialized=$fieldOfSpecialized;
		$this->workingExperience=$workingExperience;
		$this->position=$position;
	}
}