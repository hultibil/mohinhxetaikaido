<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>KAIDO - The powerful mini engine</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

<div class="register-container">
    <h2 style="text-align: center;">TẠO TÀI KHOẢN</h2>
    <form action="xuly_register.php" method="POST">
        <div class="form-group">
            <label for="username">Tên đăng nhập mới:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu mới:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn-submit">Đăng ký</button>
    </form>
    <a href="login.php" class="login-link">Đã có tài khoản? Đăng nhập ngay</a>
</div>
</body>
</html>