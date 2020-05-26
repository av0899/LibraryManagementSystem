<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: index.php');
	}

	$sql = "SELECT * FROM libsystem.students WHERE id = '".$_SESSION['admin']."'";
	$q = $conn->query($sql);
	$user = $q->fetch_assoc();
	
?>