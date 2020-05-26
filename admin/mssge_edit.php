<?php
	include 'includes/session2.php';

	if(isset($_POST['add'])){
		$to = $_POST['to'];
		$mssge = $_POST['mssge'];
		$sql="select id as stud from students where students.student_id='$to'";
		$query=$conn->query($sql);
		$row=$query->fetch_assoc();
		$sid=$row['stud'];
		$sql = "update studmsg set message='$mssge' where student_id1='$sid'";
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

	header('location: send.php');

?>