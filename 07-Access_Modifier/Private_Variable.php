<?php
	
	class Student1{
		
//private property is only for use inside the class
//private variable can not access/initialize from outside the class		
		private $stdName = "Ruman Chowdhury";
		
		
		public function studentInfo(){
			
			return $this->stdName;
		}


	}

?>