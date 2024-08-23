<?php
// Hiển thị tất cả lỗi và cảnh báo
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password']; 
    // Kết nối cơ sở dữ liệu
    $host = "localhost:3366";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "login";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sử dụng prepared statements để tránh SQL Injection
    $stmt = $conn->prepare("INSERT INTO user (username, email, phoneNumber, password) VALUES (?, ?, ?, ?)");

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Binding parameters
    $stmt->bind_param("ssss", $username, $email, $phone, $password);

    // Kiểm tra lỗi nếu bind_param thất bại
    if ($stmt->errno) {
        die("Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
    }

    if ($stmt->execute()) {
        // Đăng ký thành công
        echo "Registration successful. Redirecting...";
        header("refresh:3;url= ../View/trangchu/trangchu.php");
        exit();
    } else {
        // Đăng ký thất bại
        die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
} else {
    echo "No POST data received.";
}
?>
