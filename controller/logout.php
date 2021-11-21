<?php
$name = $_SESSION["full_name"];
if ($name == "admin") {
    // echo "<script>location.href = 'admin-dashboard.php';</script>";
    header('Location: admin-dashboard.php');
} else {
    echo '<a href="user.php">KHÁCH HÀNG</a>
    <a href="index.php?logout=1">ĐĂNG XUẤT</a>
    ';
}
