<?php
// Thông tin kết nối CSDL
$servername = "localhost:3306";
$username = "root";
$password = "12345";
$database = "nuochoa";

// Tạo kết nối đến CSDL
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
}
