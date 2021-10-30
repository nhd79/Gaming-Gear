<?php
$sql = 'select category.id,category.name,product.id,product.name,price,image 
    from product 
    INNER JOIN category ON product.category_id=category.id 
    limit 0,8
    ';
$result = readDatabase($sql, array());
foreach ($result as $product) {
  echo '<div class="item">
      <div class="item-category-cart-grid center">
        <div>
          <a href="product.php?category_id=' . $product[0] . '"" class="item-category">' . $product[1] . '</a>
        </div>
        <div class="cart-plus center">
          <a href="cart.php">
              <img src="/images/icon-shopping-cart-plus.png" class="cart-plus-icon" /></a>
        </div>
      </div>
      <div class="center">
        <img src="/images/' . $product[5] . '" alt="banphim" class="item-img" />
      </div>
      <div class="item-name">' . $product[3] . '</div>
      <div class="detail-button-price-grid">
        <a href="detail.php?product_id=' . $product[2] . '" class="detail-button center">Chi tiết</a>
        <div class="price center">' . number_format($product[4]) . ' VND</div>
      </div>
    </div>';
}
