<?php
$server = "localhost:3366";
$username = "root";
$password ="";
$database_name = "product";

$connect = mysqli_connect($server,$username,$password,$database_name);

if (!$connect) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

 mysqli_set_charset($connect,"utf8");

?>