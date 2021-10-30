<?php

include_once("../model/db.php");
include_once("form-validation.php");

if (isset($_POST["username"])) {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    $sql = "select * from customer where user_name='" . $username . "'";
    $result = readDatabase($sql);
    if ($result->rowCount() > 0) {
        foreach ($result as $customer) {
            if (password_verify($password, $customer["password"])) {
                $_SESSION["full_name"] = $customer["full_name"];
                $_SESSION["id"] = $customer["id"];
                $_SESSION["email"] = $customer["email"];
                $_SESSION["phone"] = $customer["phone"];
                $_SESSION["address"] = $customer["address"];
                $_SESSION["image"] = $customer["image"];
            } else {
                echo "<script>alert('Sai mật khẩu!');</script>";
            }
        }
        echo "<script>alert('Đăng nhập thành công!');</script>";
        echo "<script>location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Sai thông tin tài khoản!');</script>";
    }
}
