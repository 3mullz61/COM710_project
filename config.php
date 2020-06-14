<?php 
	
	$server = "127.0.0.1";
 	$db = "Q13840061";
 	$username = "Q13840061";
 	$password = "wejiepeo";

 	try {
 	$conn = new PDO("mysql:host=$server;dbname=$db", $username, $password);
 	}

 	catch(PDOException $e) {
 	echo "Could not connect to database.";
 	}
	
?>