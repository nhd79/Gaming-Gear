<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/dashboard-styles.css" />
  <title>Admin Dashboard</title>
</head>

<body onload="setColor()">
  <div class="container">
    <?php
    include_once("dashboard-navigation.php");
    ?>

    <!-- Main -->
    <div class="main">
      <?php
      include_once("dashboard-topbar.php");
      ?>

      <div class="details">
        <!-- order details list -->
        <div class="recentOrders">
          <div class="cardHeader">
            <h2>Đơn hàng gần đây</h2>
            <a href="#" class="btn">Xem tất cả</a>
          </div>
          <table>
            <thead>
              <tr>
                <td>Tên</td>
                <td>Giá</td>
                <td>Hình thức thanh toán</td>
                <td>Trạng thái</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Star Refrigerator</td>
                <td>$1200</td>
                <td>Online Banking</td>
                <td><span class="status delivered">Đã giao hàng</span></td>
              </tr>
              <tr>
                <td>Window Coolers</td>
                <td>$110</td>
                <td>COD</td>
                <td><span class="status pending">Đang xử lý</span></td>
              </tr>
              <tr>
                <td>Speakers</td>
                <td>$620</td>
                <td>Online Banking</td>
                <td><span class="status return">Trả hàng</span></td>
              </tr>
              <tr>
                <td>HP Laptop</td>
                <td>$110</td>
                <td>COD</td>
                <td><span class="status inprogress">Đang giao hàng</span></td>
              </tr>
              <tr>
                <td>Apple Watch</td>
                <td>$1200</td>
                <td>Online Banking</td>
                <td><span class="status delivered">Đã giao hàng</span></td>
              </tr>
              <tr>
                <td>Wall Fan</td>
                <td>$110</td>
                <td>Online Banking</td>
                <td><span class="status pending">Đang xử lý</span></td>
              </tr>
              <tr>
                <td>Adidas Shoes</td>
                <td>$620</td>
                <td>Online Banking</td>
                <td><span class="status return">Trả hàng</span></td>
              </tr>
              <tr>
                <td>Denim Shirts</td>
                <td>$110</td>
                <td>COD</td>
                <td><span class="status inprogress">Đang giao hàng</span></td>
              </tr>
              <tr>
                <td>Casual Shoes</td>
                <td>$575</td>
                <td>Online Banking</td>
                <td><span class="status pending">Đang xử lý</span></td>
              </tr>
              <tr>
                <td>Wall Fan</td>
                <td>$110</td>
                <td>Online Banking</td>
                <td><span class="status pending">Đang xử lý</span></td>
              </tr>
              <tr>
                <td>Denim Shirts</td>
                <td>$110</td>
                <td>COD</td>
                <td><span class="status inprogress">Đang giao hàng</span></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>
    // MenuToggle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector(".navigation");
    let main = document.querySelector(".main");

    toggle.onclick = function() {
      navigation.classList.toggle("active");
      main.classList.toggle("active");
    };
    // add hovered class in selected list item
    let list = document.querySelectorAll(".navigation li");

    function activeLink() {
      list.forEach((item) => item.classList.remove("hovered"));
      this.classList.add("hovered");
    }
    list.forEach((item) => item.addEventListener("mouseover", activeLink));
  </script>

  <button class="red" onclick="changeColor('#ec1933')"></button>
  <button class="blue" onclick="changeColor('#287bff')"></button>
</body>

</html>