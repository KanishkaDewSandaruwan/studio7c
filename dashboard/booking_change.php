<?php 

require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

if(isset($_REQUEST['accept_bid']))
{
$id = $_REQUEST['accept_bid'];
$viewquery1 = " SELECT * FROM booking where bid='".$id."'";
$viewresult1 = mysqli_query($con,$viewquery1);
$row1 = mysqli_fetch_assoc($viewresult1);
$pack_id = $row1['pack_id'];
$cus_id = $row1['customer_id'];

$viewquery2 = " SELECT * FROM package where pack_id='".$pack_id."'";
$viewresult2 = mysqli_query($con,$viewquery2);
$row2 = mysqli_fetch_assoc($viewresult2);

$viewquery3 = " SELECT * FROM customer where customer_id='".$cus_id."'";
$viewresult3 = mysqli_query($con,$viewquery3);

	if(mysqli_num_rows($viewresult3)>0)
	{
		if(mysqli_num_rows($viewresult2)>0)
		{
			if ($row2['availability'] == 'Yes') {

					$query3="UPDATE booking SET complete='Accept' WHERE bid='".$id."'";
					$sql3=mysqli_query($con,$query3);
					echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"accept_booking.php\";</script>";

			}else{
				$query3="UPDATE booking SET complete='Reject' WHERE bid='".$id."'";
					$sql3=mysqli_query($con,$query3);
				echo "<script type=\"text/javascript\"> alert(\"This Package Alrady Not Available\"); window.location= \"booking.php\";</script>";}
		}else{$query3="UPDATE booking SET complete='Reject' WHERE bid='".$id."'";
					$sql3=mysqli_query($con,$query3);
			echo "<script type=\"text/javascript\"> alert(\"This Package Deleted\"); window.location= \"booking.php\";</script>";}
	}else{$query3="UPDATE booking SET complete='Reject' WHERE bid='".$id."'";
					$sql3=mysqli_query($con,$query3);
		echo "<script type=\"text/javascript\"> alert(\"This Customer Accout Deleted.\"); window.location= \"booking.php\";</script>";}
}
else if(isset($_REQUEST['reject_bid']))
{
$id = $_REQUEST['reject_bid'];
$query3="UPDATE booking SET complete='Reject' WHERE bid='".$id."'";
$sql3=mysqli_query($con,$query3);
echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"reject_booking.php\";</script>";
}
else if(isset($_REQUEST['complete_bid']))
{
$id = $_REQUEST['complete_bid'];
$viewquery1 = " SELECT * FROM booking where bid='".$id."'";
$viewresult1 = mysqli_query($con,$viewquery1);
$row1 = mysqli_fetch_assoc($viewresult1);
$pack_id = $row1['pack_id'];
$cus_id = $row1['customer_id'];

$viewquery2 = " SELECT * FROM package where pack_id='".$pack_id."'";
$viewresult2 = mysqli_query($con,$viewquery2);
$row2 = mysqli_fetch_assoc($viewresult2);

$viewquery3 = " SELECT * FROM customer where customer_id='".$cus_id."'";
$viewresult3 = mysqli_query($con,$viewquery3);

	if(mysqli_num_rows($viewresult3)>0)
	{
		if(mysqli_num_rows($viewresult2)>0)
		{
			if ($row2['availability'] == 'Yes') {

					$query3="UPDATE booking SET complete='Completed' WHERE bid='".$id."'";
					$sql3=mysqli_query($con,$query3);
					echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"completed_booking.php\";</script>";

			}else{
				$query3="UPDATE booking SET complete='Reject' WHERE bid='".$id."'";
				$sql3=mysqli_query($con,$query3);

				echo "<script type=\"text/javascript\"> alert(\"This Package Alrady Not Available. System will Reject This Booking\"); window.location= \"accept_booking.php\";</script>";}
		}else{
			$query3="UPDATE booking SET complete='Reject' WHERE bid='".$id."'";
				$sql3=mysqli_query($con,$query3);
			echo "<script type=\"text/javascript\"> alert(\"This Package Deleted. System will Reject This Booking\"); window.location= \"accept_booking.php\";</script>";}
	}else{
		$query3="UPDATE booking SET complete='Reject' WHERE bid='".$id."'";
				$sql3=mysqli_query($con,$query3);
		echo "<script type=\"text/javascript\"> alert(\"This Customer Accout Deleted. System will Reject This Booking\"); window.location= \"accept_booking.php\";</script>";}
}
else if(isset($_REQUEST['complete_delete']))
{
$id = $_REQUEST['complete_delete'];
$query3="DELETE FROM booking WHERE bid='".$id."'";
$sql3=mysqli_query($con,$query3);
echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"completed_booking.php\";</script>";
}
else if(isset($_REQUEST['reject_delete']))
{
$id = $_REQUEST['reject_delete'];
$query3="DELETE FROM booking WHERE bid='".$id."'";
$sql3=mysqli_query($con,$query3);
echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"reject_booking.php\";</script>";
}
 ?>