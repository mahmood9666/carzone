<?php

$con=mysqli_connect('localhost','root','','car_zone')or die($con->error);

$username= "root";
$password= "";
$database=new PDO("mysql:host=localhost; dbname=car_zone;",$username,$password);
?>