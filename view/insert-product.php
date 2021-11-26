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

            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <div class="insert-product-grid">
                    <div class="header">
                        <h2>Thêm sản phẩm</h2>
                    </div>
                    <div>
                        Tên sản phẩm:
                    </div>
                    <div>
                        <input type="text" name="" />
                    </div>
                    <div>
                        Loại sản phẩm:
                    </div>
                    <div>
                        <input type="text" name="" />
                    </div>
                    <div>
                        Đơn giá:
                    </div>
                    <div>
                        <input type="text" name="" />
                    </div>
                    <div>
                        Mô tả:
                    </div>
                    <div>
                        <input type="text" name="" />
                    </div>
                    <div>
                        Mô tả 2:
                    </div>
                    <div>
                        <input type="text" name="" />
                    </div>
                    <div>
                        Mô tả 3:
                    </div>
                    <div>
                        <input type="text" name="" />
                    </div>
                    <div>
                        Mô tả 4:
                    </div>
                    <div>
                        <input type="text" name="" />
                    </div>
                    <div>
                        Mô tả 5:
                    </div>
                    <div>
                        <input type="text" name="" />
                    </div>
                    <div class="product-img">IMG</div>
                    <div class="submit">Submit Button</div>
                </div>
            </form>

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