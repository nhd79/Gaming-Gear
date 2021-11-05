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

if (isset($_POST["submit"])) {

    // File upload path
    $targetDir = "../images/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (!file_exists($targetFilePath)) {
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                    // Insert image file name into database
                    $sql = 'update customer set image=? where id=?';
                    $parameter = array($fileName, $user_id);
                    writeDatabase($sql, $parameter);
                    echo "<script>alert('Đổi ảnh đại diện thành công!');</script>";
                    // Retrieve new image 
                    $sql = 'select image from customer where id =?';
                    $result = readDatabase($sql, array($user_id));
                    foreach ($result as $user) {
                        $image = $user[0];
                    }
                } else
                    echo "<script>alert('Đã có lỗi xảy ra!');</script>";
            } else
                echo "<script>alert('Chỉ cho phép định dạng JPG, JPEG, PNG, GIF, PDF!');</script>";
        } else
            echo "<script>alert('File " . $fileName . " đã tồn tại');</script>";
    } else
        echo "<script>alert('Hãy chọn file để tải lên!');</script>";
}


if (isset($_POST["name"])) {
    $full_name = test_input($_POST["name"]);
    $address = test_input($_POST["address"]);
    $phone = test_input($_POST["phone-number"]);
    $email = test_input($_POST["email"]);

    if (($full_name != "") && (!preg_match('/^([a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i
    ', $full_name))) {
        echo "<script>alert('Họ tên chỉ chứa chữ cái!');</script>";
    } else if (($address != "") && (!preg_match('/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i
    ', $address))) {
        echo "<script>alert('Địa chỉ chỉ chứa chữ cái và số!');</script>";
    } else if (($phone != "") && (!preg_match('/^[0-9 ]+$/', $phone))) {
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
