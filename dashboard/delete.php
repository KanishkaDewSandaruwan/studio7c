<?php
require_once 'connection.php';

if(isset($_REQUEST['pack_id']))
{
          $id = $_REQUEST['pack_id'];

          $querygetcode="SELECT  * FROM package where pack_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['pack_id'];

          $pack_name = $result_row['package_name'];



          $q1="INSERT INTO package_backup(package_name,pack_id) values('$pack_name','$a')";
          $res1=mysqli_query($con,$q1);

          if ($res1) {
            $query1="DELETE FROM package WHERE pack_id='$a '";
            mysqli_query($con,$query1);

            header('location:view_package.php');
          }
}
else if(isset($_REQUEST['work_id']))
{
          $id = $_REQUEST['work_id'];

          $querygetcode="SELECT  * FROM work where work_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['work_id'];

          $query1="DELETE FROM work WHERE work_id='$a '";
          mysqli_query($con,$query1);
          header('location:view_work.php');

}
else if(isset($_REQUEST['albem']))
{
          $id = $_REQUEST['albem'];
          $wid = $_REQUEST['a'];

          $querygetcode="SELECT  * FROM work_albem where albem_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['albem_id'];

          $query1="DELETE FROM work_albem WHERE albem_id='$a '";
          mysqli_query($con,$query1);
          header('location:albem.php?work_id='.$wid.'');

}
else if(isset($_REQUEST['m_id']))
{
          $id = $_REQUEST['m_id'];

          $querygetcode="SELECT  * FROM message where m_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['m_id'];

          $query1="DELETE FROM message WHERE m_id='$a '";
          mysqli_query($con,$query1);
          header('location:message.php');

}  else if(isset($_REQUEST['img_id'])){
          $id = $_REQUEST['img_id'];

          $querygetcode="SELECT  * FROM gallery where img_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['img_id'];

          $query1="DELETE FROM gallery WHERE img_id='$a '";
          mysqli_query($con,$query1);
          header('location:galary.php');

}else if(isset($_REQUEST['sid'])){
          $id = $_REQUEST['sid'];

          $querygetcode="SELECT  * FROM service where sid='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['sid'];

          $querygetcode1="SELECT  * FROM package where service='".$a."'";
          $catresult1=mysqli_query($con,$querygetcode1);

          while($row=mysqli_fetch_assoc($catresult1)){

              $pack_name = $row['package_name'];
              $pack_id = $row['pack_id'];

              $q1="INSERT INTO package_backup(package_name,pack_id) values('$pack_name','$pack_id')";
              $res1=mysqli_query($con,$q1);

              if ($res1) {

                $query1="DELETE FROM package WHERE service='$a'";
                mysqli_query($con,$query1);
              }
          }
                  $query3="DELETE FROM gallery WHERE service='$a '";
                  mysqli_query($con,$query3);

                  $query1="DELETE FROM service WHERE sid='$a '";
                  mysqli_query($con,$query1);
                  header('location:service.php');

          
}

else if(isset($_REQUEST['customer_id']))
{
          $id = $_REQUEST['customer_id'];

          $querygetcode="SELECT  * FROM customer where customer_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['customer_id'];
          $g=$result_row['email'];

          $cdate = date("Y/m/d m:H:s");

            $viewquery = " SELECT * FROM customer where email='".$g."'";
              $viewresult = mysqli_query($con,$viewquery);
              if ($row = mysqli_fetch_assoc($viewresult)) {

                $name = $row['first_name'].' '.$row['last_name'];
                $cus_id = $row['customer_id'];
                $phone = $row['phone'];
                $email = $row['email'];


              $q1="INSERT INTO customer_backup(customer_id,name,phone,email,trn_date) values('$cus_id','$name','$phone','$email','$cdate')";
                $res1=mysqli_query($con,$q1);

                if ($res1) {


              $query1="DELETE FROM customer WHERE email='$g '";
                      mysqli_query($con,$query1);

                      header('location:customer.php');
                }
              }
}
else{
  header('location:dashboard.php'); 
}
?>