1<?php
	include 'includes/session2.php';

	if(isset($_POST['add'])){
		$faculty = $_POST['faculty'];
		$count=$_POST['count'];
		
		$sql = "SELECT * FROM libsystem.faculty WHERE faculty_id = '$faculty'";
		$query = $conn->query($sql);
		if($query->num_rows < 1){
			if(!isset($_SESSION['error'])){
				$_SESSION['error'] = array();
			}
			$_SESSION['error'][] = 'faculty not found';
		}
		else{
			$row = $query->fetch_assoc();
			$faculty_id = $row['faculty_id'];
			$added = 0;
			foreach($_POST['isbn'] as $isbn){
				if(!empty($isbn)){
					$sql = "SELECT * FROM libsystem.books WHERE ISBN = '$isbn' AND count>='$count'";
					$query = $conn->query($sql);
					if($query->num_rows > 0){
						$brow = $query->fetch_assoc();
						$bid = $brow['id'];
						$sql= "select faculty.id as id from libsystem.faculty where faculty_id='$faculty'";
						if($conn->query($sql)){
							$id=$row['id'];
							$sql = "INSERT INTO borrow1 (book_id, date_borrow,status,isbn,faculty_id,count) VALUES ( '$bid', NOW(),0,'$isbn','$id','$count')";
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

	header('location: borrow3.php');

?>