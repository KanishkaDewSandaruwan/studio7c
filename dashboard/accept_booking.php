 <?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo/newlogo-01.png">
  <link rel="icon" type="image/png" href="../assets/img/logo/logo.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Studio 7C</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.1-web/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./customer.php">
              <i class="fas fa-user"></i>
              <p>Customers</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./package.php">
              <i class="fas fa-box-open"></i>
              <p>Packages</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./service.php">
              <i class="fas fa-photo-video"></i>
              <p>Services</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./booking.php">
              <i class="fas fa-calendar-check"></i>
              <p>Booking</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./galary.php">
              <i class="fas fa-images"></i>
              <p>Gallery</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./message.php">
              <i class="fas fa-envelope-open-text"></i>
              <p>Message</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./work.php">
              <i class="fas fa-icons"></i>
              <p>Our Work</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./custom.php">
              <i class="fas fa-tools"></i>
              <p>Customize</p>
            </a>
          </li>
<!--           <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    <?php include 'common/top.php'; ?>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            
            <!-- ...................Content Here...................... -->
            <div class="col-md-12" style="font-family: 'Times New Roman', Times, serif;">
              <h1 style="font-family: 'Times New Roman', Times, serif; color: green">Bookings</h1>
                <a style="float: left; margin-right: 10%;" href="booking.php"><h3 class="text-danger">Pending Booking</h3></a>
                <a style="float: left; margin-right: 10%;" href="accept_booking.php"><h3 class="text-danger">Accepted </h3></a>
                <a style="float: left; margin-right: 10%;" href="completed_booking.php"><h3 class="text-danger">Completed </h3></a>
                <a style="float: left; margin-right: 10%;" href="reject_booking.php"><h3 class="text-danger">Rejected</h3></a>
                          <br><br><br>
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle" style="text-align: center;">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Customer</th>
                                            <th class="border-top-0 text-white">Package</th>
                                            <th class="border-top-0 text-white">Booking Date</th>
                                            <th class="border-top-0 text-white">Booking Time</th>
                                            <th class="border-top-0 text-white">Location</th>
                                            <th class="border-top-0 text-white">Description</th>
                                            <th class="border-top-0 text-white">Price</th>
                                            <th class="border-top-0 text-white">Booked Date</th>
                                            <th class="border-top-0 text-white">Reject</th>
                                            <th class="border-top-0 text-white">Complete</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                      $count=1;
                                        $viewquery = " SELECT * FROM booking";
                                        $viewresult = mysqli_query($con,$viewquery);
                                    
                                         ?>
                                        <tbody>
                                          <?php while($row = mysqli_fetch_assoc($viewresult)) { 
                                            if ($row['complete'] == 'Accept') {
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
                                                    <td><?php if (isset($row2['first_name'])) {
                                                      echo $row2['first_name']." ".$row2['last_name']; ?><br>
                                                      <?php echo $row2['address']; ?><br>
                                                      <?php echo $row2['phone']; 
                                                    }else{
                                                      echo $row6['name']; ?><br>
                                                      <?php echo $row6['email']; ?><br>
                                                      <?php echo $row6['phone']; ?>
                                                      <p style="color: red;">This Customer Account was Deleted.</p>
                                                    <?php } ?>
                                                    </td>
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
                                                    <td style="text-align: center;"><a style="text-decoration: none; color: red; font-size: 30px;" href="booking_change.php?reject_bid=<?php echo $row['bid']; ?>"><i class="fas fa-calendar-times"></i></a></td>
                                                    <td style="text-align: center;"><a style="text-decoration: none; color: red; font-size: 30px;" href="booking_change.php?complete_bid=<?php echo $row['bid']; ?>"><i class="fas fa-calendar-check"></i></a></td>
                                                </tr>
                                            <?php   $count++;  } }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


        </div>
      </div>
    </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            <script>
              document.write(new Date().getFullYear())
            </script>
            &copy;
            Studio7C. All rights reserved.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>