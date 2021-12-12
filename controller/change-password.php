<?php
if (isset($_POST["submit"])) {
    $old_password = test_input($_POST["old-password"]);
    $new_password = test_input($_POST["new-password"]);
    $confirm_password = test_input($_POST["confirm-password"]);

    $sql = "select * from customer where user_name = ?";
    $result = readDatabase($sql, array('admin123'));

    foreach ($result as $admin) {
        if (password_verify($old_password, $admin["password"])) {
            if ($new_password == $confirm_password) {
                if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&_])[A-Za-z\d$@$!%*?&_]{10,}$/', $new_password)) {
                    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                    $sql = 'update customer set password=? where user_name=?';
                    $parameter = array($hashed_password, 'admin123');
                    writeDatabase($sql, $parameter);
                    echo "<script>alert('Đổi mật khẩu thành công!');</script>";
                } else echo "<script>alert('Mật khẩu chứa ít nhất 10 ký tự, ít nhất một chữ cái thường, một chữ in hoa, một ký tự đặc biệt');</script>";
            } else echo "<script>alert('Xác nhận mật khẩu sai!');</script>";
        } else echo "<script>alert('Sai mật khẩu cũ!');</script>";
    }
}
