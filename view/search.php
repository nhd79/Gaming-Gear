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

  <!-- Remember to include jQuery :) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

  <!-- jQuery Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  <title>GG</title>
  <style>
    .product-grid {
      padding-bottom: 30px;
    }
  </style>
</head>

<body>
  <?php
  include_once("header.php");
  include_once("nav.php");
  ?>

  <!-- Category -->
  <div class="category-grid">
    <div class="category-text">Danh mục sản phẩm</div>
    <div class="category">
      <?php
      include_once("../controller/index-category.php")
      ?>
    </div>
    <div class="product-page-button">
      <a href="product.php">Xem tất cả sản phẩm</a>
    </div>
  </div>
  <?php
  include_once("../controller/search.php");
  ?>
  <?php
  include_once("footer.php");
  ?>
</body>

</html>