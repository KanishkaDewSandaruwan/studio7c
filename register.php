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

</head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container">
            <form class="form-horizontal bg-dark text-white" role="form" style="margin-top: 5%;" method="POST" action="register.php">
                <h2 style="color: white">STUDIO 7C<br>Registration</h2><br>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="fname" placeholder="First Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" name="lname" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text" id="address" name="address" placeholder="Address" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="pass" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="repass" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" name="bday" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" name="phone" id="phoneNumber" placeholder="Phone number" class="form-control">
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-danger col-md-7 mt-1 btn-block">Register</button><br>
                <button type="button" onclick="window.location.href='login.php'" class="btn btn-danger col-md-7 mt-1 btn-block">Login</button>
            </form> <!-- /form -->
            <?php if (isset($_POST['submit'])) {
                $fname = $_REQUEST['fname'];
                $lname = $_REQUEST['lname'];
                $address = $_REQUEST['address'];
                $email = $_REQUEST['email'];
                $pass = $_REQUEST['pass'];
                $repass = $_REQUEST['repass'];
                $bday = $_REQUEST['bday'];
                $phone = $_REQUEST['phone'];
                $cdate = date("Y/m/d m:H:s");

                if(!empty($fname)){
                    if(!empty($lname)){
                        if(!empty($address)){
                            if(!empty($email)){
                              if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                                if(!empty($bday)){
                                    if(!empty($phone)){
                                        if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                              if(!empty($pass)){
                                                if(!empty($repass)){
                                                  if($pass==$repass){
                                                            $query2="SELECT * FROM customer WHERE email='$email'";
                                                          $sql2=mysqli_query($con,$query2);

                                                          if(mysqli_num_rows($sql2)>0){
                                                              echo "<script>alert(\"Email already Exsisted\");</script>";
                                                          }else{    
                                                                $q1="INSERT INTO customer(first_name,last_name,date_of_birth,phone,email,address,password,trn_date) values('$fname','$lname','$bday','$phone','$email','$address','".md5($pass)."','$cdate')";
                                                                      $res1=mysqli_query($con,$q1);

                                                                      if ( $res1) {

                                                                           echo '<script>alert("Your Registration Success. Now you can Sign In"); window.location.href="login.php"; </script>';
                                                                          
                                                                      }else{
                                                                        echo "<script>alert(\"Your Registration is Not Scussess\");</script>";
                                                                      }
                                                                                
                                                                          
                                                                }
                                                  }else{echo "<script>alert(\"Password is Not Match\");</script>";}
                                                }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";}
                                        }else{ echo "<script>alert(\"Enter Password\");</script>";}
                                    }else {echo "<script>alert(\"Enter Valid Phone Number\");</script>";}
                                  }else{ echo "<script>alert(\"Enter Phone Number\");</script>";}
                                }else {echo "<script>alert(\"Select Your Birthday\");</script>";}
                              }else {echo "<script>alert(\"Enter Valid Email Address\");</script>";}
                          }else {echo "<script>alert(\"Enter Email Address\");</script>";}
                        }else{ echo "<script>alert(\"Enter Address\");</script>";}
                    }else{ echo "<script>alert(\"Enter Last Name\");</script>";}
                  }else{ echo "<script>alert(\"Enter First Name\");</script>";} 


            } ?>
        </div> <!-- ./container -->
<?php 
    $regimage = "SELECT * FROM image_manager";
    $regimage_result = mysqli_query($con,$regimage);
    $row = mysqli_fetch_assoc($regimage_result);

    $background_image = $row['reg_image'];
    $backimage_src = "upload/image_manager/".$background_image;

 ?>
<style type="text/css">
    body {
     background: url('<?php echo $backimage_src; ?>') fixed;
    background-size: cover;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}


</style>