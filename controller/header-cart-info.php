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
