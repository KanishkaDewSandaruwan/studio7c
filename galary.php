<link rel="stylesheet" type="text/css" href="css/style1_spc.css">
<!-- include header -->
<?php include 'page_contents/header.php'; ?>
<!-- include Slide show -->
<?php include 'page_contents/slide_show.php'; ?>
<!-- section -->

<!-- Start Gallery -->
<?php 
$gid = $_REQUEST['galary_id'];   
$galary="SELECT * FROM gallery join service on service.sid = gallery.service where service = '".$gid."'";
$query1 = mysqli_query($con,$galary); 
if ($row3 = mysqli_fetch_assoc($query1)) { ?>
  <div class="gallery-box">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading-title text-center mt-5">
            <h2 style="text-transform: uppercase;font-family: 'Times New Roman', Times, serif;"><?php echo $row3['service_name'] ?> SAMPLES</h2><br>
          </div>
        </div>
      </div>
      <div class="tz-gallery">
        <div class="row">
          

            <?php 
            $galary="SELECT * FROM gallery where service = '".$gid."'";
            $query1 = mysqli_query($con,$galary); 

            while ($row3 = mysqli_fetch_assoc($query1)) { 
            $galaryimage = $row3['image'];
            $galaryimage_src = "upload/galary/".$galaryimage; 

            $ext = pathinfo($galaryimage,PATHINFO_EXTENSION);
            $extensions_arr = array("jpg","jpeg","png","gif"); ?>


          <div class="col-sm-12 col-md-4 col-lg-4">
            <?php if (in_array($ext,$extensions_arr)) { ?> 
            <a class="lightbox" href="<?php echo $galaryimage_src; ?>">
              <img style="width: 100%; height: 300px" class="img-fluid" src="<?php echo $galaryimage_src; ?>"  alt="Gallery Images">
            </a>
            <?php }else{ ?>
            <a class="lightbox" href="<?php echo $galaryimage_src; ?>">
            <video style="width: 100%; height: 300px" controls>
              <source src="<?php echo $galaryimage_src; ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            </a>
          <?php } ?>
          </div>
          <?php } ?>
      </div>
    </div>
  </div>
<?php }else{ ?>
  <h1 class="p-5">No Sample Found</h1>

<?php } ?>
  <!-- End Gallery -->
      
<?php include 'page_contents/latest.php'; ?>
<!-- end section -->
<?php include 'page_contents/footer.php'; ?>
</body>
</html>
