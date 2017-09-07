<?php
	$servername = "localhost";
	$username = "root";
	$password = ""; // < Need to be changed before going live
	$dbname = "hacktest";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	echo " ";
	// echo "Connected successfully   ";  /*< Enabled for debbugging purposes*/
?>