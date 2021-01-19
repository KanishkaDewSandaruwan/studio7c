<link rel="stylesheet" type="text/css" href="css/style1_spc.css">
<link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
<!-- include header -->
<?php include 'page_contents/header.php'; ?>
  <!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Edit Profile</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

      <div class="row">
        <div class="col-md-4 mt-5 col-md-5 text-left" style="margin-left: 2%;">
            <h1 class='text-danger'>Studio 7C Edit Profile</h1>
              <div class="form-login"></br>
                <form action="" method="POST"> 
                    <h2>Edit Details</h2>
                    </br>
                    <input type="text" id="userName" name="fname" class="form-control input-sm chat-input" placeholder="First Name"/>
                    </br></br>
                    <input type="text" name="lname" id="userPassword" class="form-control input-sm chat-input" placeholder="Last Name"/>
                    </br></br>
                    <input type="text" name="dob" id="userPassword" class="form-control input-sm chat-input" placeholder="Date of Birth"/>
                    </br></br>
                    <input type="text" name="phone" id="userPassword" class="form-control input-sm chat-input" placeholder="Phone Number"/>
                    </br></br>
                    <input type="text" name="address" id="userPassword" class="form-control input-sm chat-input" placeholder="Your Address"/>
                    </br></br>
                    <div class="wrapper">
                        <button style="font-size: 20px; padding-bottom: 2%;" class="btn col-8 input-sm btn-danger" type="submit" name="submit"><b>Change Details<i class="fa fa-sign-in"></i></b></button><br><br>
                            <!-- <button type="submit" name="submit" class="group-btn">login </button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    </br>
    <?php
    if(isset($_POST['submit']))
    {


        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $dob = $_REQUEST['dob'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $getmail = $_SESSION['email'];
        $cdate = date("Y/m/d m:H:s");


          
                    if(!empty($fname))
                      {
                        $query3="UPDATE customer SET first_name='$fname' WHERE email='".$getmail."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"profile.php\";</script>";
                      }
                      if(!empty($lname))
                      {
                        $query3="UPDATE customer SET last_name='$lname' WHERE email='".$getmail."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"profile.php\";</script>";
                      }

                      if(!empty($address))
                      {
                        $query3="UPDATE customer SET address='$address' WHERE email='".$getmail."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"profile.php\";</script>";
                      }

                      if(!empty($phone))
                      {
                        if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                            $query3="UPDATE customer SET phone='$phone' WHERE email='".$getmail."'";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"profile.php\";</script>";

                          }else{echo "Enter Valid Phone Number";}
                      }


                      if(!empty($dob))
                      {
                        $query3="UPDATE customer SET date_of_birth='$dob' WHERE email='".$getmail."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"profile.php\";</script>";
                      }

    }
?>
<?php include 'page_contents/latest.php'; ?>
<!-- end section -->
<?php include 'page_contents/footer.php'; ?>
</body>
</html>
  <?php 
$viewquery = " SELECT * FROM special_details";
$viewresult = mysqli_query($con,$viewquery); 
$row = mysqli_fetch_assoc($viewresult);
$image = $row['header_image'];
$image_src = "upload/header/".$image;?>

  <style type="text/css">
    .inner_banner_section {
  background: url('<?php echo $image_src; ?>');
  min-height: 245px;
  background-size: cover;
  background-position: center center;
}

.cleaning .inner_banner_section {
  background: url('../images/cleaning_service/inner_page_banner.jpg');
  min-height: 245px;
  background-size: cover;
  background-position: top center;
}
  </style>  