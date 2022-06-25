<?php
session_start();
require_once 'connect.php';
require_once 'time_ago.php';

$id_car = $_GET['id_car'];

$s = "SELECT * FROM cars WHERE `id_car`='$id_car'";
$x = mysqli_query($con, $s) or die($con->error);
$row = mysqli_fetch_array($x);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>مواصفات السيارة</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/stylee.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/owl.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body style="font-family: font;
    src: url(fonts/sky-bold.ttf)">

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Page Content-->
  <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>نتمنى أن تنال إعجابك</h4>
            <h2>وتكون السيارة التي تبحث عنها</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <center>
    <h3 class="title-d" style="margin-bottom: 30px; margin-top:15px; padding-bottom: 30px;"> مواصفات السيارة </h3>
  </center>
  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div>
            <img style="width:600px; heghit:600px " src="images/<?php echo $row['img_1'] ?>" alt="" class="img-fluid wc-image">
          </div>
          <br>
          <div class="row">
            <div class="col-sm-4 col-6">
              <div>
                <img src="images/<?php echo $row['img_2'] ?>" alt="" class="img-fluid">
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-6">
              <div>
                <img src="images/<?php echo $row['img_3'] ?>" alt="" class="img-fluid">
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-6">
              <div>
                <img src="images/<?php echo $row['img_4'] ?>" alt="" class="img-fluid">
              </div>
              <br>
            </div>

            <div class="col-sm-4 col-6">

            </div>
            <div class="col-sm-4 col-6">

            </div>
            <div class="col-sm-4 col-6">

            </div>
          </div>
        </div>

        <div class="col-md-6" dir="rtl">
          <form action="#" method="post" class="form">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> حالة السيارة :</span>

                  <strong class="pull-left"><?php echo $row['car_state'] ?></strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> سنة الصنع : </span>

                  <strong class="pull-left"><?php echo $row['made_year'] ?></strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> نوع السيارة : </span>

                  <strong class="pull-left"><?php echo $row['car_comp'] ?></strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> المدينة :</span>

                  <strong class="pull-left"><?php echo $row['city'] ?></strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> لوحة السيارة :</span>

                  <strong class="pull-left"><?php echo $row['car_city'] ?></strong>
                </div>
              </li>



              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> عداد كيلومتر :</span>

                  <strong class="pull-left"><?php echo $row['km'] ?> km </strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> نوع الوقود :</span>

                  <strong class="pull-left"><?php echo $row['fuel_type'] ?></strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> عدد السلندرات : </span>

                  <strong class="pull-left"><?php echo $row['clinder'] ?></strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> ناقل الحركة :</span>

                  <strong class="pull-left"><?php echo $row['gear'] ?></strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> نوع الدفع :</span>

                  <strong class="pull-left"><?php echo $row['push_type'] ?></strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> عدد المقاعد :</span>

                  <strong class="pull-left"><?php echo $row['seats'] ?></strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> الأبواب :</span>

                  <strong class="pull-left"><?php echo $row['doors'] ?></strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> اللون : </span>

                  <strong class="pull-left"><?php echo $row['color'] ?></strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> السعر : </span>

                  <strong class="pull-left"><?php echo $row['price'] ?></strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-right"> رقم الهاتف للتواصل : </span>

                  <strong class="pull-left"><?php echo $row['phone'] ?></strong>
                </div>
              </li>


            </ul>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  if (isset($_SESSION['user'])) {
  ?>
    <div class="col-md-11" style="text-align:right ;">
      <br>
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> إبلاغ عن المنشور</button>
    </div>
  <?php
  }
  ?>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="text-align:right ;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">إختر نوع البلاغ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST">
            <select class="form-select" name="rep_type">
              <option value="مزيف">محتوى مزيف</option>
              <option value="غير لائق">محتوى غير لائق</option>
              <option value="انتحال شخصية">انتحال شخصية</option>
            </select>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input name="c_rep" type="submit" class="btn btn-danger" value="إرسال البلاغ">
          </form>
          <?php

          if (isset($_POST['c_rep'])) {
            $id = $_SESSION['id'];
            $id_car = $_GET['id_car'];
            $c_rep = $_POST['rep_type'];

            $add_data = $database->prepare("INSERT INTO reports (id_user,id_car,rep_type)  
               VALUES('$id','$id_car','$c_rep')");
            if ($add_data->execute()) {
          ?>
              <script>
                Swal.fire({
                  icon: 'success',
                  text: 'شكراً لك , سوف نتابع الأمر بأسرع وقت'
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location = window.location;
                  }
                })
              </script>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <div class="section" dir="rtl">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="section-heading">
            <h2 style="text-align:right;">وصف السيارة :</h2>
          </div>

          <div class="col-md-12 mb-3">
            <textarea type="text" name="des" class="form-control h-75" style="height: 125px;" rows="6"><?php echo $row['car_des'] ?></textarea>
          </div>
        </div>

        <div class="col-md-6">
          <div class="section-heading">
            <h2 style="text-align:right;">إضافات السيارة :</h2>
          </div>

          <div class="col-md-12 mb-3">
            <textarea type="text" name="des" class="form-control h-75" style="height: 125px;" rows="6"><?php echo $row['car_adds'] ?></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 mb-3">
    <center>
      <a href="index.php" class="btn btn-danger">الصفحة الرئيسية</a>
    </center>
  </div>

  <div class="section" dir="rtl">
    <div class="container">
      <div class="row">
        <div class="col-md-11">
          <div class="section-heading">
            <h2 style="text-align:right;">منشورات ذات صلة</h2>
          </div>
        </div>
        <?php
        $car_state=$row['car_state'];
        $city=$row['city'];
        $car_type=$row['car_type'];
        $car_comp=$row['car_comp'];
        $year=$row['made_year'];
        $color=$row['color'];
        $price=$row['price'];
        
        $result=$database->prepare("SELECT * FROM `cars` WHERE  `price` LIKE '$city' &&  `city`='$city' || `car_comp` ='$car_comp' || `color` ='$color' || `made_year` ='$year' LIMIT 6 ");
        $result->execute();
        
        foreach($result AS $res)
        {
          $timestamp=$res['time'];
          ?>
          <div class="col-lg-4 col-md-6">
        <div class="container" style="padding:10px; border:1px solid #eee;">
          <div class="row">
            <div class="col-8" style="text-align: right;">
              <a href="profile.php? id_user=<?php echo $res['user_id']; ?>" style="color: black; " class="">
                <img src="img/<?php echo $res['u_img']; ?>" style="width:50px; height:50px; border-radius: 50px; ">&nbsp;&nbsp;<span style="color:#f33f3f;"><?php echo $res['u_name']; ?></span></a>
            </div>
            <div class="col-4" style="text-align:right; margin-top:5px;">
              <center>
                <a class="btn btn-default" style=" color:black;"><small><?php echo Facebook_time_ago($timestamp) ?></small></a>
              </center>
            </div>
          </div>
        </div>
        <div class="product-item" style="text-align: right;">
          <a href="car-details.php? id_car=<?php echo $res['id_car']; ?>"><img src="images/<?php echo $res['img_1']; ?>" style="width:355px; height:250px; object-fit: inherit;"></a>
          <div class="down-content">
            <a href="car-details.php? id_car=<?php echo $res['id_car']; ?>">
              <h4><?php echo $res['title']; ?></h4>
            </a>

            <h6><?php echo $res['price'] ?> ل.س</h6>

            <p> <?php echo $res['car_comp'] ?> &nbsp;/&nbsp; <?php echo $res['fuel_type'] ?> &nbsp;/&nbsp; <?php echo $res['made_year'] ?> &nbsp;/&nbsp; <?php echo $res['car_state'] ?></p>

            <small dir="ltr">
              <strong title="Author"><i class="fa fa-dashboard"></i> <?php echo $res['km'] ?>km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
              <strong title="Author"> <?php echo $res['city'] ?><i class="fa fa-home"></i></strong>&nbsp;&nbsp;&nbsp;&nbsp;
              <strong title="Views"><i class="fa fa-cog"></i> <?php echo $res['gear'] ?></strong>
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


  <?php
  $id = $row['user_id'];
  $s1 = "SELECT * FROM users WHERE `id_user`='$id'";
  $x1 = mysqli_query($con, $s1) or die($con->error);
  $row1 = mysqli_fetch_array($x1);
  ?>
  <div class="section" dir="rtl">
    <div class="container">
      <div class="row">
        <div class="col-md-11">
          <div class="section-heading">
            <h2 style="text-align:right;">معلومات العميل</h2>
          </div>

          <div class="left-content" style="text-align:right;">
            <p>
              <span>الإسم :</span>

              <br>

              <strong style="color:#f33f3f;"><?php echo $row1['f_name'] . ' ' . $row1['l_name'] ?></strong>
            </p>

            <p>
              <span>رقم المحمول :</span>

              <br>

              <strong>
                <a href="tel:<?php echo $row1['phone'] ?>" style="color:#f33f3f;"><?php echo $row1['phone'] ?></a>
              </strong>
            </p>

            <p>
              <span>الإيميل :</span>

              <br>

              <strong>
                <a href="mailto:<?php echo $row1['email'] ?>" style="color:#f33f3f;"><?php echo $row1['email'] ?></a>
              </strong>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

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


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/c.js"></script>
  <script src="assets/js/sweetalert2.all.min.js"></script>
  <script src="assets/css/sweetalert2.min.css"></script>
</body>

</html>