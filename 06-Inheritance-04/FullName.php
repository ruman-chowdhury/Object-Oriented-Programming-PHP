<?php
	
	class FullName{
		public $name;
		
		
		//set name
		public function setName($fullName){
			$this->name = $fullName;
		}

		public function printName(){

			echo $this->name ." from FullName class";
		}
		



	}//end FullName class

?>