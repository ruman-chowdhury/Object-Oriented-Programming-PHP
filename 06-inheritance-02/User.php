<?php
	
	class User{
		public $name;
		public $age;


		public function __construct($username,$userage){
			$this->name = $username;	//initialize value
			$this->age = $userage;
		}

		public function userDetails(){
			echo $this->name ."<br>";
			echo $this->age ."<br>";
		}


		public function displayMessage(){
			echo "I am from User(parent class) class.";
		}


	}//User class



?>