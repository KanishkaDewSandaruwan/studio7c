<!-- section -->
<div class="section padding_layout_1">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Latest Work from Our Studio</h2>
          </div>
        </div>
      </div>
    </div>
      <?php 
      $count=1;
        $viewquery = " SELECT * FROM work order by worked_date desc";
        $viewresult = mysqli_query($con,$viewquery);
    
         ?>
    <div class="row">
          <?php while($row = mysqli_fetch_assoc($viewresult)) { 

            $image = $row['head_image'];
            $image_src = "upload/details/".$image;
            if ($count <= 3) { ?>
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
      <?php }  $count++;  }?>
    </div>
  </div>
</div>
<!-- end section -->