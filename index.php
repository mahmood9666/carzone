<?php
session_start();
require_once 'connect.php';
require_once 'time_ago.php';


$s2 = "SELECT * FROM cars";
$x2 = mysqli_query($con, $s2) or die($con->error);
$row1 = mysqli_fetch_array($x2);
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

  <title>Car Zone</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/stylee.css">
  <link rel="stylesheet" href="assets/css/owl.css">
 
</head>

<body>

  <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <h2>Car <em>Zone</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">الرئيسية
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item"><a class="nav-link" href="search.php">البحث</a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">السيارات</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="new_car.php">سيارات جديدة</a>
                <a class="dropdown-item" href="old_car.php">سيارات مستعملة</a>
              </div>
            </li>

            <li class="nav-item"><a class="nav-link" href="contact.php">تواصل معنا</a></li>
            <?php

            if (isset($_SESSION['user'])) {
              $user_id = $_SESSION['id'];
              $con = mysqli_connect('localhost', 'root', '', 'car_zone') or die($con->error);
              $q1 = "SELECT * FROM users where `id_user`='$user_id'";
              $s2 = mysqli_query($con, $q1);
              while ($row = mysqli_fetch_array($s2)) {
                $_SESSION['id'] = $row['id_user'];
            ?>
                <li class="nav-item" style="padding: 3px;">
                  <a href="profile-control.php? id_user=<?php echo $row['id_user']; ?>">
                    <img src="img/<?php echo $row['img']; ?> " style="width:35px; height:35px;  border-radius: 50px;">
                    <p style="color: #f33f3f;"><?php echo $_SESSION['user']; ?></p></a>
                </li>
              <?php
              }
            } else {
              ?>
              <li class="log">
                <a href="login.php" class="btn btn-danger">تسجيل الدخول</a>

              </li>
            <?php
            }
            ?>


          </ul>

        </div>

      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="banner-item-01">
      <div class="text-content">
        <h4>إبحث عن سيارتك الأن</h4>
        <h2>أفضل متجر سيارات في سوريا</h2>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->
  <div class="latest-products" dir="rtl">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 style="text-align:right;">أخر المنشورات</h2>
            <a href="cars.php" class="col-12" style="font-size:medium ;">عرض المزيد<i class="fa fa-angle-right"></i></a>
          </div>
        </div>

        <?php
        $car = "SELECT * FROM `cars` ORDER BY id_car DESC LIMIT 6 ";
        $c = mysqli_query($con, $car);
        while ($row3 = mysqli_fetch_array($c)) {
          $timestamp = $row3['time'];
        ?>

          <div class="col-lg-4 col-md-6">
            <div class="container" style="padding:10px; border:1px solid #eee;">
              <div class="row">
                <div class="col-8" style="text-align: right;">
                  <a href="profile.php? id_user=<?php echo $row3['user_id']; ?>" style="color: black; " class="">
                    <img src="img/<?php echo $row3['u_img']; ?>" style="width:50px; height:50px; border-radius: 50px; ">&nbsp;&nbsp;<span style="color:#f33f3f;"><?php echo $row3['u_name']; ?></span></a>
                </div>
                <div class="col-4" style="text-align:right; margin-top:5px;">
                  <center>
                    <p><?php echo Facebook_time_ago($timestamp) ?></p>
                  </center>
                </div>
              </div>
            </div>
            <div class="product-item" style="text-align: right;">
              <a href="car-details.php? id_car=<?php echo $row3['id_car']; ?>"><img src="images/<?php echo $row3['img_1']; ?>" style="width:348px; height:250px; object-fit: inherit;"></a>
              <div class="down-content">
                <a href="car-details.php? id_car=<?php echo $row3['id_car']; ?>">
                  <h4><?php echo $row3['title']; ?></h4>
                </a>

                <h6><?php echo $row3['price'] ?> ل.س</h6>

                <p> <?php echo $row3['car_comp'] ?> &nbsp;/&nbsp; <?php echo $row3['fuel_type'] ?> &nbsp;/&nbsp; <?php echo $row3['made_year'] ?> &nbsp;/&nbsp; <?php echo $row3['car_state'] ?></p>

                <small dir="ltr">
                  <strong title="Author"><i class="fa fa-dashboard"></i> <?php echo $row3['km'] ?>km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                  <strong title="Author"> <?php echo $row3['city'] ?><i class="fa fa-home"></i></strong>&nbsp;&nbsp;&nbsp;&nbsp;
                  <strong title="Views"><i class="fa fa-cog"></i> <?php echo $row3['gear'] ?></strong>
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

  <div class="content">
    <center>
      <a href="add.php" class="btn btn-danger" style="padding-top:15px; width:250px; height:50px;">أنشئ إعلانك الأن</a>
    </center>
  </div>

  <div class="happy-clients">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading" dir="rtl">
            <div class="row">
              <h2>تعليقات العملاء</h2>
            </div>
          </div>
        </div>


        <div class="col-md-12">
          <div class="owl-clients owl-carousel text-center">
            <?php

            $s4 = "SELECT * FROM comment";
            $x4 = mysqli_query($con, $s4) or die($con->error);
            while ($row4 = mysqli_fetch_array($x4)) {

            ?>
              <div class="service-item" style="padding:15px; border:1px solid #999999; width:290px; height:350px;">
                <center>
                  <img src="img/<?php echo $row4['u_img']; ?>" style="width:60px; height:60px; border-radius: 50px; ">
                </center>
                <div class="down-content" style="display:block ; height:180px;">
                  <h4 style="color:#f33f3f;"><?php echo $row4['u_name']; ?></h4>
                  <div dir="rtl">
                  <svg class="item" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M4.06394 17.3733C3.62969 17.5961 3.13694 17.2057 3.22469 16.7073L4.15844 11.3861L0.195063 7.61058C-0.175062 7.25733 0.0173132 6.61158 0.513438 6.54183L6.02369 5.75883L8.48069 0.890952C8.70232 0.452202 9.30194 0.452202 9.52357 0.890952L11.9806 5.75883L17.4908 6.54183C17.9869 6.61158 18.1793 7.25733 17.8092 7.61058L13.8458 11.3861L14.7796 16.7073C14.8673 17.2057 14.3746 17.5961 13.9403 17.3733L9.00044 14.8353L4.06281 17.3733H4.06394Z" fill="currentColor"></path>
                  </svg>
                  <svg class="item" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M4.06394 17.3733C3.62969 17.5961 3.13694 17.2057 3.22469 16.7073L4.15844 11.3861L0.195063 7.61058C-0.175062 7.25733 0.0173132 6.61158 0.513438 6.54183L6.02369 5.75883L8.48069 0.890952C8.70232 0.452202 9.30194 0.452202 9.52357 0.890952L11.9806 5.75883L17.4908 6.54183C17.9869 6.61158 18.1793 7.25733 17.8092 7.61058L13.8458 11.3861L14.7796 16.7073C14.8673 17.2057 14.3746 17.5961 13.9403 17.3733L9.00044 14.8353L4.06281 17.3733H4.06394Z" fill="currentColor"></path>
                  </svg>
                  <svg class="item" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M4.06394 17.3733C3.62969 17.5961 3.13694 17.2057 3.22469 16.7073L4.15844 11.3861L0.195063 7.61058C-0.175062 7.25733 0.0173132 6.61158 0.513438 6.54183L6.02369 5.75883L8.48069 0.890952C8.70232 0.452202 9.30194 0.452202 9.52357 0.890952L11.9806 5.75883L17.4908 6.54183C17.9869 6.61158 18.1793 7.25733 17.8092 7.61058L13.8458 11.3861L14.7796 16.7073C14.8673 17.2057 14.3746 17.5961 13.9403 17.3733L9.00044 14.8353L4.06281 17.3733H4.06394Z" fill="currentColor"></path>
                  </svg>
                  <svg class="item" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M4.06394 17.3733C3.62969 17.5961 3.13694 17.2057 3.22469 16.7073L4.15844 11.3861L0.195063 7.61058C-0.175062 7.25733 0.0173132 6.61158 0.513438 6.54183L6.02369 5.75883L8.48069 0.890952C8.70232 0.452202 9.30194 0.452202 9.52357 0.890952L11.9806 5.75883L17.4908 6.54183C17.9869 6.61158 18.1793 7.25733 17.8092 7.61058L13.8458 11.3861L14.7796 16.7073C14.8673 17.2057 14.3746 17.5961 13.9403 17.3733L9.00044 14.8353L4.06281 17.3733H4.06394Z" fill="currentColor"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                   <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                  </svg>
                </div>
                  <p class="" style="width:190px ; height:180px;"><?php echo $row4['comment']; ?></p>
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

    <div class="send-message" dir="rtl">
      <div class="container"style="text-align:right ;">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="text-align:right ;">إجعل رسالتك بناءة</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                <div class="stars">
                </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="محتوى الرسالة" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="submit" name="c_submit" class="btn btn-danger">
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php
    if (isset($_POST['c_submit'])) {
      $user_id = $_SESSION['id'];
      $con = mysqli_connect('localhost', 'root', '', 'car_zone') or die($con->error);
      $q2 = "SELECT * FROM users where `id_user`='$user_id'";
      $a = mysqli_query($con, $q2);
      $w = mysqli_fetch_array($a);

      $u_name = $w['f_name'] . ' ' . $w['l_name'];
      $u_img = $w['img'];
      $comment = $_POST['message'];


      $add_data1 = $database->prepare("INSERT INTO comment (u_id,u_name,u_img,comment)  
     VALUES('$user_id','$u_name','$u_img','$comment')");
      if ($add_data1->execute()) {
    ?>
        <script>
          Swal.fire({
            icon: 'success',
            text: 'شكراً لك , نرجو أن يكون تعليقك ايجابياً '
          })
        </script>
    <?php
      }
    }
    ?>

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
</body>

</html>