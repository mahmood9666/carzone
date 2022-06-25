<?php
require_once 'connect.php';
$user_id=$_GET['id_user'];
       
$s="SELECT * FROM users WHERE `id_user`='$user_id'";
$x=mysqli_query($con,$s)or die($con->error);
$row=mysqli_fetch_array($x);
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

    <title>Car Zone</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/stylee.css" type="text/css"/>
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

    <main id="main" >
    <!-- ======= Contact Single ======= -->
    <section class="contact">
      <div class="container">
                      <div class="row">
                        <div class="col"> </div>
                        <div class="col">
                          <center>
                            <h2> معلومات العميل</h2>
                          </center>
                        </div>
                        <div class="col"> </div>
                      </div>
                      <hr style="border: 1px solid #eee;">
                    </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 section-t8">
                <form method="post"  style="text-align: right;">
                  <div class="row">
                    <div class="container">
                      <div class="row">
                        <div class="col"> </div>
                        <div class="col" style="margin-left: 50px;">
                          <center>
                          <div class="upload-wrap">
                            <center>
                              <img src="img/<?php echo $row['img'];?>" id="img1" class="uploadpreview 01" style= "width:300px;height:300px; background-size:100% 100%;   border-radius: 50%;">
                              </label>&nbsp;&nbsp;
                            </center>
                          </div>&nbsp;&nbsp;
                        </div>&nbsp;&nbsp;
                        <div class="col"> </div>
                      </div>&nbsp;&nbsp;
                    </div>
                    &nbsp;&nbsp;
                    <div class="col-md-12 mb-3" style="margin-right: 50px;">
                      <div class="form-group">
                        <label> الإسم الكامل : <label style="color:#f33f3f;"> <?php echo $row['f_name'].' '.$row['l_name'];?></label></label>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3"  style="margin-right: 50px;">
                          <div class="form-group">
                          <label> رقم الهاتف : <a style="color:#f33f3f;" href="tel:<?php echo $row['phone'];?>"> <?php echo $row['phone'];?></a></label>
                          </div>
                        </div>
                    <div class="col-md-12 mb-3"  style="margin-right: 50px; ">
                      <div class="form-group">
                      <label> البريد الالكتروني : <a style="color:#f33f3f;" href="mailto:<?php echo $row['email'];?>"> <?php echo $row['email'];?></a></label>
                      </div>
                    </div>
                        
                        </div>
                        <div class="col-md-12 mb-3"  style="margin-right: 50px;">
                        <center>
                          <a href="index.php" class="btn btn-danger" style="margin-left: 50px;">الصفحة الرئيسية</a>
                        </center>
                        </div>
                    </div>
                  </div>
                </form>
          </div>
        </div>
      </div>
    </section>
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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/c.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/css/sweetalert2.min.css"></script>
    
  </body>
</html>