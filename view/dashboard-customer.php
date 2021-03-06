<?php
include_once('../controller/header-session-login.php');
if ($_SESSION["full_name"] != "admin") {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/dashboard-styles.css" />
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
            <div class="details">

                <!-- New Customers -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Khách hàng gần đây</h2>
                    </div>
                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="/images/img1.jpg" /></div>
                            </td>
                            <td>
                                <h4>David<br /><span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="/images/img2.jpg" /></div>
                            </td>
                            <td>
                                <h4>Muhammad<br /><span>India</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="/images/img3.jpg" /></div>
                            </td>
                            <td>
                                <h4>Amelia<br /><span>France</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="/images/img4.jpg" /></div>
                            </td>
                            <td>
                                <h4>Olivia<br /><span>USA</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="/images/img5.jpg" /></div>
                            </td>
                            <td>
                                <h4>Amit<br /><span>Japan</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="/images/img6.jpg" /></div>
                            </td>
                            <td>
                                <h4>Ashraf<br /><span>India</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="/images/img7.jpg" /></div>
                            </td>
                            <td>
                                <h4>Diana<br /><span>Malaysia</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="/images/img8.jpg" /></div>
                            </td>
                            <td>
                                <h4>Amit<br /><span>India</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="/images/img9.jpg" /></div>
                            </td>
                            <td>
                                <h4>Huong<br /><span>Viet Nam</span></h4>
                            </td>
                        </tr>
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