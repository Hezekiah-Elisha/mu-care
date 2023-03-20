<?php 
//variables
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$servername = "localhost";//localhost
	$name = "root";//root
	$password = "";//empty string
	$database = "mu_care";

	//create connection
	$conn = new mysqli($servername,$name,$password,$database);//variables declared

	//check connection
	if($conn->connect_error){//display an error message
		die("Connection failed" .$conn->connect_error);
	}else{
		echo "Connected successfully";
	}
 ?>