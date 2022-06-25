<?php
 require_once 'connect.php';
 session_start();
 if(isset($_SESSION['user'])) 
 {
  $user_id=$_SESSION['id'];

  $s="SELECT * FROM users WHERE `id_user`='$user_id'";
  $x=mysqli_query($con,$s)or die($con->error);
  $row=mysqli_fetch_array($x);

  $u_name=$row['f_name'].' '.$row['l_name'];
  $u_img=$row['img'];
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

    <title>إنشاء إعلان</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/stylee.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

 <body>

    <!--***** Preloader Start *****-->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!--***** Preloader End ***** -->
    
    <main id="main"  dir="rtl" style="text-align: right;">
    <!-- ======= Contact Single ======= -->
    <section class="contact">
    <center> <h3 class="title-d" style="margin-bottom: 30px; padding-bottom: 30px;"> إعلان جديد</h3></center>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 section-t8">
                <form method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                    <label>حالة السيارة :</label>
                     
                     <select class="form-control" name="car_state">
                          <option value="مستعملة">مستعملة</option>
                          <option value="جديدة">جديدة</option>
                     </select>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label>المدينة :</label>
                     
                     <select class="form-control" name="city">
                          <option value="دمشق">دمشق</option>
                          <option value="ريف دمشق">ريف دمشق</option>
                          <option value="حلب">حلب</option>
                          <option value="إدلب">إدلب</option>
                          <option value="حماة">حماة</option>
                          <option value="حمص">حمص</option>
                          <option value="الاذقية">الاذقية</option>
                          <option value="طرطوس">طرطوس</option>
                          <option value="القنيطرة">القنيطرة</option>
                          <option value="درعا">درعا</option>
                          <option value="السويداء">السويداء</option>
                          <option value="الرقة">الرقة</option>
                          <option value="دير الزور">دير الزور</option>
                          <option value="الحسكة">الحسكة</option>
                     </select>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label>نوع السيارة :</label>
                     
                     <select class="form-control" name="car_type">
                          <option value="سيدان">سيدان</option>
                          <option value="رياضية">رياضية</option>
                          <option value="عائلية">عائلية</option>
                          <option value="عمومي">عمومي</option>
                          <option value="كوبيه">كوبيه</option>
                          <option value="وادن">وادن</option>
                          <option value="بيك أب">بيك أب</option>
                          <option value="غير ذلك">غير ذلك</option>
                     </select>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label>مصنع/موديل :</label>
                   
                    <select class="form-control"  name="car_comp">
                          <option value="BMW">بي إم دبليو BMW</option>
                          <option value="Audi">أودي Audi</option>
                          <option value="KIA">كيا KIA</option>
                          <option value="toyota">تويوتا toyota</option>
                         <option value="mercedes">ميرسيدس mercedes</option> 
                          <option value="nissan">نيسان nissan</option>
                          <option value="lexus">ليكسز lexus</option>
                          <option value="chevrolet">شيفروليه chevrolet</option>
                          <option value="GMC">جي ام سي GMC</option>
                          <option value="hyundai">هيونداي hyundai</option>
                          <option value="ford">فورد ford</option>
                          <option value="land rover">لاندروفر land rover</option>
                          <option value="mitsubishi">ميتسوبيشي mitsubishi</option>
                          <option value="infiniti">انفينيتي infiniti</option>
                          <option value="suzuki">سوزوكي suzuki</option>
                          <option value="chana">شانا chana</option>
                          <option value="cadillac">كاديلاك cadillac</option>
                          <option value="volkswagen">فولكس فاجن volkswagen</option>
                          <option value="mazda">مازدا mazda</option>
                     </select>
                    </div>

                    <div class="col-md-6 mb-3">

                    <label>سنة الصنع :</label>
                    <input type="num" name="year" class="form-control" placeholder="19xx" maxlength="4" required>
                    
                    </div>
                    <div class="col-md-6 mb-3">

                      <label>عداد كيلومتر :</label>
                      <input type="num" name="km" class="form-control" placeholder="000000" maxlength="6" required>
                    </div>

                    <div class="col-md-6 mb-3">

                    <label>لوحة السيارة :</label>
                   
                    <select class="form-control"  name="car_city">
                          <option value="دمشق">دمشق</option>
                          <option value="ريف دمشق">ريف دمشق</option>
                          <option value="حلب">حلب</option>
                          <option value="إدلب">إدلب</option>
                         <option value="حماة">حماة</option> 
                          <option value="حمص">حمص</option>
                          <option value="الاذقية">الاذقية</option>
                          <option value="طرطوس">طرطوس</option>
                          <option value="القنيطرة">القنيطرة</option>
                          <option value="درعا">درعا</option>
                          <option value="السويداء">السويداء</option>
                          <option value="الرقة">الرقة</option>
                          <option value="دير الزور">دير الزور</option>
                          <option value="الحسكة">الحسكة</option>
                     </select>
                    </div>
                    
                    <div class="col-md-6 mb-3">

                    <label>عدد السلندرات :</label>
                     
                     <select class="form-control" name="clinder">
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="8">8</option>
                          <option value="10">10</option>
                          <option value="12">12</option>
                          <option value="16">16</option>
                     </select>
                    </div>

                    <div class="col-md-6 mb-3">
                    <label>نوع الوقود :</label>
                     
                     <select class="form-control" name="fuel">
                          <option value="بنزين">بنزين</option>
                          <option value="ديزل">ديزل</option>
                     </select>
                    </div>

                    <div class="col-md-6 mb-3">
                    <label>ناقل الحركة :</label>
                     
                     <select class="form-control" name="gear">
                          <option value="عادي">عادي</option>
                          <option value="أتوماتيك">أتوماتيك</option>
                     </select>
                    </div>

                    <div class="col-md-6 mb-3">
                    <label>عدد الأبواب :</label>
                     
                     <select class="form-control" name="doors">
                          <option value="2">2</option>
                          <option value="4">4</option>
                          <option value="6">6</option>
                     </select>

                    </div>

                    <div class="col-md-6 mb-3">
                    <label>عدد المقاعد:</label>
                     
                     <select class="form-control" name="seats">
                          <option value="2">2</option>
                          <option value="4">4</option>
                          <option value="6">6</option>
                     </select>
                    </div>

                    <div class="col-md-6 mb-3">
                    <label>لون السيارة:</label>
                    <input type="text" name="color" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-6 mb-3">
                    <label>نوع دفع العجلات :</label>
                     
                     <select class="form-control" name="push_type">
                          <option value="شد أمامي">شد أمامي</option>
                          <option value="دفع خلفي">دفع خلفي</option>
                          <option value="دفع رباعي">دفع رباعي</option>
                     </select>
                    </div>

                    <div class="col-md-6 mb-3">
                    <label>السعر :</label>
                    <input type="number" name="price" class="form-control" placeholder="00000000" required>
                    </div>

                    <div class="col-md-6 mb-3">
                    <label> رقم الهاتف للتواصل :</label>
                    <input type="tel" name="phone" class="form-control" placeholder="09xxxxxxxx" maxlength="10" pattern="[0-9+-]{10,10}" required>
                    </div>
                    
                    <div class="col-md-12 mb-3">
                    
                     <label>عنوان المنشور</label>
                     <textarea type="text" name="title" class="form-control h-75" style="height: 125px;" rows="3" required></textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                    
                     <label>وصف السيارة : مثال :(بخ - حادث - نظافة - تصليح)</label>
                     <textarea type="text" name="des" class="form-control h-75" style="height: 125px;" rows="6" required></textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                    
                     <label>إضافات السيارة : مثال :(نظام مانع انزلاق- فرش جلد - جنط كروم - نظام صوت)</label>
                     <textarea type="text" name="adds" class="form-control h-75" style="height: 125px;" rows="3" required></textarea>
                    </div>

                   
                    <div class="col-md-3 mb-3 mt-2">
                    <div class="upload-wrap">
                      <center>
                        <label class="btn btn-dark">أضف الصورة الرئيسية 
                        <input id="01" type="file" name="img1" accept="image/*" autofocus style="display: none;" required>(إجباري)
                        </label>
                        <img class="uploadpreview 01" style= "width:200px;height:200px; background-size:100% 100%;  border-radius: 8px;">
                      </center>
                      </div>
                   </div>
                   
                    
                      <div class="col-md-3 mb-3 mt-2">
                     <div class="upload-wrap">
                      <center>
                      <label class="btn btn-dark"> أضف الصورة الثانوية 1
                      <input id="02" type="file" name="img2" accept="image/*" autofocus style="display: none;">(إختياري)
                      </label>
                      <img class="uploadpreview 02"  style= "width:200px;height:200px; background-size:100% 100%; border-radius: 8px;">
                    </center>
                     </div>
                      </div>
                    
                     <div class="col-md-3 mb-3 mt-2">
                     <div class="upload-wrap">
                      <center>
                      <label class="btn btn-dark">أضف الصورة الثانوية 2
                      <input id="03" type="file" name="img3" accept="image/*" autofocus style="display: none;">(إختياري)
                      </label>
                      <img class="uploadpreview 03" style= "width:200px;height:200px; background-size:100% 100%;   border-radius: 8px;">
                    </center>
                     </div>
                     </div>

                     <div class="col-md-3 mb-3 mt-2">
                     <div class="upload-wrap">
                      <center>
                      <label class="btn btn-dark">أضف الصورة الثانوية 3
                      <input id="04" type="file" name="img4" accept="image/*" autofocus  style="display: none;">(إختياري)
                      </label>
                      <img class="uploadpreview 04" style= "width:200px;height:200px; background-size: 100% 100%;   border-radius: 8px;">
                    </center>
                    </div>
                     </div>
                     <div class="col-md-12 mb-3 mt-2">
                     <label>ملاحظة : إذا أردت استبدال الصورة إضغط مرة إخرى و أضف التي تريدها</label>
                     </div>

                    
                    <div class="col-md-12 text-center">
                      <input type="submit"  name="send" class="btn btn-danger" style="margin-top: 30px; width:150px" value=" &nbsp;&nbsp;إنشاء إعلان &nbsp;&nbsp;">
                      <a class="btn btn-danger" href="index.php" style="margin-top: 30px; margin-right: 30px; width:150px">الصفحة الرئيسية</a>
                    </div>
                  

                    <div class="col-md-12 text-center">
                      <?php
                      
 if(isset($_POST['send']))
 {
  $car_state=$_POST['car_state'];
  $city=$_POST['city'];
  $car_type=$_POST['car_type'];
  $car_comp=$_POST['car_comp'];
  $year=$_POST['year'];
  $km=$_POST['km'];
  $car_city=$_POST['car_city'];
  $clinder=$_POST['clinder'];
  $fuel=$_POST['fuel'];
  $gear=$_POST['gear'];
  $doors=$_POST['doors'];
  $Seats=$_POST['seats'];
  $color=$_POST['color'];
  $push_type=$_POST['push_type'];
  $price=$_POST['price'];
  $phone=$_POST['phone'];
  $des=$_POST['des'];
  $title=$_POST['title'];
  $adds=$_POST['adds'];
  $img1=$_FILES["img1"]["name"];
  move_uploaded_file($_FILES["img1"]["tmp_name"],'images/'.$img1);
  $img2=$_FILES['img2']['name'];
  move_uploaded_file($_FILES["img2"]["tmp_name"],'images/'.$img2);
  $img3=$_FILES['img3']['name'];
  move_uploaded_file($_FILES["img3"]["tmp_name"],'images/'.$img3);
  $img4=$_FILES['img4']['name'];
  move_uploaded_file($_FILES["img4"]["tmp_name"],'images/'.$img4);
  $date = date('Y-m-d H:i:s', (time()));
  



  $add_data = $database->prepare("INSERT INTO cars (car_comp,city,made_year,price,fuel_type,doors,clinder,color,km,car_state,car_des,car_adds,car_type,push_type,car_city,gear,seats,img_1,img_2,img_3,img_4,u_name,u_img,title,time,user_id,phone) 
   VALUES('$car_comp','$city','$year','$price','$fuel','$doors','$clinder','$color','$km','$car_state','$des','$adds','$car_type','$push_type','$car_city','$gear','$Seats','$img1','$img2','$img3','$img4','$u_name','$u_img','$title',now(),'$user_id','$phone')");
  if($add_data->execute())
  {
    
    ?>
    <script>
          Swal.fire({
            icon: 'success',
            text: 'تم إضافة الإعلان '
          }).then((result) => {
                  if (result.isConfirmed) {
                    window.location = window.location;
                  }
                })
          </script>
   <?php  
  }
 else
 {
  
  ?><script>
  Swal.fire({
   icon: 'error',
   title: 'عذرا',
   text: '!حدث شيء ما خطأ, تأكد من القيم المدخلة'})
   </script>
   <?php

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
              <p>Copyright © 2022 Car Zone phone: <a href="">+963991285283</a></p>
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
<?php
}
else
{
  header("location:login.php");
}
?>