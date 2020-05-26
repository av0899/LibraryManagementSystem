<?php
	include 'includes/session2.php';

	if(isset($_POST['add'])){
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$author = $_POST['author'];
		$publisher = $_POST['publisher'];
		$pub_date = $_POST['pub_date'];
		$count=$_POST['count'];
		$sql = "INSERT INTO books (isbn, category_id, title, author, publisher, publish_date,count) VALUES ('$isbn', '$category', '$title', '$author', '$publisher', '$pub_date','$count')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Book added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: book2.php');

?>