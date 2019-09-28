<?php  
	
	class Student{
		public $name;

		public function describe(){
			echo "From student class.<br>";
		}

		public function __get($name){
			echo $name." doesn't exist.<br>";
		}


		public function __set($key,$value){
			echo $key.":".$value. "<br>";

		}

		public function __call($method,$arr){
			echo "Here is ".$method. " and arguments are:".implode(',', $arr);

		}



	}

?>