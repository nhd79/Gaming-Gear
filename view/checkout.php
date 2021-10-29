<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/styles.css" />
  <link rel="stylesheet" href="/css/search-css.css" />
  <link rel="stylesheet" href="/css/slides.css" />
  <link rel="stylesheet" href="/css/modal.css" />
  <link rel="stylesheet" href="/css/checkout-page.css" />

  <!-- Remember to include jQuery :) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

  <!-- jQuery Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  <title>GG</title>
</head>

<body>
  <?php
  include_once("header.php");
  include_once("nav.php");
  ?>
  <!--  -->
  <div class="checkout-page-grid">
    <div class="order-summary">
      <div>
        <img src="/images/AKKO 3087 Dragon Ball Z – Goku2.jpg" alt="banphim" class="cart-item-img" />
        <div class="quantity">1</div>
      </div>
      <div>Bàn phím Rapoo V500L Rainbow</div>
      <div>490,000</div>
      <div>
        <img src="/images/AKKO 3087 Dragon Ball Z – Goku2.jpg" alt="banphim" class="cart-item-img" />
        <div class="quantity">2</div>
      </div>
      <div>Bàn phím Rapoo V500L Rainbow</div>
      <div>490,000</div>
      <div class="total">Tổng tiền: 490,000 VND</div>
    </div>
    <form method="post" action="index.html">
      <div class="checkout-information">
        <div class="text">Thông tin giao hàng</div>
        <div>
          <input type="text" name="name" id="name" placeholder="Họ và tên" />
        </div>
        <div>
          <input type="text" name="address" id="address" placeholder="Địa chỉ" />
        </div>
        <div>
          <input type="text" name="phone-number" id="phone-number" placeholder="Số điện thoại" />
        </div>
        <div>
          <input type="text" name="email" id="email" placeholder="Email" />
        </div>
        <div>
          <select name="payment">
            <option>Chọn phương thức thanh toán</option>
            <option value="COD">Tiền mặt khi nhận hàng</option>
            <option value="Online-Banking">Online Banking</option>
          </select>
        </div>
        <div>
          <button type="submit" class="order-button">Đặt hàng</button>
        </div>
      </div>
    </form>
  </div>
  <?php
  include_once("footer.php");
  ?>
</body>

</html>