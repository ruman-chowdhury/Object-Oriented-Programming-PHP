<?php
	include 'User.php';

/* polymorphism conditions:
	i) inherit a class ii) override a method  
*/	

	class Admin extends User{

		public $dept;


		//override method
		public function display(){
			echo $this->name ."<br>";
			echo $this->age ."<br>";
			echo $this->dept ;

		}



	}

?>