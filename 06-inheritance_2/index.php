<?php
	include 'User.php';
	include 'Customer.php';

	$user_obj = new User("Ruman Chowdhury",25);
	$user_obj->userDetails();


	//pass name,age to Customer and by default Customer will call construct from User as we didn't define any constructor in Customer class.so name,age will set through construct
	$customer_obj = new Customer("Umme Habiba",20);
	//name,age set from User class calling constructor & dept is also set
	$customer_obj->dept = "Economics";
	$customer_obj->userDetails();



?>