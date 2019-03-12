<?php
	$query;
	$result;
	function db_connect() {
		$host="localhost";
		$username="root";
		$dbname="socialmedia";
		$password="";

		$conn = new PDO("mysql:host=$host; dbname=$dbname;",$username,$password);

		return $conn;
	}
	
	function db_clean_connection(){
		$result=null;
		$conn=null;
	}

?>