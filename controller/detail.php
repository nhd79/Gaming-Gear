<?php
include_once("form-validation.php");

$product_id = 0;

if (isset($_GET["product_id"]))
  $product_id = test_input($_GET["product_id"]);

$sql = 'select * from product where id=?';
$result = readDatabase($sql, array($product_id));

foreach ($result as $product) {
  echo '
      <div class="product">
        <div>
          <img src="/images/' . $product[4] . '" alt="banphim" class="product-img" />
        </div>
        <div class="product-name">' . $product[2] . '</div>
        <div class="product-price">' . number_format($product[3]) . ' VND</div>
        <div>' . $product[5] . '</div>
        <div>' . $product[6] . '</div>
        <div>' . $product[7] . '</div>
        ';
  if ($product[8] != '')
    echo '<div>' . $product[8] . '</div>';
  if ($product[9] != '')
    echo '<div>' . $product[9] . '</div>';
  echo '
        <div>
          <a href="../controller/cart-info.php?added_product_id=' . $product[0] . '&&category_id=' . $product[1] . '" class="add-to-cart-button">Thêm vào giỏ hàng</a>
        </div>
      </div>';
}
