<div id="top"></div>
<!-- Header -->
<header>
    <div class="header-logo">
        <a href="/"><img src="/images/logo4.png" alt="Website's Logo" height="45" /></a>
        <a href="/" class="text">Gaming Gear</a>
    </div>
    <div>
        <form id="search-form" name="search-form" action="/view/search.php" method="post">
            <div class="search-container">
                <input type="text" placeholder="Tìm kiếm..." />
                <div class="search"></div>
            </div>
        </form>
    </div>
    <div>
        <a href="cart.php" class="cart center">
            <img src="/images/icon-shopping-cart-2.png" class="cart-icon" />
        </a>
        <div style="padding-left: 20px; font-size: 18px">
            <div style="color: crimson">1 Sản phẩm</div>
            <div style="color: white; font-size: larger">5.000 đ</div>
        </div>
    </div>
</header>
<?php
include_once("../model/db.php");
?>