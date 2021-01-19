<?php 
require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 
 ?>
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"><h1 style="font-family: 'Times New Roman', Times, serif;">Studio 7C</h1></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" target="_blank" href="../index.php">
                  <i class="material-icons">dashboard</i> View Site
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <?php $massage_counter = 0;
            $viewquery = " SELECT * FROM message";
            $viewresult = mysqli_query($con,$viewquery);

            while($row1 = mysqli_fetch_assoc($viewresult)) { 
              if ($row1['msg_read'] != 'Reded') {
                $massage_counter++; 
              }
              
            } ?>

                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification"><?php echo $massage_counter; ?></span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
            <?php
            if ($massage_counter > 0) { ?> 
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

            <?php $viewquery = " SELECT * FROM message";
            $viewresult = mysqli_query($con,$viewquery);

            while($row1 = mysqli_fetch_assoc($viewresult)) { 
              if ($row1['msg_read'] != 'Reded') { ?>
                  <a class="dropdown-item" href="message.php"><?php echo $row1['message']; ?></a>
                <?php } } ?>
                </div>

              <?php } ?>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" href="">Change Password</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        </nav>
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
                  $g = $_SESSION['username'];

                  if(!empty($currentpass)){
                    if(!empty($newpass)){
                      if(!empty($confpass)){

                        $loginsql="SELECT * FROM employee WHERE password='".md5($currentpass)."'";
                        $result=mysqli_query($con,$loginsql) or mysqli_errno();
                        $rows=mysqli_fetch_assoc($result);

                        $query5="SELECT password FROM employee WHERE username='".$g."'";
                        $sql5=mysqli_query($con,$query5);
                        $row=mysqli_fetch_assoc($sql5);

                          if(isset($rows['password'])==isset($row['password']))
                          {
                            if($newpass==$confpass){
                              $query3="SELECT * FROM employee WHERE password='$newpass'";
                              $sql3=mysqli_query($con,$query3);

                              if(mysqli_num_rows($sql3)>0)
                              {
                                echo "<script>alert(\"Password is Alrady Exists\");</script>";
                              }
                              else
                              {
                                  $query2="UPDATE employee SET password='".md5($newpass)."' WHERE username='".$g."'";
                                  $sql2=mysqli_query($con,$query2);
                                  echo "<script type=\"text/javascript\"> alert(\"Password Update Successfull\"); window.location.href='logout.php'; </script>";
                              }

                            }else{echo "<script>alert(\"Your Password is Not Match\");</script>";}
                          }else{echo "<script>alert(\"Current Password is Wrong\");</script>";}
                      }else{echo "<script>alert(\"Enter Confirm Password\");</script>";}
                    }else{echo "<script>alert(\"Enter New Password\");</script>";}
                  }else{echo "<script>alert(\"Enter Current Password\");</script>";}
                }
              ?>
          </form>
          </div>
        </div>
      </div>
      