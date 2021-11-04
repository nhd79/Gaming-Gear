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
  <link rel="stylesheet" href="/css/user-page.css" />

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
  <?php
  include_once("../controller/user.php");
  ?>
  <!--  -->
  <div class="user-page-grid">
    <form method="post" enctype="multipart/form-data" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>>
      <div class="profile-picture">
        <div>
          <img src="
          <?php
          $avatar = "../images/" . $image;
          if (file_exists($avatar))
            echo $avatar;
          else echo $image; ?>
          " alt="User's picture" class="user-img" width="80%" />
        </div>
        <div>
          <label class="img-label">
            <input type="file" name="file" class="img-input" />
            <span class="text">Chọn ảnh đại diện&ensp;</span></label>
          <script>
            //Name appear
            $(".img-input").on("change", function() {
              var fileName = $(this).val().split("\\").pop();
              $(this)
                .siblings(".text")
                .html(fileName + "&ensp;");
            });
          </script>
        </div>
        <div class="col-lg-11">
          <button type="submit" name="submit" class="change-picture-button">
            Đổi ảnh đại diện
          </button>
        </div>
      </div>
    </form>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
      <div class="customer-information">
        <div class="text">Thông tin khách hàng</div>
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
          <button type="submit" class="order-button">
            Cập nhật thông tin
          </button>
        </div>
      </div>
    </form>
  </div>

  <?php
  include_once("footer.php");
  ?>
</body>

</html>