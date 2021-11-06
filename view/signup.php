<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="stylesheet" href="/css/modal.css" />
    <link rel="stylesheet" href="/css/login-signup.css" />

    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <title>GG</title>
</head>

<body>
    <?php
    include_once("../controller/signup.php");
    ?>
    <!-- Signup Modal -->
    <div class="signup">
        <div class="text">Đăng ký</div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="login-info">
                <div>
                    <input type="text" name="signup-username" id="signup-username" placeholder="Tên đăng nhập..." value="<?php if (isset($username)) echo $username; ?>" required />
                </div>
                <div>
                    <input type="password" name="signup-password" id="signup-password" placeholder="Mật khẩu..." value="<?php if (isset($password)) echo $password; ?>" required />
                </div>
                <div>
                    <input type="password" name="password-repeat" id="password-repeat" placeholder="Xác nhận mật khẩu..." value="<?php if (isset($password_repeat)) echo $password_repeat; ?>" required />
                </div>
                <div>
                    <input type="text" name="email" id="email" placeholder="Email..." value="<?php if (isset($email)) echo $email; ?>" required />
                </div>
            </div>
            <div class="personal-info">
                <div>
                    <input type="text" name="fullname" id="fullname" placeholder="Họ tên..." value="<?php if (isset($full_name)) echo $full_name; ?>" />
                </div>
                <div>
                    <input type="text" name="address" id="address" placeholder="Địa chỉ..." value="<?php if (isset($address)) echo $address; ?>" />
                </div>
                <div class="phone">
                    <input type="text" name="phone-number" id="phone-number" placeholder="Số điện thoại..." value="<?php if (isset($phone_number)) echo $phone_number; ?>" />
                </div>
                <div class="gender">
                    <div>
                        <label for="gender">Giới tính:</label>
                    </div>
                    <div>
                        <input type="radio" id="male" name="gender" value="1">&nbsp;&nbsp;Nam
                    </div>
                    <div>
                        <input type="radio" id="female" name="gender" value="2">&nbsp;&nbsp;Nữ
                    </div>
                </div>
            </div>
            <div class="button">
                <button type="submit" name="signup-button">Đăng ký</button>
            </div>
        </form>
        <div>
            Đã có tài khoản?&nbsp;
            <a href="login.php">Đăng nhập tại đây</a>
        </div>
    </div>
</body>