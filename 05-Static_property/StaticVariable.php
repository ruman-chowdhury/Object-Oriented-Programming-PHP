<?php
	
	class UserData{
		//value should be assign when static variable is declared
		public static $userName = "Joe Root";		
		public static $userAge = 30;

		//If we want to print inside class method, echo self::$age;
		public function show(){

			echo self::$userName ."<br>";
			echo self::$userAge ."<br>";

		}


	}//UserData class

?>