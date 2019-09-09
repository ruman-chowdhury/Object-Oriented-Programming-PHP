<?php
	//Inheritence: User=only user property; Customer=User+Customer property
	//Customer extends User means,all property of User is also accessible in Customer
	/*If we didn't declare any construct in Customer,it will also call construct from User automatically,but we only want to access particular method.that's why we need to declare a empty construct in Customer.*/
	class Customer extends User{

		public function __construct(){
			
		}

	}


?>