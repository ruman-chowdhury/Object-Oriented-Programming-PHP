<?php	
		include 'User.php';

//Inheritence: User=only user property; Customer=User+Customer property
/*when a class is execute,by default it calls its constructor,when there is no constructor the class consider empty constructor.*/

	class Customer extends User{
		
		//name,age is initialize from User constructor
		public $dept; 

		// no constructor created,so User class constructor will be called here

		//suppose,we want to add and show some extra data including name,age from User class
		//we override the method,and instead call from User class,this will be called
		public function userDetails(){
			echo $this->name ."<br>";
			echo $this->age ."<br>";
			echo $this->dept ."<br>";
		}


	}

?>