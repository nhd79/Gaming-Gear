<?php

include_once("../model/db.php");

if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "select * from customer where user_name='" . $username . "' and password='" . $password . "'";
    $result = readDatabase($sql);
    if ($result->rowCount() > 0) {
        foreach ($result as $customer) {
            $_SESSION["full_name"] = $customer["full_name"];
            $_SESSION["id"] = $customer["id"];
            $_SESSION["email"] = $customer["email"];
            $_SESSION["phone"] = $customer["phone"];
            $_SESSION["address"] = $customer["address"];
            $_SESSION["image"] = $customer["image"];
        }
        echo "<script>location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Sai thông tin tài khoản hoặc mật khẩu!');</script>";
    }
}
