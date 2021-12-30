<?php
include_once('../controller/header-session-login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/dashboard-styles.css" />
    <link rel="stylesheet" href="/css/dashboard-order.css" />

    <title>Admin Dashboard</title>
</head>

<body onload="setColor()">
    <div class="container">
        <?php
        include_once("dashboard-navigation.php");
        ?>

        <!-- Main -->
        <div class="main">
            <?php
            include_once("dashboard-topbar.php");
            ?>

            <div class="order-details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Chi tiết đơn hàng</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Ngày đặt hàng</td>
                                <td>Tên khách hàng</td>
                                <td>Hình thức thanh toán</td>
                                <td>Tổng tiền</td>
                                <td>Trạng thái</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("../controller/dashboard-order-detail-1.php");
                            ?>
                        </tbody>
                    </table>
                    <br><br><br>
                    <table>
                        <thead>
                            <tr>
                                <td>Địa chỉ</td>
                                <td>Email</td>
                                <td>Điện thoại</td>
                                <td>ID Sản phẩm</td>
                                <td>Số lượng</td>
                                <td>Đơn giá</td>
                                <td>Tạm tính</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("../controller/dashboard-order-detail-2.php");
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        // MenuToggle
        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        let main = document.querySelector(".main");

        toggle.onclick = function() {
            navigation.classList.toggle("active");
            main.classList.toggle("active");
        };
        // add hovered class in selected list item
        let list = document.querySelectorAll(".navigation li");

        function activeLink() {
            list.forEach((item) => item.classList.remove("hovered"));
            this.classList.add("hovered");
        }
        list.forEach((item) => item.addEventListener("mouseover", activeLink));
    </script>

    <button class="red" onclick="changeColor('#ec1933')"></button>
    <button class="blue" onclick="changeColor('#287bff')"></button>
</body>

</html>