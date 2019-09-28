<?php
	include 'User.php';

//Inheritence: User=only user property; Customer=User+Customer property
//Customer extends User means,all property of User is also accessible in Customer

//If we didn't declare any construct in Customer,it will also call construct from User automatically
//But if we declare constructor in both class,subclass will get priority if we create object of it	
	
	class Customer extends User{

		//if we hide this,Constructor of user class will be called
		public function __construct(){
			echo "I am Constructor from Customer class";
		}

	
	}


?>