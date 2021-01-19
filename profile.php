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
              <h1 class="page-title">Profile</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
        <div class="col-md-10 p-5 col-md-4 text-left">
            <?php 
            $viewquery = " SELECT * FROM customer where email = '".$_SESSION['email']."'";
            $viewresult = mysqli_query($con,$viewquery);
            $row = mysqli_fetch_assoc($viewresult); ?>


            <h1>My Account Details</h1><br><br>
            <!-- <div class="dropdown-divider"></div> -->
            <div class="row ml-3">  
               <h3 style="color: black;"><?php echo $row['first_name'].' '.$row['last_name']; ?></h3>
            </div>
            <div class="row ml-3">
               <h3 style="color: black;"><?php echo $row['address']; ?></h3>
            </div>
            <div class="row ml-3">
               <h3 style="color: black;"><?php echo $row['date_of_birth']; ?></h3>
            </div>
            <div class="row ml-3">
               <h3 style="color: black;"><?php echo $row['phone']; ?></h3>
            </div>
            <div class="row ml-3">
               <h3 style="color: black;"><?php echo $row['email']; ?></h3>
            </div>
            <div class="dropdown-divider"></div><br>
            <div class="row">
              <button type="submit" name="submit" class="btn col-xl-3 btn-info" onclick="window.location.href='edit_profile.php'" style="border-radius:20px;">Edit Profile</button>
            </div><br>
            <div class="row">
              <button type="button" name="submit" class="btn col-xl-3 btn-info" data-toggle="modal" data-target="#exampleModal" style="border-radius:20px;">Change Password</button>
            </div><br>
            <div class="row">
              <button type="button" name="submit" class="btn col-xl-3 btn-info" data-toggle="modal" data-target="#exampleModalemail" style="border-radius:20px;">Change Email</button>
            </div><br>
            <div class="row">
              <button type="button" name="submit" class="btn col-xl-3 btn-danger" onclick="window.location.href='delete_user.php'" style="border-radius:20px;">Delete Account</button>
            </div>
        </div>
    </div>
     <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Password</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <form action="" method="POST"> 
            <div class="modal-body">

                <div class="form-row">
                    <div class="form-group col-md-12">
                      <input type="password" name="cpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Password"/>
                    </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <input type="password" name="npass" id="userPassword" class="form-control input-sm chat-input" placeholder="New Password"/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <input type="password" name="conpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Confirm Password"/>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="pass_change"  class="btn btn-primary">Save changes</button>
            </div>
             <?php
              if(isset($_POST['pass_change']))
              {


              $currentpass=stripslashes($_REQUEST['cpass']);
              $newpass=stripslashes($_REQUEST['npass']);
              $confpass=stripslashes($_REQUEST['conpass']);
              $g = $_SESSION['email'];

              if(!empty($currentpass)){
                if(!empty($newpass)){
                  if(!empty($confpass)){

                    $loginsql="SELECT * FROM customer WHERE password='".md5($currentpass)."'";
                    $result=mysqli_query($con,$loginsql) or mysqli_errno();
                    $rows=mysqli_fetch_assoc($result);

                    $query5="SELECT password FROM customer WHERE email='".$g."'";
                    $sql5=mysqli_query($con,$query5);
                    $row=mysqli_fetch_assoc($sql5);

                    if(isset($rows['password'])==isset($row['password']))
                    {
                      if($newpass==$confpass){
                        $query3="SELECT * FROM customer WHERE password='$newpass'";
                        $sql3=mysqli_query($con,$query3);

                        if(mysqli_num_rows($sql3)>0)
                        {
                          echo "password already Exsisted";
                        }
                        else
                        {
                            $query2="UPDATE customer SET password='".md5($newpass)."' WHERE email='".$g."'";
                            $sql2=mysqli_query($con,$query2);
                            echo "<script type=\"text/javascript\"> alert(\"Password Update Successfull\"); window.location.href='user_logout.php'; </script>"; 
                        }

                      }else{ echo "<script>alert(\"Password is Not Match\");</script>";} 
                    }else{ echo "<script>alert(\"Current Password is Wrong\");</script>";} 
                  }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";} 
                }else{ echo "<script>alert(\"Enter New Password\");</script>";} 
              }else{ echo "<script>alert(\"Enter Current Password\");</script>";} 

              }
          ?>
          </form>
          </div>
        </div>
      </div>
           <!-- Modal -->
      <div class="modal fade" id="exampleModalemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Emil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <form action="" method="POST"> 
            <div class="modal-body">

                <div class="form-row">
                    <div class="form-group col-md-12">
                      <input type="email" name="cemail" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Email"/>
                    </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <input type="email" name="nemail" id="userPassword" class="form-control input-sm chat-input" placeholder="New Email"/>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="submit"  class="btn btn-primary">Save changes</button>
            </div>
            <?php
    if(isset($_POST['submit']))
    {

    $currentemail=stripslashes($_REQUEST['cemail']);
    $newemail=stripslashes($_REQUEST['nemail']);
    $g = $_SESSION['email'];

    if(!empty($currentemail)){
      if(!empty($newemail)){
        if(filter_var($newemail, FILTER_VALIDATE_EMAIL)){

          $loginsql="SELECT * FROM customer WHERE email='".$currentemail."'";
          $result=mysqli_query($con,$loginsql) or mysqli_errno();
          $rows=mysqli_fetch_assoc($result);

          $query5="SELECT email FROM customer WHERE email='".$g."'";
          $sql5=mysqli_query($con,$query5);
          $row=mysqli_fetch_assoc($sql5);

          if(isset($rows['email'])==isset($row['email']))
          {
              $query3="SELECT * FROM customer WHERE email='$newemail'";
              $sql3=mysqli_query($con,$query3);

              if(mysqli_num_rows($sql3)>0)
              {
                echo "Email already Exsisted";
              }
              else
              {
                  $query2="UPDATE customer SET email='".$newemail."' WHERE email='".$currentemail."'";
                  $sql2=mysqli_query($con,$query2);
                  echo "<script type=\"text/javascript\"> alert(\"Password Update Successfull\"); window.location.href='user_logout.php'; </script>"; 
              }
          }else{ echo "<script>alert(\"Current Email is Wrong\");</script>";} 
      
        }else{ echo "<script>alert(\"Enter Valid Email\");</script>";} 
      }else{ echo "<script>alert(\"Enter New Email\");</script>";} 
    }else{ echo "<script>alert(\"Enter Current Email\");</script>";} 

    }
?>
          </form>
          </div>
        </div>
      </div>
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
