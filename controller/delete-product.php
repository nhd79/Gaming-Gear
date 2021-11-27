<?php
include_once("form-validation.php");
include_once("../model/db.php");

$product_id = 0;

if (isset($_GET["product_id"]))
  $product_id = test_input($_GET["product_id"]);

$sql = 'delete from product where id=?';
$result = writeDatabase($sql, array($product_id));

echo "<script>alert('Xóa sản phẩm thành công!');</script>";

echo "<script>location.href = '../view/dashboard-product.php';</script>";
