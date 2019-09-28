<?php

/*
	Abstract class must contain at least one abstract method without body and it have to implement in sub-class.
	Non-abstract method can also exist.
	Abstract class/Interface class doesn't contain any variable, only method exist.
*/
	
	Abstract class Gorib{
		
		Abstract function lowMoney($income);
		Abstract function homeLess($msg);

		public function owner(){
			echo "Owner is from Gorib class.";
		}

	}

?>