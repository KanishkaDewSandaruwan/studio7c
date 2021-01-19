<?php 
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

  $delete_query = "DELETE FROM details_block";
  mysqli_query($con,$delete_query);
  header('location:custom.php'); 
 ?>