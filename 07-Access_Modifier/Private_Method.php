<?php
	
	class Student2{
		
		private $stdName;
		
		
		private function studentInfo($newName){

			$this->stdName = $newName;
			
			return $this->stdName;
		}


		/*to access private method from outside the class,method should be called through public method */
		public function sendInfo($name){
	
			return studentInfo($name);

		}







	}

?>