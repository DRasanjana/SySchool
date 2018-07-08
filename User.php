<?php

class User{
	public $username;
	public $password;
	public $type;	

	public function __construct($username,$password,$type){
		$this->username=$username;
		$this->password=$password;
		$this->type=$type;
	}
}