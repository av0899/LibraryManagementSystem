<?php
	include 'includes/session2.php';

	if(isset($_POST['add'])){
		$faculty = $_POST['faculty'];
		$count=$_POST['count'];
		$count1=$_POST['count1'];

		
		$sql = "SELECT * FROM faculty WHERE faculty_id = '$faculty'";
		$query = $conn->query($sql);
		if($query->num_rows < 1){
			if(!isset($_SESSION['error'])){
				$_SESSION['error'] = array();
			}
			$_SESSION['error'][] = 'faculty not found';
		}
		else{
			$row = $query->fetch_assoc();
			$faculty_id = $row['id'];

			$return = 0;
			foreach($_POST['isbn'] as $isbn){
				if(!empty($isbn)){
					$sql = "SELECT * FROM books WHERE isbn = '$isbn'";
					$query = $conn->query($sql);
					if($query->num_rows > 0){
						$brow = $query->fetch_assoc();
						$bid = $brow['id'];
						$sql = "SELECT * FROM libsystem.borrow1 WHERE faculty_id = '$faculty_id' AND isbn = '$isbn' AND status = 0";
						$query = $conn->query($sql);
						if($query->num_rows > 0){
							$borrow = $query->fetch_assoc();
							$borrow_id = $borrow['id'];
							$sql = "INSERT INTO return1 (faculty_id, book_id, date_return,isbn,counts) VALUES ('$faculty_id', '$bid', NOW(),'$isbn','$count')";
							if($conn->query($sql)){
								$return++;
								$sql = "UPDATE books SET count = count+'$count' WHERE id = '$bid'";
								$conn->query($sql);
								if($count1==$count){
								$sql = "UPDATE borrow1 SET status = 1 WHERE id = '$borrow_id'";
								$conn->query($sql);}
								else{
								$sql = "UPDATE borrow1 SET status = 0 WHERE id = '$borrow_id'";
								$conn->query($sql);}
									
								}

							}
							else{
								if(!isset($_SESSION['error'])){
									$_SESSION['error'] = array();
								}
								$_SESSION['error'][] = $conn->error;
							}
						}
						else{
							if(!isset($_SESSION['error'])){
								$_SESSION['error'] = array();
							}
							$_SESSION['error'][] = 'Borrow details not found: ISBN - '.$isbn.', faculty ID: '.$faculty;
						}

						

					}
					else{
						if(!isset($_SESSION['error'])){
							$_SESSION['error'] = array();
						}
						$_SESSION['error'][] = 'Book not found: ISBN - '.$isbn;
					}
		
				}
			}

			if($return > 0){
				$book = ($return == 1) ? 'Book' : 'Books';
				$_SESSION['success'] = $return.' '.$book.' successfully returned';
			}

		}
	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: return3.php');

?>