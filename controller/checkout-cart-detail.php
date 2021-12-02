<?php
if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];

    foreach ($cart as $product) {
        echo '      
        <div>
            <img src="/images/' . $product[4] . '" alt="Product Image" class="cart-item-img" />
            <div class="quantity">' . $product[2] . '</div>
        </div>
        <div>' . $product[1] . '</div>
        <div>' . number_format($product[3]) . '</div>';
    }
    echo '<div class="total">Tổng tiền: ' . number_format($total) . ' VND</div>';
}
