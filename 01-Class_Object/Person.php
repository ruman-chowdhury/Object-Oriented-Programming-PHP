<?php
	
	//class name should be start with capital letter
	class Person{
		public $name;
		public $age = 50;
		public $marks;

		function personName(){
			echo $this->name ."<br>";

		}

		
		function personAge(){
			return $this->age;	//return the age

		}

		
		function personResult($x,$y){
			$this->marks = ($x + $y); //receive the value and assigned in another variable "$marks"
			return $this->marks;

		}


	}

?>