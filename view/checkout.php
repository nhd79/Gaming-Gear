<?php
include_once('../controller/header-session-login.php');
?>
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
      <?php
      include_once("../controller/checkout-cart-detail.php")
      ?>
    </div>
    <?php
    include_once("../controller/checkout.php")
    ?>
  </div>
  <?php
  include_once("footer.php");
  ?>
</body>

</html>