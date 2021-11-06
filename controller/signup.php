<?php

include_once("../model/db.php");
include_once("form-validation.php");

if (isset($_POST["signup-username"])) {
    $username = test_input($_POST["signup-username"]);
    $password = test_input($_POST["signup-password"]);
    $password_repeat = test_input($_POST["password-repeat"]);
    $full_name = test_input($_POST["fullname"]);
    $email = test_input($_POST["email"]);
    $address = test_input($_POST["address"]);
    $phone_number = test_input($_POST["phone-number"]);
    $gender = test_input($_POST["gender"]);

    if (!preg_match('/^[a-z0-9]{6,20}$/i', $username)) {
        echo "<script>alert('Tên đăng nhập chứa ít nhất 6 ký tự, chỉ chứa chữ cái và số!');</script>";
    } else if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&_])[A-Za-z\d$@$!%*?&_]{10,}$/', $password)) {
        echo "<script>alert('Mật khẩu chứa ít nhất 10 ký tự, ít nhất một chữ cái thường, một chữ in hoa, một ký tự đặc biệt');</script>";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Email không hợp lệ!');</script>";
    } else if (($full_name != "") && (!preg_match('/^([a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i
    ', $full_name))) {
        echo "<script>alert('Họ tên chỉ chứa chữ cái!');</script>";
    } else if (($address != "") && (!preg_match('/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i
    ', $address))) {
        echo "<script>alert('Địa chỉ chỉ chứa chữ cái và số!');</script>";
    } else if (($phone_number != "") && (!preg_match('/[0-9]/', $phone_number))) {
        echo "<script>alert('Số điện thoại chỉ chứa số!');</script>";
    } else {
        $sql = "select user_name from customer where 1";
        $result = readDatabase($sql, array());
        $exist = 0;
        foreach ($result as $customer) {
            if ($username == $customer["user_name"]) {
                $exist = 1;
            }
        }
        if ($exist != 1) {
            if ($password == $password_repeat) {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $sql = "insert into customer(user_name,password,full_name,address,phone,email,image,gender)
			    values(?,?,?,?,?,?,?,?)";
                if ($gender == "1") {
                    $avatar = 'https://avatars.dicebear.com/api/micah/' . $username . '.svg?mood[]=happy&mouth[]=smile&eyebrows[]=up&earringsProbability[]=0&hair[]=fonze';
                } else
                    $avatar = 'https://avatars.dicebear.com/api/micah/' . $username . '.svg?mood[]=happy&mouth[]=smile&eyebrows[]=eyelashesUp&earrings[]=stud&hair[]=full';
                $parameter = array($username, $hashed_password, $full_name, $address, $phone_number, $email, $avatar, $gender);
                writeDatabase($sql, $parameter);
                echo "<script>alert('Đăng ký thành công!');</script>";
                echo "<script>location.href = 'index.php';</script>";
            } else {
                echo "<script>alert('Mật khẩu xác nhận không đúng!');</script>";
            }
        } else {
            echo "<script>alert('Tài khoản đã tồn tại!');</script>";
        }
    }
}
