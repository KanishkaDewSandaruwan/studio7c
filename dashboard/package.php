 <?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 
?>
<!DOCTYPE html>
<html lang="en">

<head>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

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
          <li class="nav-item active">
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
          <li class="nav-item ">
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
              <form class="col-md-10 ml-5" action="package.php" method="POST" enctype="multipart/form-data">
                  <a style="float: left; margin-right: 10%;" href="package.php"><h2 class="text-success">Create Package  </h2></a>
                  <a href="view_package.php"><h2 class="text-success">View Packages  </h2> </br></a><br>


                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="pname" class="text-dark"><b>Package Name</b></label><br>
                                        <input type="text" class="form-control" name="pname" placeholder="Package Name">
                                      </div>
                                    </div><br><br>

                                      <label class="text-dark" for="desc"><b>Description </b></label>
                                    <textarea id="summernote" name="editordata"></textarea>
                                        <script>
                                          $('#summernote').summernote({
                                            placeholder: 'Details About this Package',
                                            tabsize: 2,
                                            height: 120,
                                            toolbar: [
                                              ['style', ['style']],
                                              ['font', ['bold', 'underline', 'clear']],
                                              ['color', ['color']],
                                              ['para', ['ul', 'ol', 'paragraph']],
                                            ]
                                          });
                                        </script><br><br>

                                      <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label class="text-dark" for="inputState"><b>Service</b></label>
                                        <select id="inputState" name="service" class="form-control">
                                        <option selected>... Select Service ...</option>
                                        <?php 
                                          $q3 = "SELECT * FROM service";
                                            $res3 = mysqli_query($con,$q3);
                                            $c=1;
                                            while($row=mysqli_fetch_assoc($res3)){
                                              echo "<option>".$row['service_name']."</option>";
                                              $c++;
                                            }
                                         ?>
                                        </select>
                                      </div>
                                      </div>

                                      <div class="dropdown-divider" style="color:red;"></div>

                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label class="text-dark" for="original_price"><b>Price</b></label><br>
                                      <input type="text" class="form-control"  name="price" placeholder="Price">
                                    </div>
                                    </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label class="text-dark" for="inputState"><b>Availability</b></label>
                                          <select id="inputState" name="available" class="form-control">
                                            <option selected>... Select Availability ...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                          </select>
                                        </div>
                                        </div>

                            <div class="dropdown-divider"></div>
                                <div class="form-row">
                                <div class="form-group col-lg-3">
                                <button type="submit" name="submit" class="btn col-xl-12 btn-danger" style="border-radius:20px;">Save Package</button><br><br>
                              </div>
                   </div>
                                    <?php
                                    if(isset($_POST['submit'])){

                                    $pname = $_REQUEST['pname'];
                                    $editordata = $_REQUEST['editordata'];
                                    $service = $_REQUEST['service'];
                                    $price = $_REQUEST['price'];
                                    $available = $_REQUEST['available'];

                                    $cdate = date("Y/m/d m:H:s");
                                    $q4 = "SELECT * FROM service WHERE service_name='$service'";
                                    $res4 = mysqli_query($con,$q4);

                                          if(!empty($pname)){
                                             if(!empty($editordata)){
                                                if ($row2 = mysqli_fetch_assoc($res4)) {
                                                  $sid = $row2['sid'];
                                                  if(!empty($price)){
                                                          // if(!empty($image)){
                                                            if($available != '... Select Availability ...'){

                                                            $q4 = "SELECT * FROM service WHERE service_name='$service'";
                                                            $res4 = mysqli_query($con,$q4);
                                                            $row2 = mysqli_fetch_assoc($res4);
                                                            $sid = $row2['sid'];


                                                                    $query3="SELECT * FROM package WHERE  package_name='$pname'";
                                                                    $sql3=mysqli_query($con,$query3);

                                                                    if(mysqli_num_rows($sql3)>0)
                                                                    {
                                                                      echo '<script>alert("This Package is Alrady Here.");</script>';
                                                                    }else{

                                                                        $q1="INSERT INTO package(package_name,package_details,service,price,availability,trndate) values('$pname','$editordata','$sid','$price','$available','$cdate')";

                                                                            $res =  mysqli_query($con,$q1);
                                                                          if ($res) {
                                                                            echo "<script type=\"text/javascript\"> alert(\"Package Created Succussfully\"); window.location= \"package.php\";</script>";
                                                                          }else{
                                                                            echo "<script>alert(\"Package Creating is Not Scussess\");</script>";
                                                                          }
                                                                    }

                                                              }else{ echo "<script>alert(\"Please Set Availability\");</script>";}
                                                            // }else{ echo "<script>alert(\"Please Upload Image\");</script>";}
                                                      }else{ echo "<script>alert(\"Please Enter Package Price\");</script>";}
                                                    }else{ echo "<script>alert(\"Please Select Service\");</script>";}
                                                }else{ echo "<script>alert(\"Please Enter Description\");</script>";}
                                              }else{echo "<script>alert(\"Please Enter Package Name\");</script>";}
                                        }

                              

                  // <!-- **********************End Add employee Section Pannel ************************ -->
                  ?>
            </form>


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