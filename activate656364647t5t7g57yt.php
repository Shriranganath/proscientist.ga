<?php
session_start();

include 'dbcon.php';

if(isset($_GET['token'])){

	$token = $_GET['token'];

	$updatequery = " UPDATE users SET status='active' WHERE token='$token' ";

	$query = mysqli_query($con, $updatequery);

	if($query){
		if(isset($_SESSION['msg'])){
			$_SESSION['msg'] = "Account Verified Successfully, now you can login";
			header('location:login.php');
		} else{
			$_SESSION['msg'] = "You Are Logged Out.";

			header('location:login.php');
		}
	}
	else{
		$_SESSION['msg'] = "Account Did Not Verify";
		header('location:register.php');
	}

}

?>