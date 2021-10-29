<?php
$sql = 'select * from category';
$result = readDatabase($sql);
foreach ($result as $category) {
    echo '<li><a href="product.php?category_id=' . $category[0] . '">' . $category[1] . '</a></li>';
}
