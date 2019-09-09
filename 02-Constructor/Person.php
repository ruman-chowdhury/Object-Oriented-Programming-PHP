<?php
	
	class Person{
		public $name;
		public $age;

		//constructor:special type of function,when class is accessed it is called automatically
		//constructor can be used to initialize value
		public function __construct($name,$age){
			$this->name = $name;	//assign the value which is sent 
			$this->age = $age;

		}

		public function personDetails(){
			echo $this->name ."<br>";
			echo $this->age ."<br>";
		}

	}//person class

?>