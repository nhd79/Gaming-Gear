<?php
session_start();
if (isset($_REQUEST["logout"])) {
    session_destroy();
    echo "<script>location.href = 'index.php';</script>";
}
include_once("../model/db.php");
include_once("../controller/form-validation.php");
?>

<!-- Change color -->
<script>
    var r = document.querySelector(":root");
    var color = '';

    function changeColor(value) {
        r.style.setProperty("--mainColor", value);
        color = value;
        // console.log(color);
    }

    function setColor() {
        console.log(color);

        r.style.setProperty("--mainColor", color);
    }
</script>

<div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="/">
                    <span class="logo"><img src="/images/logo4.png" alt="Website's Logo" height="45" /></span>
                    <span class="title">Gaming Gear</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Bảng điều khiển</span>
                </a>
            </li>
            <!-- <li>
                <a href="dashboard-customer.php">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="title">Khách hàng</span>
                </a>
            </li> -->
            <li>
                <a href="dashboard-order.php">
                    <span class="icon">
                        <ion-icon name="receipt-outline"></ion-icon>
                    </span>
                    <span class="title">Đơn hàng</span>
                </a>
            </li>
            <li>
                <a href="dashboard-product.php">
                    <span class="icon">
                        <ion-icon name="cube-outline"></ion-icon>
                    </span>
                    <span class="title">Sản phẩm</span>
                </a>
            </li>
            <!-- <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Cài đặt</span>
                </a>
            </li> -->
            <li>
                <a href="dashboard-password.php">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <span class="title">Mật khẩu</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?logout=1">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Đăng xuất</span>
                </a>
            </li>
        </ul>
    </div>