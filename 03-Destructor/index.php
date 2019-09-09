<?php
	
	class Person{
		public $name;
		public $age;


		public function __construct($name,$age){
			$this->name = $name;	
			$this->age = $age;

		}

		public function personDetails(){
			echo $this->name ."<br>";
			echo $this->age ."<br>";
		}


		//__destruct() method is called very last time of the program
		//last minute action,when we want to do something yet by the object
		public function __destruct(){
			if ( !empty($this->age) ) {
				
				echo "data is displayed just before finish the program.";
			}
		}

	}//person class


	//outside the class
	$var1 = "Ruman Chowdhury";
	$var2 = 20;
	$person_obj = new Person($var1, $var2);	//creating instance and passing value

	$person_obj->personDetails(); //after working other functions,__destruct() will be called last


?>