<!-- Site css -->
<link rel="stylesheet" type="text/css" href="css/style1_spc.css">
<!-- include header -->
<?php include 'page_contents/header.php'; ?>
<!-- include Slide show -->
<?php include 'page_contents/slide_show.php'; ?>
<!-- section -->

<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
          	<?php $service_id = $_REQUEST['service_id'];	
			    $service_query_name = "SELECT * FROM service where sid='".$service_id."'";
			  	$service_query_name_result = mysqli_query($con,$service_query_name); 
			  	$row3 = mysqli_fetch_assoc($service_query_name_result);?>

            <h2><?php echo $row3['service_name']; ?> Packages</h2>
            <p class="large">We have <?php echo $row3['service_name']; ?> package with best services to make you a happy customer.</p>
          </div>
        </div>
      </div>
    </div>
    <?php 
    $service_id = $_REQUEST['service_id'];	
    $service_query = "SELECT * FROM service where sid='".$service_id."'";
  	$service_query_result = mysqli_query($con,$service_query);

  while($row = mysqli_fetch_assoc($service_query_result)){ 
    $count = 1;
    $product_query = "SELECT * FROM package where service='".$row['sid']."'";
    $product_query_result = mysqli_query($con,$product_query); 

    if (mysqli_num_rows($product_query_result)>0) { 
    while($row1 = mysqli_fetch_assoc($product_query_result)){
    if ($row1['availability'] == 'Yes') { ?>
	    <div class="row">
	      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_bottom_30_all">
	        <div class="product_list">
	          <div class="product_detail_btm">
	            <div class="left">
	              <h1 class="text-danger" style="font-family: 'Times New Roman', Times, serif;margin-right: 100px"><a href="package.php?pid=<?php echo $row1['pack_id']; ?>"><?php echo $row1['package_name']; ?></a></h1> 
	            </div><br>
	            <div class="left">
	              <h3 style="color: red">Rs. <?php echo $row1['price']; ?></h3>
	            </div>
	            <div class="row">
                  <button type="submit" onclick="window.location.href='booking.php?bid=<?php echo $row1['pack_id']; ?>'" name="button" class="btn col-xl-3 btn-success" style="border-radius:20px; float:left;">Book this package</button>
              </div>
	            </div>
	        </div>
	      </div>
	    </div>
    <?php } } } } ?>
  </div>
</div>
<!-- end section -->
<?php include 'page_contents/latest.php'; ?>
<!-- end section -->
<?php include 'page_contents/footer.php'; ?>
</body>
</html>
