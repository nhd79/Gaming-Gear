<?php

include_once("../model/db.php");

if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "select * from customer where user_name='" . $username . "' and password='" . $password . "'";
    $result = readDatabase($sql);
    if ($result->rowCount() > 0) {
        foreach ($result as $customer) {
            session_start();
            $_SESSION["full_name"] = $customer["full_name"];
            $_SESSION["id"] = $customer["id"];
            $_SESSION["email"] = $customer["email"];
            $_SESSION["phone"] = $customer["phone"];
            $_SESSION["address"] = $customer["address"];
            $_SESSION["image"] = $customer["image"];
        }
        echo "<script>location.href = '../view/index.php';</script>";
    } else {
        echo "<script>alert('Đăng nhập sai!');</script>";
        echo "<script>location.href = '../view/index.php';</script>";
    }
}
