<script language="javascript" type="text/jscript">
    function deleteConfirmation(product_id) {
        select = confirm('Bạn có muốn xóa sản phẩm này không?');
        if (select == true)
            location.href = "cart?product_id_delete=" + product_id;
    }
</script>
<?php
if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];

    if (count($cart) > 0) {
        if (isset($_GET["product_id_delete"])) {
            $product_id_delete = $_GET["product_id_delete"];
            unset($cart[$product_id_delete]);
            $_SESSION["cart"] = $cart;
            echo "<script>location.href = 'cart.php';</script>";
        }
        if (isset($_POST["update"])) {
            foreach ($cart as $product) {
                $quantity = $_POST["quantity" . $product[0]];
                if ($quantity > 0)
                    $cart[$product[0]][2] = $quantity;
            }
            $_SESSION["cart"] = $cart;
            echo "<script>location.href = 'cart.php';</script>";
        }
        echo '<form method="post" action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '">
        <div class="cart-page-grid">
          <div class="label">Sản phẩm</div>
          <div class="label">Tên sản phẩm</div>
          <div class="label">Số lượng</div>
          <div class="label">Đơn giá</div>
          <div class="label">Thành tiền</div>
          <div class="label"></div>';

        $total = 0;
        foreach ($cart as $product) {
            echo '
            <div>
                <img src="/images/' . $product[4] . '" alt="banphim" class="cart-item-img" />
            </div>
            <div>' . $product[1] . '</div>
            <div>
                <input type="number" min="1" max="100" value="' . $product[2] . '" name="quantity' . $product[0] . '" class="quantity" />
            </div>
            <div>' . number_format($product[3]) . '</div>
            <div>' . number_format($product[2] * $product[3]) . '</div>
            <div>
                <a href="#" onClick="deleteConfirmation(' . $product[0] . ')" class="garbage-button center">
                <img src="/images/icon-garbage-2.png" class="garbage-icon" /></a>
            </div>';
            $total += $product[2] * $product[3];
        }
        echo '      
        <div class="total">Tổng tiền: ' . number_format($total) . ' VND</div>
        <div class="update">
          <button type="submit" name="update" class="checkout-button">Cập nhật giỏ hàng</button>
        </div>
        <div class="checkout">
          <a href="checkout.php" class="update-button">Thanh toán</a>
        </div>
      </div>
    </form>';
    } else {
        echo "<script>alert('Bạn chưa chọn sản phẩm nào!')</script>";
        echo "<script>location.href = 'index.php';</script>";
    }
}
?>