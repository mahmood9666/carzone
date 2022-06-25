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

    <title>البحث</title>

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

                <li class="nav-item active"><a class="nav-link" href="search.php">البحث</a></li>

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

    <div class="banner header-text">
    <div class="banner-item-02">
      <div class="text-content">
         <h4>إبحث عن سيارة تناسبك</h4>
         <h2>إبحث على طريقتك</h2>
      </div>
    </div>
  </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
             <div class="contact-form">
                <form class="f1" action="#" dir="rtl"><center>
                     <label>حالة السيارة :</label>
                     
                     <select class="form-control">
                          <option value="">الكل</option>
                          <option value="new">جديدة</option>
                          <option value="used">مستعملة</option>
                     </select>

                     
                     <label>المدينة :</label>
                     
                     <select class="form-control">
                          <option value="">الكل</option>
                          <option value="">دمشق</option>
                          <option value="">حلب</option>
                          <option value="">حماة</option>
                          <option value="">حمص</option>
                          <option value="">الاذقية</option>
                          <option value="">طرطوس</option>
                          <option value="">القنيطرة</option>
                          <option value="">درعا</option>
                          <option value="">السويداء</option>
                          <option value="">الرقة</option>
                          <option value="">دير الزور</option>
                          <option value="">الحسكة</option>
                     </select>

                     <label>مصنع/موديل :</label>
                     
                     <select class="form-control">
                          <option value="">الكل</option>
                          <option value="">Audi</option>
                          <option value="">BMW</option>
                          <option value="">Merceds</option>
                          <option value="">Hyundai</option>
                          <option value="">Kia</option>
                          <option value="">غير ذلك</option>
                     </select>

                     <label>سنة الصنع :</label>
                     
                     <select class="form-control">
                          <option value="">الكل</option>
                          <option value="">1980~~1970</option>
                          <option value="">1990~~1980</option>
                          <option value="">2000~1990</option>
                          <option value="">2010~~2000</option>
                          <option value="">2020~~2010</option>
                          <option value="">2022~~2020</option>
                     </select>

                     <label>نوع السيارة :</label>
                     
                     <select class="form-control">
                          <option value="">الكل</option>
                          <option value="">سيدان</option>
                          <option value="">رياضية</option>
                          <option value="">عائلية</option>
                          <option value="">دفع رباعي</option>
                          <option value="">كوبيه</option>
                          <option value="">وادن</option>
                          <option value="">بيك أب</option>
                          <option value="">غير ذلك</option>
                     </select>

                     <label>أعلى السعر :</label>
                     
                     <input type="num" name="year" class="form-control" placeholder="19xx" maxlength="4" required>

                     <label>أدنى السعر :</label>
                     
                     <input type="num" name="year" class="form-control" placeholder="19xx" maxlength="4" required>


                     <label>عداد كيلومتر :</label>
                     
                     <select class="form-control">
                     <option value="">الكل</option>
                          <option value="">1980~~1970</option>
                          <option value="">1990~~1980</option>
                          <option value="">2000~1990</option>
                          <option value="">2010~~2000</option>
                          <option value="">2020~~2010</option>
                          <option value="">2022~~2020</option>
                     </select>

                     <label>سعة المحرك :</label>
                     
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>

                     <label>عدد السلندرات :</label>
                     
                     <select class="form-control">
                          <option value="">الكل</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>
                          <option value="">5</option>
                          <option value="">6</option>
                     </select>

                     <label>نوع الوقود :</label>
                     
                     <select class="form-control">
                          <option value="">الكل</option>
                          <option value="">بنزين</option>
                          <option value="">ديزل</option>
                     </select>

                     <label>ناقل الحركة :</label>
                     
                     <select class="form-control">
                          <option value="">الكل</option>
                          <option value="">عادي</option>
                          <option value="">أتوماتيك</option>
                     </select>

                     <label>عدد الابواب :</label>
                     
                     <select class="form-control">
                          <option value="">الكل</option>
                          <option value="">2</option>
                          <option value="">4</option>
                          <option value="">6</option>
                     </select>

                     <label>عدد المقاعد:</label>
                     
                     <select class="form-control">
                          <option value="">الكل</option>
                          <option value="">2</option>
                          <option value="">4</option>
                          <option value="">6</option>
                     </select>

                     <label>لون السيارة:</label>
                     
                     <select class="form-control">
                          <option value="">الكل</option>
                          <option value="">أحمر</option>
                          <option value="">أزرق</option>
                          <option value="">أسود</option>
                          <option value="">أبيض</option>
                          <option value="">برتقالي</option>
                          <option value="">كحلي</option>
                          <option value="">غير ذلك</option>
                     </select>

                     <button type="submit" class="filled-button btn-block">بحث</button></center>
                </form>
             </div>
          </div>

          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6">
                <div class="product-item">
                  <a href="car-details.php"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
                  <div class="down-content">
                    <a href="car-details.php"><h4>Lorem ipsum dolor sit amet, consectetur</h4></a>

                    <h6><small><del> $11199.00</del></small> $11179.00</h6>

                    <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>

                    <small>
                      <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
                    </small>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="car-details.php"><img src="assets/images/product-2-370x270.jpg" alt=""></a>
                  <div class="down-content">
                    <a href="car-details.php"><h4>Lorem ipsum dolor sit amet, consectetur</h4></a>

                    <h6><small><del> $11199.00</del></small> $11179.00</h6>

                    <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>

                    <small>
                      <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
                    </small>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="car-details.php"><img src="assets/images/product-3-370x270.jpg" alt=""></a>
                  <div class="down-content">
                    <a href="car-details.php"><h4>Lorem ipsum dolor sit amet, consectetur</h4></a>

                    <h6><small><del> $11199.00</del></small> $11179.00</h6>

                    <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>

                    <small>
                      <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
                    </small>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="car-details.php"><img src="assets/images/product-4-370x270.jpg" alt=""></a>
                  <div class="down-content">
                    <a href="car-details.php"><h4>Lorem ipsum dolor sit amet, consectetur</h4></a>

                    <h6><small><del> $11199.00</del></small> $11179.00</h6>

                    <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>

                    <small>
                      <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
                    </small>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="car-details.php"><img src="assets/images/product-5-370x270.jpg" alt=""></a>
                  <div class="down-content">
                    <a href="car-details.php"><h4>Lorem ipsum dolor sit amet, consectetur</h4></a>

                    <h6><small><del> $11199.00</del></small> $11179.00</h6>

                    <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>

                    <small>
                      <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
                    </small>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="car-details.php"><img src="assets/images/product-6-370x270.jpg" alt=""></a>
                  <div class="down-content">
                    <a href="car-details.php"><h4>Lorem ipsum dolor sit amet, consectetur</h4></a>

                    <h6><small><del> $11199.00</del></small> $11179.00</h6>

                    <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>

                    <small>
                      <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
                    </small>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <ul class="pages">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
              </div>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>