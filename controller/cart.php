<?php
if (isset($_REQUEST["added_product_id"])) {
    session_start();

    if (isset($_SESSION["cart"]))
        $cart = $_SESSION["cart"];
    else
        // $cart="";
        $cart = array("0" => array());
    $product_id = $_REQUEST["added_product_id"];
    $category_id = $_REQUEST["category_id"];
    if (isset($cart[$product_id]))
        $cart[$product_id][2]++;
    else {
        include_once("../model/db.php");
        $sql = "select * from product where id=?";
        $result = readDatabase($sql, array($product_id));
        foreach ($result as $product) {
            $item = array($product[0], $product[2], 1, $product[3], $product[4]);
            $cart[$product_id] = $item;
        }
    }
    unset($cart["0"]);
    $_SESSION["cart"] = $cart;
    echo "<script>location.href = 'index.php';</script>";
}
