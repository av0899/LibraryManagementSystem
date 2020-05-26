<?php
	include 'includes/session2.php';

	if(isset($_POST['add'])){
		$student = $_POST['student'];
		$count=$_POST['count'];
		
		$sql = "SELECT * FROM libsystem.students WHERE student_id = '$student'";
		$query = $conn->query($sql);
		if($query->num_rows < 1){
			if(!isset($_SESSION['error'])){
				$_SESSION['error'] = array();
			}
			$_SESSION['error'][] = 'Student not found';
		}
		else{
			$row = $query->fetch_assoc();
			$student_id = $row['student_id'];
			$added = 0;
			foreach($_POST['isbn'] as $isbn){
				if(!empty($isbn)){
					$sql = "SELECT * FROM libsystem.books WHERE ISBN = '$isbn' AND count>='$count'";
					$query = $conn->query($sql);
					if($query->num_rows > 0){
						$brow = $query->fetch_assoc();
						$bid = $brow['id'];
						$sql= "select students.id as id from libsystem.students where student_id='$student'";
						if($conn->query($sql)){
							$id=$row['id'];
							$sql = "INSERT INTO borrow (book_id, date_borrow,status,isbn,student_id,count) VALUES ( '$bid', NOW(),0,'$isbn','$id','$count')";
							if($conn->query($sql)){
								$added++;

								
								$sql = "UPDATE books SET count=count-'$count' WHERE id = '$bid'";
								$conn->query($sql);
							}
							else{
								if(!isset($_SESSION['error'])){
								$_SESSION['error'] = array();
							}
							$_SESSION['error'][] = $conn->error;
							}
						}
					}
					else{
						if(!isset($_SESSION['error'])){
							$_SESSION['error'] = array();
						}
						$_SESSION['error'][] = 'Book with ISBN - '.$isbn.' unavailable';
					}
		
				}
			}

			if($added > 0){
				$book = ($added == 1) ? 'Book' : 'Books';
				$_SESSION['success'] = $added.' '.$book.' successfully borrowed';
			}

		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: borrow2.php');

?>