<?php
	include 'Gorib.php';
	include 'Middle.php';
	include 'Rich.php';
	
	class MyStatus implements Gorib,Middle,Rich{
		public $income;
		public $msg;

	
	//================Gorib=======================	
		public function lowMoney($income){
			$this->income = $income;
			return $this->income;
		}

		public function homeLess($msg){
			$this->msg = $msg;
			return $this->msg;
		}


	//================Middle=======================	
		public function mediumMoney($income){
			$this->income = $income;
			return $this->income;
		}

		public function mediumHome($msg){
			$this->msg = $msg;
			return $this->msg;
		}


	//================Rich=======================	
		public function moreMoney($income){
			$this->income = $income;
			return $this->income;
		}

		public function moreHome($msg){
			$this->msg = $msg;
			return $this->msg;
		}





		
	}//end MyStatus class

	
?>