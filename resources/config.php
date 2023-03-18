<?php 
//variables
	$servername = "localhost";//localhost
	$name = "root";//root
	$password = "";//empty string
	$database = "mu-care";

	//create connection
	$conn = new mysqli($servername,$name,$password,$database);//variables declared

	//check connection
	if($conn->connect_error){//display an error message
		die("Connection failed" .$conn->connect_error);
	}else{
		echo "Connected successfully";
	}
 ?>