<link rel="stylesheet" type="text/css" href="css/style2_spc.css">
<!-- include header -->
<?php include 'page_contents/header.php'; ?>
<!--fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- Page Content -->
  <!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">About Us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
  <div class="row about_blog p-5">
    <?php $viewquery = "SELECT * FROM about";
              $viewresult = mysqli_query($con,$viewquery);
              $row5 = mysqli_fetch_assoc($viewresult); 

              $about_image = $row5['image'];
              $image_src1 = "upload/about/".$about_image;
              ?>
      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
        <div class="full text_align_left">
          <h3><?php echo $row5['title']; ?></h3>
          <p><?php echo $row5['description']; ?></p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
        <div class="full text_align_center"> <img class="img-responsive" src="<?php echo $image_src1; ?>" alt="About Image" /> </div>
      </div>
    </div>

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
<?php include 'page_contents/latest.php'; ?>
<!-- end section -->
<?php include 'page_contents/footer.php'; ?>
</body>
</html>
