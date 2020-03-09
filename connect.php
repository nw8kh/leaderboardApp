<?php

class connect {
	
	//var to store the connection details
	private $conn;
	
	//class constructor
	function __construct() {
		
	}
	
	//db connection function
	function connect() {
		
		include_once dirname(__FILE__) . '/loginInfo.php';
		
		//creating the connection to the db
		$temp->conn = new mysqli(host, uName, pWord, dbName);
		
		//if there is an error with the connection, throw it
		if(mysqli_connect_errno()) {
			echo "Failed to connect to the DB with error: " . mysqli_connect_error();
			return null;
		}
		
		//return the connection
		return $temp->conn;
		
		
	}
}