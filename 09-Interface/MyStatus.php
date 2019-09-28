<?php
	include 'Gorib.php';
	
	class MyStatus implements Gorib{
		public $income;
		public $msg;

		
		public function lowMoney($income){

			$this->income = $income;
			return $this->income;
		}

		public function homeLess($msg){
			
			$this->msg = $msg;
			return $this->msg;
		}

		
	}//end MyStatus class

	
?>