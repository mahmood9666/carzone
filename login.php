<?php
session_start();
 require_once 'connect.php';
 
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
<script>
  function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
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
    <center> <h2 class="title-d" style="margin-bottom: 30px; padding-bottom: 30px;"> تسجيل الدخول</h2></center>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 section-t8">
                <form method="post" style="text-align: right;">
                  <script>
                  </script>
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                      <label> البريد الإلكتروني :</label>
                        <input type="email" name="email" class="form-control form-control-lg form-control-a" placeholder="" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                      <label> كلمة السر :</label>
                        <input type="password" id="myInput" name="password" class="form-control form-control-lg form-control-a"  required>&nbsp;
                        <input type="checkbox" onclick="myFunction()" style="margin:10px ;">إظهار كلمة السر
                      </div>
                    </div>
                    
                    <div class="col-md-12 text-center">
                      <input type="submit" name="send" class="btn btn-danger" value="تسجيل الدخول">  
                      <?php
                      if(isset($_POST['send'])) 
                      {
                        $pass=$_POST['password'];
                        $email=$_POST['email'];
                        $q1="SELECT * FROM users WHERE `email`='$email' AND `password`='$pass' ";
                        $data=mysqli_query($con,$q1)or die($con->error);
                        $row =mysqli_fetch_array($data);
                        if(isset($row))
                        {
                          
                           $name=$row['f_name'];
                           $name2=$row['l_name'];
                           $_SESSION['id']=$row['id_user'];
                           $_SESSION['user']=$name .' '. $name2;
                            header("location:index.php");
                          
                        }
                    
                        else {
                         ?> <script>
                            Swal.fire({
                             icon: 'error',
                             title: 'عذرا',
                             text: 'الإيميل أو كلمة السر خطأ'
                           })
                             </script> 
                             <?php 
                         } 
                        
                      }
                      
                     ?> 
                    </div>&nbsp;
                    <div class="col-md-12">
                    <a href="signup.php">- إذا كنت لا تملك حساب إضغط هنا للتسجيل </a>
                    </div>
                    <div class="col-md-12 text-center">
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
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/css/sweetalert2.min.css"></script>
    
  </body>
</html>