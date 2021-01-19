<!-- Site css -->
<link rel="stylesheet" href="css/style2.css" />
<link rel="stylesheet" href="css/animatio.css" />
<!-- loader -->
<!-- include header -->
<?php include 'page_contents/header.php'; ?>
<!-- include Slide show -->
<?php include 'page_contents/slide_show.php'; ?>
<!-- section -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/l.png" width="300px" alt="#" /> </div>
<div class="section padding_layout_1">
    <div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Studio 7C Our Services</h2>
            <p class="large">Fastest service!</p>
          </div>
        </div>
      </div>
    </div>
  <div class="row ">
            <?php 
            $galary="SELECT * FROM service";
            $query1 = mysqli_query($con,$galary); 

            while ($row3 = mysqli_fetch_assoc($query1)) { 
            $service_image = $row3['service_image'];
            $service_image_src = "upload/service/".$service_image; 

            $product_query = "SELECT * FROM package where service='".$row3['sid']."'";
            $product_query_result = mysqli_query($con,$product_query); 

            if (mysqli_num_rows($product_query_result)>0) { ?>

          <div class="col-sm-12 col-md-4 col-lg-4 lightbox2">
            <a class="lightbox" href="more.php?service_id=<?php echo $row3['sid']; ?>">
              <h1 id="lightbox_heding"><?php echo $row3['service_name']; ?></h1>
              <img style="width: 100%; height: 300px" class="img-fluid" src="<?php echo $service_image_src; ?>"  alt="Service Images">
            </a>
          </div>
          <?php } }?>
      </div>
</div>
<?php 
$slider_query = "SELECT * FROM details_block";
$slider_query_result = mysqli_query($con,$slider_query);
if(mysqli_num_rows($slider_query_result)>0){

      $row = mysqli_fetch_assoc($slider_query_result);
      $image1 = $row['image1'];
      $image2 = $row['image2'];
      $image3 = $row['image3'];
      $image4 = $row['image4'];

      $image_src1 = "upload/details/".$image1;
      $image_src2 = "upload/details/".$image2;
      $image_src3 = "upload/details/".$image3;
      $image_src4 = "upload/details/".$image4;

 ?>

  <div class="container-fluid">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Why Choose Studio 7C</h2>
            <p class="large">Fastest service with best price!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5 " id="sblock">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 service_block">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img class="service_img" width="500px"  src="<?php echo $image_src1; ?>" alt="#" /> </div>
          </div>
          <h4  id="headr_titles" class="theme_color"><?php echo $row['title1']; ?></h4>
          <p><?php echo $row['description1']; ?></p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 service_block">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img class="service_img" width="500px" src="<?php echo $image_src2; ?>" alt="#" /> </div>
          </div>
          <h4 id="headr_titles"  class="theme_color"><?php echo $row['title2']; ?></h4>
          <p><?php echo $row['description2']; ?></p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 service_block">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img class="service_img" width="500px" src="<?php echo $image_src3; ?>" alt="#" /> </div>
          </div>
          <h4 id="headr_titles"  class="theme_color"><?php echo $row['title3']; ?></h4>
          <p><?php echo $row['description3']; ?></p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 service_block">
        <div class="full text_align_center margin_bottom_30 margin_0">
          <div class="center">
            <div class="icon"> <img class="service_img" width="500px" src="<?php echo $image_src4; ?>" alt="#" /> </div>
          </div>
          <h4 id="headr_titles"  class=""><?php echo $row['title4']; ?></h4>
          <p><?php echo $row['description4']; ?></p>
        </div>
      </div>
    </div>
    </div>
  <?php } ?>

<?php include 'page_contents/latest.php'; ?>
<!-- end section -->
<?php include 'page_contents/footer.php'; ?>
</body>
</html>
