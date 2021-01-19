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
              <h1 class="page-title">My Bookings</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>
<!-- ...................Content Here...................... -->
<div class="row mt-5">
            <div class="col-md-12 mt-5" style="font-family: 'Times New Roman', Times, serif;">
              <h1 class="p-3" style="font-family: 'Times New Roman', Times, serif; color: green">My Bookings</h1>
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle" style="text-align: center;">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Package</th>
                                            <th class="border-top-0 text-white">Booking Date</th>
                                            <th class="border-top-0 text-white">Booking Time</th>
                                            <th class="border-top-0 text-white">Location</th>
                                            <th class="border-top-0 text-white">Description</th>
                                            <th class="border-top-0 text-white">Price</th>
                                            <th class="border-top-0 text-white">Booked Date</th>
                                            <th class="border-top-0 text-white">Progress</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                      $count=1;
                                      $id = $_SESSION['customer_id'];
                                        $viewquery = " SELECT * FROM booking where customer_id = ".$id." order by trndate desc";
                                        $viewresult = mysqli_query($con,$viewquery);
                                    
                                         ?>
                                        <tbody>
                                          <?php while($row = mysqli_fetch_assoc($viewresult)) { 

                                                $viewquery1 = " SELECT * FROM package where pack_id='".$row['pack_id']."'";
                                                $viewresult1 = mysqli_query($con,$viewquery1);
                                                $row1 = mysqli_fetch_assoc($viewresult1);

                                                $viewquery2 = " SELECT * FROM customer where customer_id='".$row['customer_id']."'";
                                                $viewresult2 = mysqli_query($con,$viewquery2);
                                                $row2 = mysqli_fetch_assoc($viewresult2);

                                                $viewquery4 = " SELECT * FROM customer_backup where customer_id='".$row['customer_id']."'";
                                                $viewresult4 = mysqli_query($con,$viewquery4);
                                                $row6 = mysqli_fetch_assoc($viewresult4);
                                                ?>
                                                <tr>
                                                	<td>
                                                      <?php 
                                                      if (isset($row1['package_name'])) {
                                                          echo $row1['package_name']; 
                                                        }else{
                                                          $viewquery2 = " SELECT * FROM package_backup where pack_id='".$row['pack_id']."'";
                                                          $viewresult2 = mysqli_query($con,$viewquery2);
                                                          $row5 = mysqli_fetch_assoc($viewresult2);
                                                          echo $row5['package_name']; ?>
                                                      <p style="color: red;">This Package was Deleted.</p>
                                                    <?php } ?>
                                                      </td>
                                                    <td><?php echo $row['booking_date']; ?></td>
                                                    <td><?php echo $row['booking_time']; ?></td>
                                                    <td><?php echo $row['location']; ?></td>
                                                    <td><?php echo $row['description']; ?></td>
                                                    <td><?php echo $row['price']; ?></td>
                                                    <td><?php echo $row['trndate']; ?></td>
                                                    <td><?php echo $row['complete']; ?></td>
                                                </tr>
                                            <?php   $count++;   }?>
                                    </tbody>
                                </table>
                            </div>
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
