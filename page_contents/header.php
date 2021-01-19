 <?php
  require_once 'connection.php'; //insert connection to page
  require_once 'user.php'; //Check login 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Studio 7C</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" type="image/png" href="assets/img/logo/logo.jpg">
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="css/colors8.css" />
<!-- custom css -->
<link rel="stylesheet" href="css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="css/animate.css" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css" />
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<?php
$viewquery = "SELECT * FROM studio_details";
$viewresult = mysqli_query($con,$viewquery);
$row1 = mysqli_fetch_assoc($viewresult); ?>
<body id="default_theme" class="it_service" style="font-family: 'Times New Roman', Times, serif;">

<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight"><?php echo $row1['rest_address']; ?></span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:<?php echo $row1['email']; ?>"><?php echo $row1['email']; ?></a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="<?php echo $row1['fb']; ?>" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="<?php echo $row1['tweeter']; ?>" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="<?php echo $row1['linkdin']; ?>" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="<?php echo $row1['instragram']; ?>" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
          <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn" href="booking.php">Booking</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="index.php"><img src="assets/img/logo/logo.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="active" href="index.php">Home</a>
                </li>
                <li> <a href="">Service</a>
                  <ul>
                    <?php $service_query = "SELECT * FROM service";
                      $service_query_result = mysqli_query($con,$service_query);

                      while($row = mysqli_fetch_assoc($service_query_result)){ 
                        $count = 1;
                        $product_query = "SELECT * FROM package where service='".$row['sid']."'";
                        $product_query_result = mysqli_query($con,$product_query); 

                        if (mysqli_num_rows($product_query_result)>0) { ?>
                        <li><a href="more.php?service_id=<?php echo $row['sid']; ?>"><?php echo $row['service_name']; ?></a></li>
                        <?php } } ?>
                  </ul>
                </li>
                <li> <a href="">Gallery</a>
                  <ul>
                    <?php $service_query = "SELECT * FROM service";
                      $service_query_result = mysqli_query($con,$service_query);

                      while($row = mysqli_fetch_assoc($service_query_result)){ 
                        $count = 1;
                        $product_query = "SELECT * FROM service where sid='".$row['sid']."'";
                        $product_query_result = mysqli_query($con,$product_query); 

                        if (mysqli_num_rows($product_query_result)>0) { ?>
                        <li><a href="galary.php?galary_id=<?php echo $row['sid']; ?>"><?php echo $row['service_name']; ?></a></li>
                        <?php } } ?>
                  </ul>
                </li>
                <li><a href="news.php">Our Works</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>

                <li> <a href="">Profile</a>
                  <ul>
                    <li><a href="user_logout.php">Logout</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="mybooking.php">My Booking</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>