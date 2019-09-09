<?php
	include 'User.php';
	include 'Customer.php';

	$user_obj = new User("Ruman Chowdhury",25);
	$user_obj->userDetails();


	$customer_obj = new Customer;
	$customer_obj->displayMessage();



?>