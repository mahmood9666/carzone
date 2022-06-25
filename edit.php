<?php
session_start();
require_once 'connect.php';
$user_id=$_SESSION['id'];
       
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

    <title>تعديل معلوماتي</title>

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
function myFunction1(val) {
  $("#img").attr("src",val);
  $("#img2").attr("style","width:200px;height:200px; background-size:100% 100%; border-style:none; border-radius:50%;");
}
function m2(){
  
          
          
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
      <div class="container">
         <div class="row">
           <div class="col"> </div>
           <div class="col">
             <center>
              <h2>تعديل معلوماتي</h2>
             </center>
            </div>
            <div class="col"> </div>
          </div>
          <hr style="border: 1px solid #eee;">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 section-t8">
                <form method="POST" enctype="multipart/form-data" style="text-align: right;">
                  <div class="row">
                    <div class="container">
                      <div class="row">
                        <div class="col"> </div>
                        <div class="col"  style="margin-left: 90px;">
                          <center>
                          <div class="upload-wrap">
                            <center>
                              <br><br>
                              <h4>صورتك الشخصية</h4>&nbsp;
                              <img id="img" class="uploadpreview 02" src="img/<?php echo $row['img'];?>" style="width:200px;height:200px; background-size:100% 100%; border-style: none; border-radius:50%;" onerror="this.style.display='none'"/>
                              <img id="img2" class="uploadpreview 01"/>
                              <label class="btn btn-danger">تغيير
                                <input id="01" type="file" name="img1" accept="image/*" autofocus style="display: none;"  onchange="myFunction1(this.value)">
                              </label>&nbsp;&nbsp;
                            </center>
                          </div>&nbsp;&nbsp;
                        </div>&nbsp;&nbsp;
                        <div class="col"> </div>
                      </div>&nbsp;&nbsp;
                    </div>
                    &nbsp;&nbsp;
                    <div class="col-md-5 mb-3" style="margin-right: 50px;">
                      <div class="form-group">
                        <label> الإسم :</label>
                        <input type="text" name="f_name" class="form-control form-control-lg form-control-a" value="<?php echo $row['f_name'];?>" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <label> الكنية :</label>
                        <input type="text" name="l_name" class="form-control  form-control-lg form-control-a"  value="<?php echo $row['l_name'];?>" required>
                      </div>
                    </div>
                    <div class="col-md-11 mb-3"  style="margin-right: 50px;">
                      <div class="form-group">
                      <label> البريد الالكتروني :</label>
                        <input type="email" name="email" class="form-control form-control-lg form-control-a" value="<?php echo $row['email'];?>" required>
                      </div>
                    </div>
                        <div class="col-md-11 mb-3"  style="margin-right: 50px;">
                          <div class="form-group">
                          <label> رقم الهاتف :</label>
                            <input type="tel" name="phone" maxlength="10" class="form-control form-control-lg form-control-a" onchange="m2()" value="<?php echo $row['phone'];?>" placeholder="09xxxxxxxx" pattern="[0-9+-]{10,10}" required>
                          </div>
                        </div>
                    <div class="col-md-11 text-center"  style="margin-right: 50px;">
                      <input type="submit" name="save" class="btn btn-danger" value="حفظ"> &nbsp;&nbsp;
                      <a href="profile-control.php"  class="btn btn-dark" > الغاء</a>
                    </div>
                    </center>
                    <div class="col-md-11 text-center"  style="margin-right: 50px;">
                     
                    <?php

    if(isset($_POST['save']))
    {
     ?>
      
      <?php
      // Given password
     // $password=$_POST['password'];

      // Validate password strength
     //  $lowercase = preg_match('@[a-z]@', $password);
      // $number    = preg_match('@[0-9]@', $password);


      $check_email = $database->prepare("SELECT * from users WHERE email = :email");
      $email =$_POST['email'];
      $check_email->bindParam("email",$email);
      $check_email->execute();

      if($check_email->rowCount()>0 &&  $email!=$row['email'])
      {
       
        ?> <script>
        Swal.fire({
         icon: 'error',
         title: 'عذرا',
         text: 'الإيميل  مسخدم مسبقاً'
       })
         </script> 
         <?php 
         
      }
      else
      {
       /* if( !$lowercase || !$number || strlen($password) < 8) 
        {
          ?> <script>
          Swal.fire({
           icon: 'error',
           title: 'كلمة السر غير كافية!',
           text: 'يجب أن تكون أكثر من 8 محارف و تحتوي على أحرف وأرقام'
         })
           </script> 
           <?php 
        }
        else
        {*/
          $user_id=$_SESSION['id'];
          $f_name=$_POST['f_name'];
          $l_name=$_POST['l_name'];
          $email=$_POST['email'];
          $phone=$_POST['phone'];
          $type=$_FILES['img1']['type'];
          $extensions=array('image/jpg','image/jpe','image/jpeg','image/jfif','image/png','image/bmp','image/dib','image/gif');
          if(in_array($type, $extensions))
          {
          $img=$_FILES["img1"]["name"];
          move_uploaded_file($_FILES["img1"]["tmp_name"],'img/'.$img);
          $update=$database->prepare("UPDATE users set img=:img where id_user='$user_id'");
          $update->bindparam("img",$img);
          $update->execute();
          }
         
        
          $addusre = $database->prepare("UPDATE users SET f_name=:f_name,l_name=:l_name,email=:email,phone=:phone WHERE id_user='$user_id'");
        
          $addusre->bindParam("f_name",$f_name);
          $addusre->bindParam("l_name",$l_name);
         // $addusre->bindParam("password",$password);
          $addusre->bindParam("email",$email);
          $addusre->bindParam("phone",$phone);

         if($addusre->execute())
         {
           ?><script>
           Swal.fire({
            icon: 'success',
            text: 'تم تعديل بياناتك بنجاح',
            confirmButtonText: 'ok'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href=window.location.href;
          }
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
    <script src="assets/js/c.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/css/sweetalert2.min.css"></script>
    
  </body>
</html>