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
              <h1 class="page-title">Our Works</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- section -->
<div class="section padding_layout_1">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Work from Our Studio</h2>
          </div>
        </div>
      </div>
    </div>
<?php 
$count=1;
$viewquery = " SELECT * FROM work order by worked_date desc";
$viewresult = mysqli_query($con,$viewquery); ?>
    <div class="row">
          <?php while($row = mysqli_fetch_assoc($viewresult)) { 

            $image = $row['head_image'];
            $image_src = "upload/details/".$image; ?>
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img" style="width: 100%"> <img style="width: 100%; height: 350px" src="<?php echo $image_src; ?>" alt="#"/> </div>
          <div class="post_time">
            <p><i class="fa fa-clock-o mr-1"></i><?php echo $row['worked_date']; ?></p>
          </div>
          <div class="blog_feature_head">
            <a style="text-decoration: none; color: black" href="working.php?work_id=<?php echo $row['work_id']; ?>"><h4><?php echo $row['title']; ?></h4></a>
          </div>
          <div class="blog_feature_cont">
            <p><?php echo $row['highlight']; ?></p>
          </div>
        </div>
      </div>
      <?php   $count++;  }?>
    </div>
  </div>
</div>allery -->
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
