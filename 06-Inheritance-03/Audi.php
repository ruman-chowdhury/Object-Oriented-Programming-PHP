<?php
	include 'Car.php';
	
	class Audi extends Car{

		public $color;
		public $seats;

		

		//========set values===========
		public function setColor($color){

			$this->color = $color;
		}
		public function setSeats($seats){

			$this->seats = $seats;
		}


		//========get values==========
		
		public function getColor(){

			return $this->color;
		}


		public function getSeats(){

			return $this->seats;
		}

		
	



	}//end Audi class

	
?>