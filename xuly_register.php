<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // 1. Kiểm tra xem username đã tồn tại chưa
    $check_sql = "SELECT * FROM users WHERE username = '$username'";
    $check_result = $conn->query($check_sql);

    if ($check_result && $check_result->num_rows > 0) {
        echo "<div style='text-align: center; margin-top: 50px; font-family: Arial; color: red;'>";
        echo "<h2>Xin lỗi, tên đăng nhập này đã tồn tại!</h2>";
        echo "<a href='register.php'>Vui lòng thử tên khác</a>";
        echo "</div>";
    } else {
        // 2. Thêm tài khoản mới vào bảng users
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<div style='text-align: center; margin-top: 50px; font-family: Arial; color: green;'>";
            echo "<h2>ĐĂNG KÝ THÀNH CÔNG!</h2>";
            echo "<p>Tài khoản <b>" . htmlspecialchars($username) . "</b> đã được tạo.</p>";
            echo "<a href='login.php'>Chuyển đến trang Đăng nhập ngay</a>";
            echo "</div>";
        } else {
            echo "Đã xảy ra lỗi: " . $conn->error;
        }
    }
}

$conn->close();
?>