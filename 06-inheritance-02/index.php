<?php
	include 'Customer.php';

/*pass name,age to Customer and by default Customer will call construct from User as we didn't define any constructor in Customer class.so name,age will set through construct.*/

	//name,age set from User class calling constructor & dept is also set
	$customer_obj = new Customer("Umme Habiba",20);
	$customer_obj->dept = "Economics";
	
	$customer_obj->userDetails();
	$customer_obj->displayMessage();



?>