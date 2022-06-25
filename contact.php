<?php
session_start();
require_once 'connect.php';

?>
<!DOCTYPE html>
<html lang="en" >

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
          <a class="navbar-brand" href="index.php"><h2>Car <em>Zone</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
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

                <li class="nav-item"><a class="nav-link active" href="contact.php">تواصل معنا</a></li>
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
   <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>إذا حدث معك مشكلة</h4>
              <h2>لا تتردد بالتواصل معنا</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us" dir="rtl" style="text-align: right;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="text-align: right;">عن شركتنا</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4> شركة car zone :</h4>
              <p> شركتنا عبارة عن الوسيط بين البائع و المشتري و ليكون التعامل مباشر بين الطرفين بدون طرف ثالث لتقديم خدمة مقابل توفير الجهد و الوقت و المال  بالبحث عن سيارة تناسب متطلبات و الرغبة المادية </p>
              <label> تابعنا على مواقع التواصل الإجتماعي</label>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message" dir="rtl" style="text-align: right;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2  style="text-align: right;">تواصل معنا عبر البريد الإلكتروني</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="البريد الألكتروني" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="محتوى الرسالة" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="mailto:carzone@gmail.com" id="form-submit" class="filled-button">إرسال</button>
                    </fieldset>
                  </div>
                </div>
              </form>
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
  </body>

</html>
