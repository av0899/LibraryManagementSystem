<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: index1.php');
	}

	$sql = "SELECT * FROM libsystem.faculty WHERE id = '".$_SESSION['admin']."'";
	$q = $conn->query($sql);
	$user = $q->fetch_assoc();
	
?>