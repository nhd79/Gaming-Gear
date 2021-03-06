<div id="top"></div>
<!-- Header -->
<header>
    <div class="header-logo">
        <a href="/"><img src="/images/logo4.png" alt="Website's Logo" height="45" /></a>
        <a href="/" class="text">Gaming Gear</a>
    </div>
    <div class="search-button">
        <form id="search-form" name="search-form" action="<?php echo htmlspecialchars('search.php'); ?>" method="post">
            <div class="search-container">
                <input type="text" name="search-text" id="search-text" placeholder="Tìm kiếm..." />
                <div class="search"></div>
            </div>
        </form>
    </div>
    <div class="cart-button">
        <a href="cart.php" class="cart center">
            <img src="/images/icon-shopping-cart-2.png" class="cart-icon" alt="Cart Button" />
        </a>

        <?php
        include_once('../controller/header-cart-info.php');
        ?>

    </div>
</header>
<?php
include_once("../model/db.php");
?>