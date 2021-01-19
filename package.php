<link rel="stylesheet" type="text/css" href="css/style1_spc.css">
<!-- include header -->
<?php include 'page_contents/header.php'; ?>
<!-- include Slide show -->
<?php include 'page_contents/slide_show.php'; ?>
<!-- section -->

    <?php 
    $pid = $_REQUEST['pid'];	
    $service_query = "SELECT * FROM package where pack_id='".$pid."'";
  	$service_query_result = mysqli_query($con,$service_query);
    if($row = mysqli_fetch_assoc($service_query_result)){ 

        $service_id = $row['service'];  
        $service_query_name = "SELECT * FROM service where sid='".$service_id."'";
        $service_query_name_result = mysqli_query($con,$service_query_name); 
        $row3 = mysqli_fetch_assoc($service_query_name_result);?>
<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2><?php echo $row3['service_name']; ?> - <?php echo $row['package_name']; ?></h2>
          </div>
        </div>
      </div>
    </div>
	    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_bottom_30_all">
          <div class="product_list">
            <div class="product_detail_btm">
              <div class="left">
                <h3 class="mr-5" style="color: black; float: left;">Package Price is : </h3>
                <h3 style="color: red;">  Rs. <?php echo $row['price']; ?></h3>
              </div><br>
              <div class="left p-5">
                <p><?php echo $row['package_details']; ?></p>
              </div>
              <div class="row">
                  <button type="submit" onclick="window.location.href='booking.php?bid=<?php echo $row['pack_id']; ?>'" name="button" class="btn col-xl-3 btn-success" style="border-radius:20px; float:left;">Book this package</button>
              </div>
              </div>
          </div>
        </div>
      </div>
  </div>
</div>
<!-- Start Gallery -->
<?php 
$pid = $_REQUEST['pid'];  
$service_query = "SELECT * FROM package where pack_id='".$pid."'";
$service_query_result = mysqli_query($con,$service_query);
if($row = mysqli_fetch_assoc($service_query_result)){ 

    $sid = $row['service'];  

$galary="SELECT * FROM gallery join service on service.sid = gallery.service where service = '".$sid."'";
$query1 = mysqli_query($con,$galary); 
if ($row3 = mysqli_fetch_assoc($query1)) { ?>
  <div class="gallery-box">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading-title text-center">
            <h2 style="text-transform: uppercase;"><?php echo $row3['service_name'] ?> SAMPLES</h2><br>
          </div>
        </div>
      </div>
      <div class="tz-gallery">
        <div class="row">
          

            <?php 
            $galary="SELECT * FROM gallery where service = '".$sid."'";
            $query1 = mysqli_query($con,$galary); 

            while ($row3 = mysqli_fetch_assoc($query1)) { 
            $galaryimage = $row3['image'];
            $galaryimage_src = "upload/galary/".$galaryimage; 

            $ext = pathinfo($galaryimage,PATHINFO_EXTENSION);
            $extensions_arr = array("jpg","jpeg","png","gif"); ?>


          <div class="col-sm-12 col-md-4 col-lg-4">
            <?php if (in_array($ext,$extensions_arr)) { ?> 
            <a class="lightbox" href="images/gallery-img-01.jpg">
              <img style="width: 100%; height: 300px" class="img-fluid" src="<?php echo $galaryimage_src; ?>"  alt="Gallery Images">
            </a>
            <?php }else{ ?>
            <video style="width: 100%; height: 300px" controls>
              <source src="<?php echo $galaryimage_src; ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          <?php } ?>
          </div>
          <?php } ?>
      </div>
    </div>
  </div>
<?php } } ?>
  <!-- End Gallery -->
      
<!-- end section -->
    <?php } ?>
<?php include 'page_contents/latest.php'; ?>
<!-- end section -->
<?php include 'page_contents/footer.php'; ?>
</body>
</html>
