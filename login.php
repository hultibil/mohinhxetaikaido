<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng nhập</title>
        <link rel="icon" href="image/kaidoLogomini.png">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <img class="logo" src="image/kaidologo.jpg">

        <!--O DANG NHAP -->
        <div class="login-container">
        <h2> ĐĂNG NHẬP VÀO KAIDO </h2>
        <!-- FORM GỬI DỮ LIỆU SANG XULY_LOGIN.PHP -->
        <form action="xuly_login.php" method="POST">
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" placeholder="Nhập tên đăng nhập..." required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu..." required>
            </div>

            <?php if (isset($_GET['error'])): ?>
                <p style="color: red; text-align: center;">Tài khoản hoặc mật khẩu không chính xác.</p>
            <?php endif; ?>

            <button type="submit" class="btn-submit">Đăng nhập</button>
            <a href="register.php" style="display: block; text-align: center; margin-top: 15px; color: white;">Chưa có tài khoản? Đăng ký ngay</a>
        </form>
    </div>
    </body>
</html>