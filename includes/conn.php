<?php
	$conn = new mysqli('localhost', 'root', 'anandavishnu1', 'libsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>