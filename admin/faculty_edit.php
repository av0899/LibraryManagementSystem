<?php
	include 'includes/session2.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$course = $_POST['course'];
		$stud=$_POST['faculty_id'];
		$sql = "UPDATE faculty SET firstname = '$firstname', lastname = '$lastname', course_id = '$course',faculty_id='$stud' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Faculty updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:faculty.php');

?>