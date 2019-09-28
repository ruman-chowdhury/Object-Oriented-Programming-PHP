<?php
	
	class Student2{
		
		public $stdName;
		
		
		private function setInfo($newName){
			
			$this->stdName = $newName;

		}


		/*to access private method from outside the class,method should be called through public method */
		public function getInfo($name){
			
			$this->setInfo($name);
			
			return $this->stdName;

		}







	}

?>