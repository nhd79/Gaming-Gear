<?php
$name = $_SESSION["full_name"];
if ($name == "admin") {
    header('Location: /view/admin-dashboard.html');
} else {
    echo '<a href="user.php">KHÁCH HÀNG</a>
    <a href="index.php?logout=1">ĐĂNG XUẤT</a>
    ';
}
