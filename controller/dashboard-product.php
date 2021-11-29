<?php
$sql = 'select id,image,name,price,description,description_2,description_3,description_4,description_5
from product where 1
    ';
$result = readDatabase($sql, array());
foreach ($result as $product) {
  echo '
  <div class="product-list">
    <div class="product">
      <div class="">
        <a href="">
          <img src="/images/' . $product[1] . '" alt="banphim" class="item-img" />
        </a>
      </div>
      <div class="">' . $product[2] . '</div>
      <div class="">' . number_format($product[3]) . ' VND</div>
      <div class="description">
        <div>' . $product[4] . '</div>
        <div>' . $product[5] . '</div>
        <div>' . $product[6] . '</div>
        <div>' . $product[7] . '</div>
        ';
  if ($product[8] != "") echo '<div>' . $product[8] . '</div>';
  echo '
      </div>
      <div class="button">
        <a href="../view/update-product.php?product_id=' . $product[0] . '">
          <ion-icon name="pencil-outline"></ion-icon>
        </a>
        <a href="../controller/delete-product.php?product_id=' . $product[0] . '">
          <ion-icon name="trash-outline"></ion-icon>
        </a>
      </div>
    </div>
  </div>';
}
