<?php

	
	class User{
		public $name;
		public $age;

		
		public function setValues($name, $age){
			$this->name = $name;
			$this->age = $age;

		}

		public function display(){
			echo $this->name ."<br>";
			echo $this->age ."<br>";

		}



		
	}//end MyStatus class

	
?>