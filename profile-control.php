<?php
session_start();
require_once 'connect.php';
require_once 'time_ago.php';
$user_id=$_SESSION['id'];

       
$s="SELECT * FROM users WHERE `id_user`='$user_id'";
$x=mysqli_query($con,$s)or die($con->error);
$row=mysqli_fetch_array($x);


$serch1="SELECT * FROM cars WHERE `user_id`='$user_id'";
$x1=mysqli_query($con,$serch1)or die($con->error);
$row1=mysqli_fetch_array($x1);

 ?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>معلوماتي</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/stylee.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>
<body>
  
<main id="main" style="text-align:right ;">
    <!-- ======= Contact Single ======= -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 section-t8">
                <form method="post" enctype="multipart/form-data" style="border: 1px solid rgb(0,0,1,0.10);">
                   <div class="row" style="margin: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;
                     <div class="col-8 col-md-3"> 
                        <img  src="img/<?php echo $row['img'] ;?> " style="width:50px; height:50px; border-radius: 50px; margin-right:10px;">
                        <span  style="color: #f33f3f;"><?php echo $row['f_name'].' '.$row['l_name'] ;?></span>
                      </div>
                      <div class="col-3 col-md-2"></div>
                      <div class="col-3 col-md-6">
                        <div class="row">
                        <?php

                                if($row['role']==="admin" || $row['role']==="super-admin")
                                {
                                  echo '<a href="admin/control.php" class="btn btn-info me-md-2" style="margin:5px;">لوحة التحكم</a>&nbsp;&nbsp;&nbsp;';
                                }

                          ?>
                        <a href="edit.php" class="btn btn-dark me-md-2" style="margin:5px;">تعديل معلوماتي</a>&nbsp;
                        <a  href="logout.php" class="btn btn-danger"  style="margin:5px;">تسجيل الخروج</a>
                        </div>
                      </div>
                    </div>
                 </form>
                    <div style="margin-top: 30px;"></div>
                        <div class="container">
                           <div class="row" >
                             <div class="col-md-12">
                                <div class="section-heading">
                                  <h2 style="text-align:right;">المنشورات الخاصة بك</h2>
                                </div>
                              </div>
                              
                              <?php
          $car="SELECT * FROM `cars` where `user_id`='$user_id' ";
          $c=mysqli_query($con,$car);
          while($row3=mysqli_fetch_array($c))
          {
            $timestamp=$row3['time'];
           ?>

          <div class="col-lg-4 col-md-6">
            <div class="container" style="padding:10px; border:1px solid #eee;">
              <div class="row">
               <div class="col-8" style="text-align: right;">
                 <a href="profile.php? id_user=<?php echo $row3['user_id']; ?>" style="color: black; " class="">
                 <img  src="img/<?php echo $row3['u_img']; ?>" style="width:50px; height:50px; border-radius: 50px; ">&nbsp;<span><?php echo $row3['u_name']; ?></span></a>
               </div>
               <div class="col-4" style="text-align:right; margin-top:5px;"> 
                 <center>
                   <a  class="btn btn-default" style=" color:black;"><small><?php echo Facebook_time_ago($timestamp)?></small></a>
                 </center>
              </div>
             </div>
            </div>
            <div class="product-item" style="text-align: right;">
              <a href="car-details.php"><img src="images/<?php echo $row3['img_1']; ?>" style="width:300px; height:220px; object-fit: inherit;"></a>
              <div class="down-content">
                <a href="car-details.php"><h4><?php echo $row3['title']; ?></h4></a>

                <h6><?php echo $row3['price']?> ل.س</h6>

                <p> <?php echo $row3['car_comp']?> &nbsp;/&nbsp; <?php echo $row3['fuel_type']?> &nbsp;/&nbsp; <?php echo $row3['made_year']?> &nbsp;/&nbsp; <?php echo $row3['car_state']?></p>

                <small dir="ltr">
                  <strong title="Author"><i class="fa fa-dashboard"></i> <?php echo $row3['km']?>km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                  <strong title="Author"> <?php echo $row3['car_city']?><i class="fa fa-home"></i></strong>&nbsp;&nbsp;&nbsp;&nbsp;
                  <strong title="Views"><i class="fa fa-cog"></i> <?php echo $row3['gear']?></strong>
                </small>
              </div>
            </div>
          </div>
          <?php 
          }
          ?>
        </div>
      </div>
    </div>
                           </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</main>

<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
</body>
</html>