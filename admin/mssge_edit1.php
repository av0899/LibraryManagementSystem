<?php
	include 'includes/session2.php';

	if(isset($_POST['add'])){
		$to = $_POST['to'];
		$mssge = $_POST['mssge'];
		$sql="select id as faculty from faculty where faculty.faculty_id='$to'";
		$query=$conn->query($sql);
		$row=$query->fetch_assoc();
		$sid=$row['faculty'];
		$sql = "update facultymsg set message='$mssge' where faculty_id1='$sid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Message edited successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: send1.php');

?>