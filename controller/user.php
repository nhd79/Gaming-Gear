<?php
include_once("form-validation.php");

if (isset($_SESSION["id"])) {
    $full_name = $_SESSION["full_name"];
    $user_id = $_SESSION["id"];
    $email = $_SESSION["email"];
    $phone = $_SESSION["phone"];
    $address = $_SESSION["address"];
    $image = $_SESSION["image"];
}

if (isset($_POST["user-img"])) {
    // $file = test_input($_POST["user-img"]);
    $file = $_FILES["user-img"]["name"];
    $sql = 'update customer set image=? where id=?';
    $parameter = array($file, $user_id);
    writeDatabase($sql, $parameter);
    move_uploaded_file($_FILES["file"]["tmp_name"], '/images/' . $file);
}


if (isset($_POST["name"])) {
    $full_name = test_input($_POST["name"]);
    $address = test_input($_POST["address"]);
    $phone = test_input($_POST["phone-number"]);
    $email = test_input($_POST["email"]);

    if (!preg_match('/^([a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i
    ', $full_name)) {
        echo "<script>alert('Họ tên chỉ chứa chữ cái!');</script>";
    } else if (!preg_match('/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i
    ', $address)) {
        echo "<script>alert('Địa chỉ chỉ chứa chữ cái và số!');</script>";
    } else if (!preg_match('/^[0-9 ]+$/', $phone)) {
        echo "<script>alert('Số điện thoại chỉ chứa số!');</script>";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Email không hợp lệ!');</script>";
    } else {
        $sql = 'update customer set full_name=?,address=?,phone=?,email=? where id=?';
        $parameter = array($full_name, $address, $phone, $email, $user_id);
        writeDatabase($sql, $parameter);

        echo "<script>alert('Sửa thông tin thành công!');</script>";
    }
}
