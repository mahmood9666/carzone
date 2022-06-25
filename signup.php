<?php
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
    <center> <h2 class="title-d" style="margin-bottom: 30px; padding-bottom: 30px;"> تسجيل حساب جديد</h2></center>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 section-t8">
                <form method="post" style="text-align: right;">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <label> الإسم :</label>
                        <input type="text" name="f_name" class="form-control form-control-lg form-control-a" placeholder=" " required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <label> الكنية :</label>
                        <input type="text" name="l_name" class="form-control form-control-lg form-control-a" placeholder=" " required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                      <label> البريد الإلكتروني :</label>
                        <input type="email" name="email" class="form-control form-control-lg form-control-a" placeholder="" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                      <label> كلمة السر :</label>
                        <input type="password" id="myInput" name="password" class="form-control form-control-lg form-control-a" placeholder=" " required>
                        <input type="checkbox" onclick="myFunction()" style="margin:10px ;">إظهار كلمة السر
                      </div>
                    </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                          <label> رقم الهاتف :</label>
                            <input type="tel" name="phone" maxlength="10" class="form-control form-control-lg form-control-a" placeholder="09xxxxxxxx" pattern="[0-9+-]{10,10}" required>
                          </div>
                        </div>
                    <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="flexCheckDefault" >&nbsp;&nbsp;&nbsp; أوافق على <a href="">الشروط و الأحكام</a></label>
                    </div>&nbsp;
                  </div>
                    <div class="col-md-12 text-center">
                      <input type="submit" name="send" class="btn btn-danger" value="انشاء الحساب">
                      <a class="btn btn-danger" href="index.php" style=" margin-right: 30px; width:150px">الصفحة الرئيسية</a>   
                    </div>&nbsp;
                    <div class="col-md-12">
                    <a href="login.php">- لدي حساب مسجل بالفعل </a>
                    </div>
                    <div class="col-md-12 text-center">
                     
                    <?php

    if(isset($_POST['send']))
    {
      // Given password
      $password=$_POST['password'];

      // Validate password strength
       $lowercase = preg_match('@[a-z]@', $password);
       $number    = preg_match('@[0-9]@', $password);

      $check_email = $database->prepare("SELECT * from users WHERE email = :email");
      $email =$_POST['email'];
      $check_email->bindParam("email",$email);
      $check_email->execute();

      if($check_email->rowCount()>0)
      {
       
        ?> <script>
        Swal.fire({
         icon: 'error',
         title: 'عذرا',
         text: 'الإيميل مسخدم مسبقاً'
       })
         </script> 
         <?php 
         
      }
      else
      {
        if(!$lowercase || !$number || strlen($password) < 8) 
        {
          ?> <script>
          Swal.fire({
           icon: 'error',
           title: 'كلمة السر غير كافية!',
           text: 'يجب أن تكون أكُر من 8 محارف و تحتوي على أحرف وأرقام'
         })
           </script> 
           <?php 
        }
        else
        {
          $f_name=$_POST['f_name'];
          $l_name=$_POST['l_name'];
          $password=$_POST['password'];
          $email=$_POST['email'];
          $phone=$_POST['phone'];
          $img='user.png';
          

          $addusre = $database->prepare("INSERT INTO users (f_name,l_name,password,email,phone,role,img) values (:f_name,:l_name,:password,:email,:phone,'user',:img)");
        
          $addusre->bindParam("f_name",$f_name);
          $addusre->bindParam("l_name",$l_name);
          $addusre->bindParam("password",$password);
          $addusre->bindParam("email",$email);
          $addusre->bindParam("phone",$phone);
          $addusre->bindParam("img",$img);

         if($addusre->execute())
         {
           ?><script>
          Swal.fire({
            icon: 'success',
            text: 'تم التسجيل بنجاح'
          })
          </script>
           <?php
         }
         else
         {
            ?> <script>
            Swal.fire({
             icon: 'error',
             title: 'عذرا',
             text: '!حدث شيء ما خطأ'
           })
             </script>
             <?php
         }
        }
      }

    }
    ?>
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