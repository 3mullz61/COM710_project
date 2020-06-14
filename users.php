<?php

require_once("config.php");

function create_user() {
	
	session_start();
	if(isset($_POST['register'])){
		
		require_once ('config.php');
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "INSERT INTO Users (username, password) values ('$username', '$password')";
		
		$result = $conn->query($sql);
		}
	
}
function retrieve_user($id) {
	session_start();
	if(isset($_POST['login'])){
		
		require_once ('config.php');
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$r = mysql_query("SELECT * FROM Users where username = '$username' and password = '$password'");
		
		if(false == $r){
			die ("unable to find user!");
		}
		if( 1 == mysql_num_rows($r)){
			$_SESSION['user'] = $username;
			header("Location: account.php");
		}
	}
}
function update_user($id, $data) {
	
}
function delete_user($id) {
}


?>