<?php
	$host = "127.0.0.1";
	$userName = "root";
	$password = "";
	$dbName = "messages";
	// Create database connection
	$db = new mysqli($host, $userName, $password, $dbName);
	// Check connection
	if ($db->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
?>