<?php
	include 'includes/session2.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$course = $_POST['course'];
		$faculty_id=$_POST['faculty_id'];
		$filename = $_FILES['photo']['name'];
		$tmp_name=$_FILES['photo']['tmp_name'];
		$destiny='../images/'.$filename;	
		echo "<script>window.alert('$destiny')</script>";	
		$password=$faculty_id;
		if(!empty($filename)){

			move_uploaded_file($tmp_name,$destiny);	
		}
		//creating studentid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		//$student_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		$sql = "INSERT INTO faculty (faculty_id, firstname, lastname,  photo,course_id, created_on,password,username) VALUES ('$faculty_id', '$firstname', '$lastname',  '$filename', '$course',NOW(),'$password','$faculty_id')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Faculty added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: faculty.php');
?>