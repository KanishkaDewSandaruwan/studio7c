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
              <h1 class="page-title">Privacy Policy</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<?php 
$viewquery = " SELECT * FROM special_details";
$viewresult = mysqli_query($con,$viewquery); 
$row = mysqli_fetch_assoc($viewresult);
$image = $row['header_image'];
$image_src = "upload/header/".$image;?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        <div class="row pl-5">
          <div class="col-md-12">
            <div class="full">
              <p><?php echo $row['privacy']; ?></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
<!-- end section -->
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
