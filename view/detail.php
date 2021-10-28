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
  <link rel="stylesheet" href="../css/product-page.css" />
  <link rel="stylesheet" href="../css/detail-page.css" />

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

  <div class="product-page-grid">
    <!-- Category -->
    <div class="product-page-category-grid">
      <div class="category-text center">Danh mục sản phẩm</div>
      <div class="center">
        <a href="product.php">Chuột</a>
        <a href="product.php">Bàn phím</a>
        <a href="product.php">Tai nghe</a>
        <a href="product.php">Ghế</a>
        <a href="product.php">Loa</a>
        <a href="product.php">Lót chuột</a>
      </div>
    </div>
    <!-- Product -->
    <div class="detail-grid center">
      <div class="product">
        <div>
          <img src="../images/Cougar Armor K Black.png" alt="banphim" class="product-img" />
        </div>
        <div class="product-name">Leopold FC660MPD Sweden White Case</div>
        <div class="product-price">2,750,000 VND</div>
        <div>Hãng sản xuất: Akko</div>
        <div>Tình trạng: Mới 100%</div>
        <div>Bảo hành: 12 Tháng</div>
        <div>Switch: Akko switch (Blue/Orange/Pink)</div>
        <div>
          <a href="#" class="add-to-cart-button">Thêm vào giỏ hàng</a>
        </div>
      </div>
    </div>
  </div>

  <?php
  include_once("footer.php");
  ?>
</body>

</html>