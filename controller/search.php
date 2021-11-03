<?php
include_once("form-validation.php");

$search = '';

if (isset($_POST["search-text"]))
    $search = test_input($_POST["search-text"]);

$sql = 'select category.id,category.name,product.id,product.name,price,image
 from product 
 INNER JOIN category ON product.category_id=category.id 
 where product.name like concat("%",?,"%") or description like concat("%",?,"%")';

$result = readDatabase($sql, array($search, $search));

?>
<?php
if (count($result) > 0)
    echo '<div class="search-result-text center">Kết quả tìm kiếm cho "' . $search . '"</div>';
else
    echo '<div class="search-result-text center">Không tìm thấy sản phẩm "' . $search . '" :<</div>';
?>

<!-- Product -->
<div class="product-grid">
    <?php
    foreach ($result as $product) {
        echo '<div class="item">
        <div class="item-category-cart-grid center">
            <div>
                <a href="product.php?category_id=' . $product[0] . '"" class="item-category">' . $product[1] . '</a>
            </div>
            <div class="cart-plus center">
            <a href="../controller/cart.php?added_product_id=' . $product[2] . '&&category_id=' . $product[0] . '">
                    <img src="/images/icon-shopping-cart-plus.png" class="cart-plus-icon" /></a>
            </div>
        </div>
        <div class="center">
        <a href="detail.php?product_id=' . $product[2] . '">
            <img src="/images/' . $product[5] . '" alt="banphim" class="item-img" />
        </a>
        </div>
        <div class="item-name center">
            <a href="detail.php?product_id=' . $product[2] . '">
                ' . $product[3] . '
            </a>
        </div>
        <div class="detail-button-price-grid">
            <a href="detail.php?product_id=' . $product[2] . '" class="detail-button center">Chi tiết</a>
            <div class="price center">' . number_format($product[4]) . ' VND</div>
        </div>
    </div>';
    }
    ?>
</div>