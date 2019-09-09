<?php
	
	class Person{
		public $personName;
		public $personAge;
		public $personCountry;

		//constructor:special type of function,when class is accessed it is called automatically
		//constructor can be used to initialize value
		public function __construct($name,$age,$country){
			
			$this->personName = $name; 
			$this->personAge = $age;
			$this->personCountry = $country;

		}

		public function personDetails(){
			/*multiple arguments should be return as array,'return' keyword can only return one single argument */
			return array($this->personName,$this->personAge,$this->personCountry);

		}

	}//person class

?>