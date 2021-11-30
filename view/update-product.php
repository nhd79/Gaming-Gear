<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/dashboard-styles.css" />

  <!-- Remember to include jQuery :) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

  <!-- jQuery Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

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

      <!-- Product -->
      <?php
      include_once("../controller/update-product.php")
      ?>
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