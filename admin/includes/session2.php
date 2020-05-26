<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: index2.php');
	}

	$sql = "SELECT * FROM libsystem.admin WHERE id = '".$_SESSION['admin']."'";
	$q = $conn->query($sql);
	$user = $q->fetch_assoc();
	
?>