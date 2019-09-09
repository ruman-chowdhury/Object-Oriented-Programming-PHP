<?php
	
	class Student1{
		
		private $stdName = "Ruman Chowdhury";
		
		//To use private property outside the class,it should be pass through public class
		//private property is only for use inside the class
		public function studentInfo($newName){

			$this->stdName = $newName;
			
			return $this->stdName;
		}


	}

?>