<!-- Navigation Bar -->
<nav>
    <a href="/">TRANG CHỦ</a>
    <a href="cart.php">GIỎ HÀNG</a>
    <?php
    if (isset($_SESSION["full_name"]))
        include_once("../controller/logout.php");
    else
        echo '    <a href="login-modal.php" rel="modal:open">ĐĂNG NHẬP</a>
        <a href="signup-modal.php" rel="modal:open">ĐĂNG KÝ</a>';
    echo $_SESSION["full_name"];
    ?>

</nav>