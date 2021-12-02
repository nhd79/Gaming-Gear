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
</head>

<body>
  <?php
  include_once("header.php");
  include_once("nav.php");
  // include_once("../controller/login.php"); // Use this when using modals
  // include_once("../controller/signup.php");
  ?>

  <!-- Slideshow -->
  <div class="slideshow-container">
    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <img src="/images/slide4.jpg" width="100%" loading="lazy" alt="slideshows" />
      <div class="slide-text">Epic Gear</div>
      <a class="banner-button" href="product.php">Xem sản phẩm</a>
    </div>
    <div class="mySlides fade" style="display: none">
      <img src="/images/slide4.jpg" width="100%" loading="lazy" alt="slideshows" />
      <div class="slide-text">Epic Gear</div>
      <a class="banner-button" href="product.php">Xem sản phẩm</a>
    </div>
    <div class="mySlides fade" style="display: none">
      <img src="/images/slide4.jpg" width="100%" loading="lazy" alt="slideshows" />
      <div class="slide-text">Epic Gear</div>
      <a class="banner-button" href="product.php">Xem sản phẩm</a>
    </div>
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <!-- The dots/circles -->
    <div style="text-align: center">
      <span class="dot active dot1" onclick="currentSlide(1)"></span>
      <span class="dot dot2" onclick="currentSlide(2)"></span>
      <span class="dot dot3" onclick="currentSlide(3)"></span>
    </div>
  </div>
  <script src="/js/slides.js"></script>
  <!-- News -->
  <div class="news-grid" style="position: relative; top: -4px">
    <div class="news-1">1</div>
    <div class="news-2">2</div>
    <div class="news-3">3</div>
    <div class="news-4">4</div>
    <div class="news-5">5</div>
    <div class="news-6">6</div>
  </div>
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
  <!-- Product -->
  <div class="product-grid">
    <?php
    include_once("../controller/index-product.php")
    ?>
  </div>
  <div class="browse-all">
    <a href="product.php">Xem tất cả sản phẩm</a>
  </div>
  <?php
  include_once("footer.php");
  ?>
</body>

</html>