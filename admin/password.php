<?php
//include 'includes/session.php';
//echo $_SESSION['admin'];
include 'includes/conn.php';
$pass=password_hash('12345678',PASSWORD_DEFAULT);
$q= "update libsystem.faculty set password='$pass' where faculty_id='CS001'";
if(password_verify('12345678',$pass)){
	echo "set";
}
if($conn->query($q)){
	echo "set";
}
else{
	echo "not set";
}

?>