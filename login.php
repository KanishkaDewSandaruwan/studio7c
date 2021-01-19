 <?php
  require_once 'connection.php'; //insert connection to page
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Studio 7C</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/img/logo/logo.jpg">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #fff;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<?php 
				    $regimage = "SELECT * FROM image_manager";
				    $regimage_result = mysqli_query($con,$regimage);
				    $row = mysqli_fetch_assoc($regimage_result);

				    $background_image = $row['login_image'];
				    $backimage_src = "upload/image_manager/".$background_image;

				 ?>
				<div class="login100-more" style="background-image: url('<?php echo $backimage_src; ?>');"></div>
				<form style="font-family: 'Times New Roman', Times, serif;" class="login100-form validate-form" method="POST" action="login.php">
					<span style="font-family: 'Times New Roman', Times, serif; color: red" class="login100-form-title p-b-43"><b>STUDIO 7C LOGIN</b></span>
						<span>Login to continue</span><br><br>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn btn-info" type="submit" name="submit">Login</button>
					</div>
					
					<div class="text-left p-t-46 p-b-20">
						<span><a href="register.php">Please Create Account to Login Our Studio</a></span>
					</div>
										<?php
						if(isset($_POST['submit']))
						{
							$email=stripslashes($_REQUEST['email']);
							$pass=stripslashes($_REQUEST['pass']);


							$loginsql3="SELECT * FROM customer WHERE email='$email' AND password='".md5($pass)."'";
							$result3=mysqli_query($con,$loginsql3) or mysqli_errno();
							$rows4=mysqli_num_rows($result3);

							if($rows4 == 1){
								if ($row = mysqli_fetch_assoc($result3)) {
									
									$_SESSION['email']=$email;
									$_SESSION['customer_id']= $row['customer_id'];
									echo "<script type=\"text/javascript\">window.location.href='index.php'; </script>";
								}
							}else{
								echo "<script>alert(\"Username or Password is incorrect\");</script>";
							}
						}
					?>


				</form>
				
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>