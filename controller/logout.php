<?php
$name = $_SESSION["full_name"];
if ($name == "admin") {
    // echo "<script>location.href = 'dashboard.php';</script>";
    header('Location: dashboard.php');
} else {
    echo '<a href="user.php">KHÁCH HÀNG</a>
    <a href="index.php?logout=1">ĐĂNG XUẤT</a>
    ';
}
