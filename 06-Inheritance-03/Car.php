<?php
	
	class Car{
	
		public $engineStatus;
		public $bodyPart;

		
		//========Set values===========
		public function setEngineStatus($status){

			$this->engineStatus = $status;
		}

		public function setBodyPart($part){

			$this->bodyPart = $part;
		}
		


		//========get values==========

		public function getEngineStatus(){

			return $this->engineStatus;
		}

		public function getBodyPart(){

			return $this->bodyPart;
		}



	}//end Car

?>