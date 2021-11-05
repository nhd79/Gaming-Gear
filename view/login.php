<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/styles.css" />
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
    include_once("../controller/login.php");
    ?>
    <!-- Login -->
    <div class="login">
        <div class="text">Đăng nhập</div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div>
                <input type="text" name="username" id="username" placeholder="Tên đăng nhập..." required />
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Mật khẩu..." required />
            </div>
            <div>
                <button type="submit" name="login-button">Đăng nhập</button>
            </div>
        </form>
        <div>
            <a href="forgot-password.php">Quên mật khẩu?</a>
        </div>
        <div>
            Chưa có tài khoản?&nbsp;
            <a href="signup.php">Đăng ký tại đây</a>
        </div>
        <!-- <a href="#" rel="modal:close">Close</a> -->
    </div>
</body>