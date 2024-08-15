<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $username = $_POST['username'];
  $password = $_POST ['password'];

  // database connection

  $host = "localhost:3366";
  $dbusername ="root";
  $dbpassword = "";
  $dbname ="login";

  $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

  if($conn->connect_error)
  {
    die("Connection failed: ". $conn ->connect_error);
  }
   
  // validate Login auththencation
  $query = "SELECT * FROM register WHERE username='$username' AND password='$password'"; 

  $result = $conn->query($query);

  if($result->num_rows ==1)
  {
    // thong báo đăng nhập thành công
    header("Location: ../View/trangchu/trangchu.php");
    exit();
  }
  else
  {
    // thông báo đăng nhập thất bại
    header("Location: error.html");
    exit();
  }
  $conn->close();
}

?>