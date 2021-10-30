<?php

include_once("../model/db.php");
include_once("form-validation.php");

if (isset($_POST["signup-username"])) {
    $sql = "select user_name from customer where 1";
    $result = readDatabase($sql);
    $exist = 0;
    foreach ($result as $customer) {
        if ($_POST["signup-username"] == $customer["user_name"]) {
            $exist = 1;
        }
    }
    if ($exist != 1) {
        if ($_POST["signup-password"] == $_POST["password-repeat"]) {
            $hashed_password = password_hash($_POST["signup-password"], PASSWORD_DEFAULT);
            $sql = "insert into customer(user_name,password,full_name,address,phone,email,avatar)
			values('" . $_POST["signup-username"] . "','" . $hashed_password . "','" . $_POST["fullname"] . "','"
                . $_POST["address"] . "','" . $_POST["phone-number"] . "','" . $_POST["email"] . "','user.png')";
            writeDatabase($sql);
            echo "<script>alert('Đăng ký thành công!');</script>";
            // echo "<script>location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Mật khẩu xác nhận không đúng!');</script>";
            // echo "<script>location.href = 'index.php';</script>";
        }
    } else {
        echo "<script>alert('Tài khoản đã tồn tại!');</script>";
        // echo "<script>location.href = 'index.php';</script>";
    }
}
