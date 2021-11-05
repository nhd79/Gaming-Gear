<!-- Navigation Bar -->
<nav>
    <a href="/">TRANG CHỦ</a>
    <a href="cart.php">GIỎ HÀNG</a>
    <?php
    if (isset($_SESSION["full_name"]))
        include_once("../controller/logout.php");
    else
        // echo '<a href="login-modal.php" rel="modal:open">ĐĂNG NHẬP</a> // Modal
        // <a href="signup-modal.php" rel="modal:open">ĐĂNG KÝ</a>'; // Modal
        echo '<a href="login.php">ĐĂNG NHẬP</a>
        <a href="signup.php">ĐĂNG KÝ</a>';
    ?>
</nav>