<?php
require_once "db.php";

echo "<hr>";
echo "<h3>DƯỚI ĐÂY LÀ DỮ LIỆU TỪ BẢNG 'users':</h3>";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<b>ID:</b> " . $row["id"] . " | ";
        echo "<b>Username:</b> " . $row["username"] . " | ";
        echo "<b>Password:</b> " . $row["password"] . "<br>";
    }
} else {
    echo "Bảng 'users' hiện đang trống, chưa có dữ liệu nào!";
}

$conn->close();
?>