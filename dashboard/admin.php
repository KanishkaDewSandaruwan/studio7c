<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:adminlogin/login.php');
	}
?>