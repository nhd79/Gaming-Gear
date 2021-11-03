<?php
if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
    if (count($cart) > 0) {
        $full_name = "";
        $user_id = "";
        $email = "";
        $phone = "";
        $address = "";
        if (isset($_POST["order"])) {
            $full_name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone-number"];
            $address = $_POST["address"];
            $payment_method = $_POST["payment"];
            if (isset($_SESSION["id"])) {
                $user_id = $_SESSION["id"];
            } else {
                $user_id = 0;
            }
            if (($full_name != "") && ($email != "") && ($phone != "") && ($address != "")) {
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $order_date = date("Y-m-d H:i:s");

                $sql = "insert into `order`(order_date,customer_id,full_name,address,phone,email,status,payment_method) values(?,?,?,?,?,?,?,?)";
                $parameter = array($order_date, $user_id, $full_name, $address, $phone, $email, 1, $payment_method);
                writeDatabase($sql, $parameter);

                $result = readDatabase("select max(id)as new_order from `order`", array());
                foreach ($result as $order) {
                    $order_id = $order[0];
                    $sql = "insert into order_detail(id,product_id,quantity,price,total) values";
                    foreach ($cart as $product)
                        $sql = $sql . "(" . $order_id . "," . $product[0] . "," . $product[2] . "," . $product[3] . "," . ($product[2] * $product[3]) . "),";
                    $sql = substr($sql, 0, strlen($sql) - 1);
                    writeDatabase($sql, array());
                    unset($_SESSION["cart"]);
                    echo "<script>alert('Đặt hàng thành công!')</script>";
                    echo "<script>location.href = 'index.php';</script>";
                    /*$msg="Số đơn hàng: ".$order_id."\nNgày đặt hàng: ".$ngayorder."\nMã khách hàng: ".$makh."\nHọ tên khách hàng: ".$hoten."\nĐịa chỉ: ".$diachi."\nSố điện thoại: ".$dienthoai."\n";
                    $msg= wordwrap($msg,70);
                    mail("hoangduy791999@gmail.com","Đơn hàng gaming gear số ".$order_id,$msg);*/
                }
            } else {
                echo "<script>alert('Vui lòng nhập thông tin khách hàng!')</script>";
            }
        } else if (isset($_SESSION["id"])) {
            $full_name = $_SESSION["full_name"];
            $user_id = $_SESSION["id"];
            $email = $_SESSION["email"];
            $phone = $_SESSION["phone"];
            $address = $_SESSION["address"];
        }
    } else {
        echo "<script>location.href = 'index.php';</script>";
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="checkout-information">
        <div class="text">Thông tin giao hàng</div>
        <div>
            <input type="text" name="name" id="name" placeholder="Họ và tên" value="<?php echo $full_name; ?>" />
        </div>
        <div>
            <input type="text" name="address" id="address" placeholder="Địa chỉ" value="<?php echo $address; ?>" />
        </div>
        <div>
            <input type="text" name="phone-number" id="phone-number" placeholder="Số điện thoại" value="<?php echo $phone; ?>" />
        </div>
        <div>
            <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
        <div>
            <select name="payment">
                <option value="0">Chọn phương thức thanh toán</option>
                <option value="COD">Tiền mặt khi nhận hàng</option>
                <option value="OB">Online Banking</option>
            </select>
        </div>
        <div>
            <button type="submit" name="order" class="order-button">Đặt hàng</button>
        </div>
    </div>
</form>