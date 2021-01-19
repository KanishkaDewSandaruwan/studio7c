<link rel="stylesheet" type="text/css" href="css/style1_spc.css">
<link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
<!-- include header -->
<?php include 'page_contents/header.php'; ?>
<!-- include Slide show -->
<?php include 'page_contents/slide_show.php'; ?>
<!-- section -->

    <?php 
    $work_id = $_REQUEST['work_id'];	
    $service_query = "SELECT * FROM work where work_id='".$work_id."'";
  	$service_query_result = mysqli_query($con,$service_query);
    if($row = mysqli_fetch_assoc($service_query_result)){ ?>
<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2><?php echo $row['title']; ?></h2>
          </div>
        </div>
      </div>
    </div>
	    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_bottom_30_all">
          <div class="product_list">
            <div class="product_detail_btm">
              <div class="left">
                <h3 style="color: red;"><i class="far fa-clock"></i> <?php echo $row['worked_date']; ?></h3>
              </div><br>
              <div class="left p-5">
                <p><?php echo $row['description']; ?></p>
              </div>
              </div>
          </div>
        </div>
      </div>
  </div>
</div>
<?php 
$work_id = $_REQUEST['work_id']; 
$galary="SELECT * FROM work_albem where work_id = '".$work_id."'";
$query1 = mysqli_query($con,$galary); 
$row5 = mysqli_fetch_assoc($query1);
if(isset($row5['image'])){?>
<!-- Start Gallery --> 
  <div class="gallery-box">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading-title text-center">
            <h2 style="text-transform: uppercase;">SAMPLES</h2><br>
          </div>
        </div>
      </div>
      <div class="tz-gallery">
        <div class="row">
          

            <?php 
            $work_id = $_REQUEST['work_id']; 
            $galary="SELECT * FROM work_albem where work_id = '".$work_id."'";
            $query1 = mysqli_query($con,$galary); 

            while ($row3 = mysqli_fetch_assoc($query1)) { 
            $galaryimage = $row3['image'];
            $galaryimage_src = "upload/albem/".$galaryimage; 

            $ext = pathinfo($galaryimage,PATHINFO_EXTENSION);
            $extensions_arr = array("jpg","jpeg","png","gif"); ?>

          <div class="col-sm-12 col-md-4 col-lg-4">
            <?php if (in_array($ext,$extensions_arr)) { ?> 
            <a class="lightbox" href="<?php echo $galaryimage_src; ?>">
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
<?php } ?>
  <!-- End Gallery -->
      
<!-- end section -->
    <?php } ?>
<?php include 'page_contents/latest.php'; ?>
<!-- end section -->
<?php include 'page_contents/footer.php'; ?>
</body>
</html>
