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
  <link rel="stylesheet" href="/css/product-page.css" />

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
        <?php include_once("../controller/product-category.php"); ?>
      </div>
    </div>
    <!-- Product -->
    <div class="product-page-product-grid">
      <?php include_once("../controller/product-product.php"); ?>
    </div>
  </div>
  </div>

  <?php
  include_once("footer.php");
  ?>
</body>

</html>