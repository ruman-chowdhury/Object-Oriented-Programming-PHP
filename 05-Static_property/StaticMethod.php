<?php
	class UserInfo{
		//variable is non static,so we can set value by calling method
		public $userName ;		
		public $userAge ;

		//In static method,shouldn't 'this' keyword when initialize
		public static function showName($name){
			$userName = $name;
			return $userName;
			
		}

		public static function showAll($name,$age){
			$userName = $name;
			$userAge = $age;

			//multiple parameter return as array,becoz return can only return one parameter
			return array($userName,$userAge); 
		}


	}//UserData class
	
?>