<?php

// 1. Khởi động Session (dùng để lưu trạng thái đăng nhập)
session_start();

// 2. Nhúng file kết nối Database db.php
require_once "db.php";

// 3. Kiểm tra xem người dùng có bấm nút Đăng nhập từ Form gửi sang không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Lấy dữ liệu người dùng nhập từ các ô input (name="username" và name="password")
    $user_input = $_POST['username'];
    $pass_input = $_POST['password'];

    // 4. Viết câu lệnh SQL tìm tài khoản khớp cả username và password
    $sql = "SELECT * FROM users WHERE username = '$user_input' AND password = '$pass_input'";
    $result = $conn->query($sql);

    // 5. Kiểm tra kết quả truy vấn
    if ($result->num_rows > 0) {
        // Tìm thấy người dùng hợp lệ
        $row = $result->fetch_assoc();
        
        // Lưu tên đăng nhập vào Session
        $_SESSION['user_logged_in'] = $row['username'];

        header("Location: index.php");
    exit();
    } else {
        // Không tìm thấy tài khoản
        echo "<div style='text-align: center; margin-top: 50px; font-family: Arial; color: red;'>";
        echo "<h2>ĐĂNG NHẬP THẤT BẠI!</h2>";
        echo "<p>Mật khẩu hoặc tên đăng nhập không chính xác.</p>";
        echo "<a href='login.php'>Quay lại thử lại</a>";
        echo "</div>";
    }
}

// 6. Đóng kết nối database
$conn->close();
?>