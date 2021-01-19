<?php 
require_once 'connection.php';
require_once 'user.php';

$g = $_SESSION['email'];
$cdate = date("Y/m/d m:H:s");

	$viewquery = " SELECT * FROM customer where email='".$g."'";
    $viewresult = mysqli_query($con,$viewquery);
    if ($row = mysqli_fetch_assoc($viewresult)) {

    	$name = $row['first_name'].' '.$row['last_name'];
    	$cus_id = $row['customer_id'];
    	$phone = $row['phone'];
    	$email = $row['email'];


		$q1="INSERT INTO customer_backup(customer_id,name,phone,email,trn_date) values('$cus_id','$name','$phone','$email','$cdate')";
	    $res1=mysqli_query($con,$q1);

	    if ($res1) {


		$query1="DELETE FROM customer WHERE email='$g '";
	          mysqli_query($con,$query1);

	          header('location:user_logout.php');
	    }
    }

 ?>