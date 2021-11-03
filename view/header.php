<div id="top"></div>
<?php
session_start();
if (isset($_REQUEST["logout"])) {
    session_destroy();
    echo "<script>location.href = 'index.php';</script>";
}
?>
<!-- Header -->
<header>
    <div class="header-logo">
        <a href="/"><img src="/images/logo4.png" alt="Website's Logo" height="45" /></a>
        <a href="/" class="text">Gaming Gear</a>
    </div>
    <div>
        <form id="search-form" name="search-form" action="<?php echo htmlspecialchars('search.php'); ?>" method="post">
            <div class="search-container">
                <input type="text" name="search-text" id="search-text" placeholder="Tìm kiếm..." />
                <div class="search"></div>
            </div>
        </form>
    </div>
    <div>
        <a href="cart.php" class="cart center">
            <img src="/images/icon-shopping-cart-2.png" class="cart-icon" />
        </a>

        <?php
        if (isset($_SESSION["cart"])) {
            $cart = $_SESSION["cart"];
            if (count($cart) > 0) {
                $quantity = 0;
                $total = 0;
                foreach ($cart as $product) {
                    $quantity = $quantity + $product[2];
                    $total += $product[2] * $product[3];
                }
                echo '        
                <div style="padding-left: 20px; font-size: 18px">
                    <div style="color: crimson">' . $quantity . ' Sản phẩm</div>
                    <div style="color: white; font-size: larger">' . number_format($total) . ' đ</div>
                </div>';
            }
        }
        ?>

    </div>
</header>
<?php
include_once("../model/db.php");
?>