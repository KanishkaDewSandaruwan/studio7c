<?php
$viewquery = "SELECT * FROM studio_details";
$viewresult = mysqli_query($con,$viewquery);
$row1 = mysqli_fetch_assoc($viewresult); ?>
<!-- section -->
<div class="section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="images/it_service/phone_icon.png" alt="#" /> </div>
            <div class="inner_cont">
              <h2>REQUEST A TIME</h2>
              <p>Get answers and advice from people you want it from.</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="contact.php">Contact us</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- footer -->
<footer class="footer_style_2 mt-5" style="background-color: white;">
  <div class="container-fuild">
    <div class="row">
      <div class="map_section">

        <div class="mapouter" style="float: left;">
          <div class="gmap_canvas">
            <iframe width="521" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=5.952075039437514,%2080.58299506857081&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org">123movies vikings</a>

            <style>
            .mapouter{
              position:relative;
              text-align:right;
              height:500px;
              width:521px;
            }
            .gmap_canvas {
              overflow:hidden;background:none!important;
              height:500px;width:521px;
            }
          </style>
          <a href="https://maps-google.github.io/embed-google-map/">embed google map</a>
        </div>
      </div>
    </div>

      <div class="footer_blog">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2 style="color: green;">Social Media</h2>
            </div>
            <ul style="list-style: none; margin: 0;" class="social_icons">
              <li><a class="fa fa-facebook" href="<?php echo $row1['fb']; ?>" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="<?php echo $row1['tweeter']; ?>" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="<?php echo $row1['linkdin']; ?>" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="<?php echo $row1['instragram']; ?>" title="Instagram" target="_blank"></a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2 style="color: green;">Additional links</h2>
            </div>
            <ul style="list-style: none; margin: 0;" class="footer-menu">
              <li><a href="about.php"><i class="fa fa-angle-right"></i> About us</a></li>
              <li><a href="terms_condition.php"><i class="fa fa-angle-right"></i> Terms and conditions</a></li>
              <li><a href="privacy_policy.php"><i class="fa fa-angle-right"></i> Privacy policy</a></li>
              <li><a href="news.php"><i class="fa fa-angle-right"></i> Our works</a></li>
              <li><a href="contact.php"><i class="fa fa-angle-right"></i> Contact us</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2 style="color: green;">Services</h2>
            </div>
            <ul style="list-style: none; margin: 0;" class="footer-menu">
              <?php $service_query = "SELECT * FROM service";
              $service_query_result = mysqli_query($con,$service_query);

              while($row = mysqli_fetch_assoc($service_query_result)){ 
                $count = 1;
                $product_query = "SELECT * FROM package where service='".$row['sid']."'";
                $product_query_result = mysqli_query($con,$product_query); 

                if (mysqli_num_rows($product_query_result)>0) { ?>
              <li><a href="more.php?service_id=<?php echo $row['sid']; ?>"><i class="fa fa-angle-right"></i> <?php echo $row['service_name']; ?></a></li>
              <?php } } ?>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2 style="color: green">Contact us</h2>
            </div>
            <p><?php echo $row1['rest_address']; ?><br>
              <span style="font-size:18px;"><a href="tel:+94<?php echo $row1['phone']; ?>">+94<?php echo $row1['phone']; ?></a></span></p>
          </div>
        </div>
      </div>
      <div class="cprt" style="text-align: right;">
        <p>Studio7c © Copyrights <script>
              document.write(new Date().getFullYear())
            </script>. All rights reserved. <br> Designed By : W.A.I. SANDARUWANI / SEU/IS/16/MIT/053  </p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
<!-- js section -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- revolution js files -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->