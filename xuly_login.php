<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_input = $_POST['username'];
    $pass_input = $_POST['password'];

    // Dùng prepared statement để tránh SQL Injection
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user_input, $pass_input);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_logged_in'] = $row['username'];

        header("Location: index.php");
        exit();
    } else {
        // Sai tài khoản/mật khẩu -> quay lại login.php kèm tín hiệu báo lỗi
        header("Location: login.php?error=1");
        exit();
    }

    $stmt->close();
}