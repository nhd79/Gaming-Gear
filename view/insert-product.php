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

    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

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

            <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="insert-product-form">
                <div class="insert-product-grid">
                    <div class="header">
                        <h2>Thêm sản phẩm</h2>
                    </div>
                    <div>
                        Tên sản phẩm:
                    </div>
                    <div>
                        <input type="text" name="name" id="name" required />
                    </div>
                    <div>
                        Loại sản phẩm:
                    </div>
                    <div>
                        <select name="category">
                            <option value="1">Bàn phím</option>
                            <option value="2">Chuột</option>
                            <option value="3">Tai nghe</option>
                            <option value="4">Ghế</option>
                            <option value="5">Loa</option>
                            <option value="6">Lót chuột</option>
                        </select>
                    </div>
                    <div>
                        Đơn giá:
                    </div>
                    <div>
                        <input type="number" name="price" id="price" required />
                    </div>
                    <div>
                        Mô tả:
                    </div>
                    <div>
                        <input type="text" name="description" id="description" required />
                    </div>
                    <div>
                        Mô tả 2:
                    </div>
                    <div>
                        <input type="text" name="description_2" id="description_2" />
                    </div>
                    <div>
                        Mô tả 3:
                    </div>
                    <div>
                        <input type="text" name="description_3" id="description_3" />
                    </div>
                    <div>
                        Mô tả 4:
                    </div>
                    <div>
                        <input type="text" name="description_4" id="description_4" />
                    </div>
                    <div>
                        Mô tả 5:
                    </div>
                    <div>
                        <input type="text" name="description_5" id="description_5" />
                    </div>
                    <div class="product-img">
                        <label class="img-label">
                            <input type="file" name="file" id="file" class="img-input" />
                            <span class="text">Chọn ảnh sản phẩm&ensp;</span></label>
                        <script>
                            //Name appear
                            $(".img-input").on("change", function() {
                                var fileName = $(this).val().split("\\").pop();
                                $(this)
                                    .siblings(".text")
                                    .html(fileName + "&ensp;");
                            });
                        </script>
                    </div>
                    <div class="submit">
                        <button type="submit" name="submit" class="order-button">
                            Thêm sản phẩm mới
                        </button>
                    </div>
                </div>
            </form>
            <?php
            include_once("../controller/insert-product.php");
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