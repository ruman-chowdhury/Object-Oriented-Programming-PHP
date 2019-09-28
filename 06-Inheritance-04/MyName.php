<?php
	include 'FullName.php';
	
	class MyName extends FullName{
		

		public function printName(){
			echo $this->name ." from MyName class";
		}
/*
	if both class contains same class name and we call the method,sub class will get priority and first sub class method will print.
*/
		
	}//end MyName class

	
?>