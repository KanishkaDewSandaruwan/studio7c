<link rel="stylesheet" type="text/css" href="css/style1_spc.css">
<!-- include header -->
<?php include 'page_contents/header.php'; ?>
<!--fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- Page Content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <form class="col-md-10 ml-5" action="" method="POST" enctype="multipart/form-data">

                                    <?php if (!isset($_REQUEST['bid'])) { ?>
                                      <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label class="text-dark" for="inputState"><b>Service</b></label>
                                        <select id="inputState" name="package" class="form-control">
                                        <option selected>... Select Service ...</option>
                                        <?php 
                                          $q3 = "SELECT * FROM package";
                                            $res3 = mysqli_query($con,$q3);
                                            $c=1;
                                            while($row=mysqli_fetch_assoc($res3)){
                                              echo "<option>".$row['package_name']."</option>";
                                              $c++;
                                            }
                                         ?>
                                        </select>
                                      </div>
                                      </div>
                                    <?php }else{ 
                                      $bid = $_REQUEST['bid'];
                                          $q3 = "SELECT * FROM package where pack_id = $bid";
                                            $res3 = mysqli_query($con,$q3);
                                            $row=mysqli_fetch_assoc($res3);
                                         ?>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="pname" class="text-dark"><b>Package Name</b></label><br>
                                            <input type="text"  readonly="readonly" class="form-control" value="<?php echo $row['package_name']; ?>" name="package" placeholder="Package Name">
                                          </div>
                                      </div>
                                    <?php } ?>
                                      <div class="dropdown-divider" style="color:red;"></div>

                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                      <label class="text-dark" for="original_price"><b>Booking date</b></label><br>
                                            <input type="date" id="bookingdate" name="bday" class="form-control">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                      <label class="text-dark" for="original_price"><b>Booking Time</b></label><br>
                                            <input type="time" id="bookingtime" name="btime" class="form-control">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label class="text-dark" for="original_price"><b>Location</b></label><br>
                                      <input type="text" class="form-control"  name="location" placeholder="Location">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label class="text-dark" for="original_price"><b>Description</b></label><br>
                                      <input type="text" class="form-control"  name="desc" placeholder="Description">
                                    </div>
                                    </div>

                            <div class="dropdown-divider"></div>
                                <div class="form-row">
                                <div class="form-group col-lg-3">
                                <button type="submit" name="submit" class="btn col-xl-12 btn-danger" style="border-radius:20px;">Booking</button><br><br>
                              </div>
                   </div>
                                    <?php
                                    if(isset($_POST['submit'])){

                                    $package = $_REQUEST['package'];
                                    $bday = $_REQUEST['bday'];
                                    $btime = $_REQUEST['btime'];
                                    $location = $_REQUEST['location'];
                                    $desc = $_REQUEST['desc'];
                                    $cus_id = $_SESSION['customer_id'];

                                    $cdate = date("Y/m/d m:H:s");
                                    $q5 = "SELECT * FROM package WHERE package_name='$package'";
                                    $res4 = mysqli_query($con,$q5);


                                          if ($row3 = mysqli_fetch_assoc($res4)) {
                                            $pid = $row3['pack_id'];
                                            $price = $row3['price'];

                                             if(!empty($bday)){
                                                if(!empty($btime)){
                                                    if(!empty($location)){
                                                          // if(!empty($image)){
                                                            if(!empty($desc)){

                                                                  $q1="INSERT INTO booking(customer_id,pack_id,booking_date,booking_time,location,description,price,trndate,complete) values('$cus_id','$pid','$bday','$btime','$location','$desc','$price','$cdate','Pending')";

                                                                      $res =  mysqli_query($con,$q1);
                                                                    if ($res) {
                                                                      echo "<script type=\"text/javascript\"> alert(\"Time Booking is Succussfully\"); window.location= \"booking.php\";</script>";
                                                                    }else{
                                                                      echo "<script>alert(\"Time Booking is Not Scussess\");</script>";
                                                                    }
                                                                    

                                                              }else{ echo "<script>alert(\"Please Enter Description\");</script>";}
                                                            }else{ echo "<script>alert(\"Please Enter Location\");</script>";}
                                                      }else{ echo "<script>alert(\"Please Select Booking Time\");</script>";}
                                                }else{ echo "<script>alert(\"Please Select Booking Date\");</script>";}
                                              }else{echo "<script>alert(\"Please Select Package Name\");</script>";}
                                        }

                              

                  // <!-- **********************End Add employee Section Pannel ************************ -->
                  ?>
            </form>

</div>

      
<?php include 'page_contents/latest.php'; ?>
<!-- end section -->
<?php include 'page_contents/footer.php'; ?>
</body>
</html>
