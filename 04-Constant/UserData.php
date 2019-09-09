<?php
	
	class UserData{
		
		const NAME = "Ruman Chowdhury"; //In oop,const is fixed and no need to use $ sign before class property
		public $age;


		public function __construct($age){
			
			echo UserData::NAME ."<br>";	//class name::var ,this is the way to access const variable

			$this->age = $age;
			echo $this->age ."<br>";

		}


	}//UserData class

?>