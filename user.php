<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('location:login.php');
	}else if (isset($_SESSION['email'])) {
		$email = $_SESSION['email'];
		$viewquery3 = " SELECT * FROM customer where email='".$email."'";
		$viewresult3 = mysqli_query($con,$viewquery3);

		if(mysqli_num_rows($viewresult3) <=0){
			header('location:login.php');
		}
	}
?>