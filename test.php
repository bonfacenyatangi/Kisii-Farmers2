<?php 
// Include the connection.php file on every code the requires a connection to the database
session_start();
include 'connection.php';
if (isset($_POST['login-btn'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];

	$sql="SELECT * FROM members where username='$user' and password='$pass'";
	$results = mysqli_query($conn,$sql);
	// print_r();
	// 
	$counts = mysqli_num_rows($results);
	if ($counts>0) {
		$name = mysqli_fetch_assoc($results)['username'];

		$_SESSION['login'] = $name;
		 
	} else{
		$_SESSION['error'] = "Wrong Username or Password";
		header("Location: login.php");
	}

}
if (isset($_SESSION['login'])) {
		header("Location: dashboard/index.php");
		// echo "Welcome ";
		// unset($_SESSION['login']);
	}else{
		header("Location: login.php");
	}	

	
 ?>