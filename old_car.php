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
            <li class="nav-item">
              <a class="nav-link" href="index.php">الرئيسية
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item"><a class="nav-link" href="search.php">البحث</a></li>

            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">السيارات</a>

              <div class="dropdown-menu ">
                <a class="dropdown-item" href="new_car.php">سيارات جديدة</a>
                <a class="dropdown-item active" href="old_car.php">سيارات مستعملة</a>
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
    <div class="banner-item-04">
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
            <h2 style="text-align:right;">أخر منشورات السيارات المستعملة</h2>
          </div>
        </div>
        <?php
         
         $repage=6;
         $numrows=$database->prepare("SELECT * FROM cars WHERE car_state='مستعملة'");
         $numrows->execute();
         $numrows=$numrows->rowCount();
         
         
         
         if(!isset($_GET['page'])){
           $page=1;}
           else if(isset($_GET['page'])){
           $page=$_GET['page'];
         }
         $result=$database->prepare("SELECT * FROM cars WHERE car_state='مستعملة'  ORDER BY 'id_car' DESC LIMIT " .$repage. " OFFSET " . ($page-1) * $repage);
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
           <a href="car-details.php? id_car=<?php echo $res['id_car']; ?>"><img src="images/<?php echo $res['img_1']; ?>" style="width:348px; height:250px; object-fit: inherit;"></a>
           <div class="down-content">
             <a href="car-details.php? id_car=<?php echo $res3['id_car']; ?>">
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

         $total= ceil($numrows/$repage);
          ?>
          
           
           <div class="col-md-12" dir="ltr"  >
           <ul class="pagination pagination-lg justify-content-center" >
           <?php
         for($c=1;$c<=$total;++$c)
         {
           
           if($page==$c)
           {
           ?>
             <li class="page-item disabled" style="display:inline;">
              <a class="page-link" href="old_car.php?page=<?php echo $c ?>"><?php echo $c ?></a>
             </li>
           <?php
           }
           else
           {
             ?>
             <li class="page-item" style="display:inline; ">
              <a style="color:#f33f3f;"  class="page-link" href="old_car.php?page=<?php echo $c ?>"><?php echo $c ?></a>
             </li>
            <?php
           }
         }
          ?>
           </ul>
          </div>
           
           <?php
     ?>
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