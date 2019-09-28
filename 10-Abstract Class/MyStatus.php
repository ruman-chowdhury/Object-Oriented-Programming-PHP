<?php
	include 'Gorib.php';

/*
	We can't create any object of abstract class.we need to extend to access abstract class.
*/
	
	class MyStatus extends Gorib{
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





		
	}//end MyStatus class

	
?>