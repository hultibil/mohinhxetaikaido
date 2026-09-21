<?php
$conn = new mysqli(
    "localhost",
    "root",
    "",
    "kaido" // Hoặc tên Database MySQL của bạn nếu đặt khác
);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
echo "PHP đã kết nối SQL thành công!";
?>