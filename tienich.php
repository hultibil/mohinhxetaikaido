<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ giới thiệu Kaido</title>
    <link rel="icon" href="image/kaidoLogomini.png">
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <!--TRANG LOADING-->
    <div id="loading">
        <img src="image/imgload.png">
        <p>Đang tải, gần xong rồi!!<span id="dots">...</span></p>
    </div>
    <div id="dautrang"> 
    <div class="header"> <!--Add CSS-->
            <img class="logo" src="image/kaidologo.jpg">
            <h2>Trang chủ giới thiệu Kaido</h2>
            <div class="nut0">
                <a href="index.php" onclick="clickSound()">Trang chủ</a>
            </div>
            <div class="nut1"> <!--Add CSS-->
                <a href="khac.html" onclick="clickSound()">Dự án khác</a>
            </div>
            <div class="nut2">
                <a href="hoithem.html" onclick="clickSound()">Trò chuyện</a>
            </div>
            <div class="nut4chon">
                <a href="tienich.p" onclick="clickSound()">Tính năng</a>
            </div>
            <div class="nut3">
                <a href="gamemini.html" onclick="clickSound()">Game mini</a>
            </div>
    </div>
    <div class="container">
        <!-- 1. THÔNG TIN TÀI KHOẢN -->
        <div class="account-card">
            <h2>👤 THÔNG TIN TÀI KHOẢN</h2>
            <p style="font-size: 20px;">Tên tài khoản: <b style="color: #2196F3;"><?php echo htmlspecialchars($_SESSION['user_logged_in']); ?></b></p>
            <p>Trạng thái: <span style="color: #4CAF50;">Đã xác thực</span></p>
            <a href="logout.php" class="btn-logout">Đăng xuất</a>
        </div>

        <!-- 2. CÁC TÍNH NĂNG CHƯA BỔ SUNG -->
        <h3 style="margin-bottom: 15px;">🚀 TÍNH NĂNG HỆ THỐNG</h3>
        <div class="features-grid">
            <div class="feature-box">
                <h4>🛒 Mua / Bán Xe</h4>
                <p>Chức năng mua bán giao dịch mô hình (Đang phát triển...)</p>
            </div>
            <div class="feature-box">
                <h4>📦 Đơn Hàng Của Tôi</h4>
                <p>Xem lịch sử mua hàng (Chưa bổ sung)</p>
            </div>
            <div class="feature-box">
                <h4>⚙️ Cài Đặt Tài Khoản</h4>
                <p>Đổi mật khẩu, thông tin (Chưa bổ sung)</p>
            </div>
        </div>
<div id="info">
    <div class="thongtinweb">
    <h4 class="text">Bạn đang ở cuối trang.</h4>
<div class="footer">
    <div>
    <h3 class="text">Social Media</h3>
    <p>--Mạng xã hội Tik Tok--</p>
    <div class="tiktok"><a href="https://www.tiktok.com/@elfaria425">Tik tok: @elfaria425 | Chính chủ chế tạo ngoại hình, thiết kế xe chính</a></div><br>
    <div class="tiktok2"><a href=https://www.tiktok.com/@meihirou>Tik tok: @meihirou | Phụ trợ, kỹ sư, thiết kế trang web</a></div><br>
    <div class="tiktok3"><a href="https://www.tiktok.com/@hoai.anh2017.3">Tik tok: @hoai.anh2017.3 | Phụ trợ, thiết kế trang web</a><br><p>Ủng hộ chúng mình bằng cách nhấn Follow <3 </p></div>
    <p>--Liên hệ bằng email--</p>
    <p>akahiru5@gmail.com</p>
    <p>--Kênh Youtube--</p>
    <div class="youtube">
    <a href="https://www.youtube.com/@Nguy%E1%BB%85nqu%E1%BB%91cc%C6%B0%E1%BB%9Dng-w9j4l">Kênh Youtube: Cường Nguyễn</a></div><br>
    <div class="youtube2">
    <a href="https://www.youtube.com/@tienlam2159">Kênh Youtube: Lâm Tiến</a>
    </div>
    <p>Ủng hộ chúng mình bằng cách nhấn Subcribe <3 </p>
</div>
    <div>
        <h3 class="text">Thông tin trang web</h3>
        <p>Xây dựng thương hiệu tại: Thành phố Gia Lai </p>
        <p>Được thiết kế bởi: quốc cường rc</p>
        <p>Bản quyền © 2025 Kaido. All rights reserved.</p>
    </div>
    <h1 id="gio"></h1>
    <script>
function capNhatGio() {
    let now = new Date();
    let gio = now.toLocaleTimeString();
    document.getElementById("gio").innerHTML = gio;
}
setInterval(capNhatGio, 1000);
</script>
    <p class="date">Cập nhật trang web lần cuối: 16/09/2026</p>
</div>

<div class="quaylai">
    <a href="#dautrang">Đầu trang</a>
</div>

<!--Đặt Cho loading-->
<script>
window.addEventListener("load", function() {
    const loading = document.getElementById("loading");
    loading.style.opacity = "0";
    setTimeout(function() {
        loading.style.display = "none";
    }, 500);
});
</script>
</body>
    <script src="slide.js"></script>
</html>