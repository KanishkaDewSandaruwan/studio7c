<?php
include 'connection.php';

session_start();
	session_destroy();
	session_unset();

	header('location:adminlogin/login.php');
?>