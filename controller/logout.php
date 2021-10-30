<?php
$name = $_SESSION["full_name"];
$name2 = "Admin";
if ($name == $name2) {
    echo '<a href="AddProduct.php">Admin</a>
    <a href="index.php?logout=1">ĐĂNG XUẤT</a>
    ';
} else {
    echo '<a href="user.php">KHÁCH HÀNG</a>
    <a href="index.php?logout=1">ĐĂNG XUẤT</a>
    ';
}
