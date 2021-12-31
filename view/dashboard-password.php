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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="password-change-grid">
                    <div class="header">
                        <h2>Đổi mật khẩu</h2>
                    </div>
                    <div>
                        <label for="old-password">Mật khẩu cũ:</label>
                    </div>
                    <div>
                        <input type="text" name="old-password" id="old-password" required />
                    </div>
                    <div>
                        <label for="new-password">Mật khẩu mới:</label>
                    </div>
                    <div>
                        <input type="text" name="new-password" id="new-password" required />
                    </div>
                    <div>
                        <label for="confirm-password">Xác nhận mật khẩu:</label>
                    </div>
                    <div>
                        <input type="text" name="confirm-password" id="confirm-password" required />
                    </div>
                    <div class="submit">
                        <button type="submit" name="submit" class="order-button">
                            Đổi mật khẩu
                        </button>
                    </div>
                </div>
            </form>
            <?php
            include_once("../controller/change-password.php");
            ?>
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