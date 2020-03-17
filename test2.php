<?php 
// Include the connection.php file on every code the requires a connection to the database
session_start();
include 'connection.php';
if (isset($_POST['login-btn'])) {
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$sql="SELECT * FROM members2 where email='$email' and password='$pass'";
	$results = mysqli_query($conn,$sql);
	
	$counts = mysqli_num_rows($results);
	if ($counts>0) {
		$name = mysqli_fetch_assoc($results)['email'];

		$_SESSION['login'] = $name;
		 
	} else{
		$_SESSION['error'] = "Incorrect email or Password";
		header("Location: login.php");
	}

}
if (isset($_SESSION['login'])) {
		header("Location: dashboard/index.php");
		
	}else{
		header("Location: login.php");
	}	

	
 ?>