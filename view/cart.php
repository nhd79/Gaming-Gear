<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="../css/search-css.css" />
  <link rel="stylesheet" href="../css/slides.css" />
  <link rel="stylesheet" href="../css/modal.css" />

  <link rel="stylesheet" href="../css/cart-page.css" />

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
  <form method="post" action="checkout.html">
    <div class="cart-page-grid">
      <div class="label">Sản phẩm</div>
      <div class="label">Tên sản phẩm</div>
      <div class="label">Số lượng</div>
      <div class="label">Đơn giá</div>
      <div class="label">Thành tiền</div>
      <div class="label"></div>
      <!--  -->
      <div>
        <img src="../images/AKKO 3087 Dragon Ball Z – Goku2.jpg" alt="banphim" class="cart-item-img" />
      </div>
      <div>Bàn phím Rapoo V500L Rainbow</div>
      <div>
        <input type="number" min="1" max="100" value="1" name="quantity" class="quantity" />
      </div>
      <div>490,000</div>
      <div>980,000</div>
      <div>
        <a href="#" class="garbage-button center">
          <img src="../images/icon-garbage-2.png" class="garbage-icon" /></a>
      </div>
      <div>
        <img src="../images/AKKO 3087 Dragon Ball Z – Goku2.jpg" alt="banphim" class="cart-item-img" />
      </div>
      <div>Bàn phím Rapoo V500L Rainbow</div>
      <div>
        <input type="number" min="1" max="100" value="1" name="quantity" class="quantity" />
      </div>
      <div>490,000</div>
      <div>980,000</div>
      <div>
        <a href="#" class="garbage-button center">
          <img src="../images/icon-garbage-2.png" class="garbage-icon" /></a>
      </div>
      <div>
        <img src="../images/AKKO 3087 Dragon Ball Z – Goku2.jpg" alt="banphim" class="cart-item-img" />
      </div>
      <div>Bàn phím Rapoo V500L Rainbow</div>
      <div>
        <input type="number" min="1" max="100" value="1" name="quantity" class="quantity" />
      </div>
      <div>490,000</div>
      <div>980,000</div>
      <div>
        <a href="#" class="garbage-button center">
          <img src="../images/icon-garbage-2.png" class="garbage-icon" /></a>
      </div>
      <div>
        <img src="../images/AKKO 3087 Dragon Ball Z – Goku2.jpg" alt="banphim" class="cart-item-img" />
      </div>
      <div>Bàn phím Rapoo V500L Rainbow</div>
      <div>
        <input type="number" min="1" max="100" value="1" name="quantity" class="quantity" />
      </div>
      <div>490,000</div>
      <div>980,000</div>
      <div>
        <a href="#" class="garbage-button center">
          <img src="../images/icon-garbage-2.png" class="garbage-icon" /></a>
      </div>
      <div>
        <img src="../images/AKKO 3087 Dragon Ball Z – Goku2.jpg" alt="banphim" class="cart-item-img" />
      </div>
      <div>Bàn phím Rapoo V500L Rainbow</div>
      <div>
        <input type="number" min="1" max="100" value="1" name="quantity" class="quantity" />
      </div>
      <div>490,000</div>
      <div>980,000</div>
      <div>
        <a href="#" class="garbage-button center">
          <img src="../images/icon-garbage-2.png" class="garbage-icon" /></a>
      </div>
      <!--  -->
      <div class="total">Tổng tiền: 490,000 VND</div>
      <div class="update">
        <a href="#" class="update-button">Cập nhật giỏ hàng</a>
      </div>
      <div class="checkout">
        <!-- <a href="checkout.html" class="checkout-button">Thanh toán</a> -->
        <button type="submit" class="checkout-button">Thanh toán</button>
      </div>
    </div>
  </form>
  <?php
  include_once("footer.php");
  ?>
</body>

</html>