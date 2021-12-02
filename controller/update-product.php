<?php
include_once("form-validation.php");

$product_id = 0;

if (isset($_GET["product_id"]))
    $product_id = test_input($_GET["product_id"]);

$sql = 'select * from product where id=?';
$result = readDatabase($sql, array($product_id));

foreach ($result as $product) {
    echo '
  <form method="post" enctype="multipart/form-data" action="';
    echo htmlspecialchars($_SERVER['PHP_SELF']);
    echo '">
  <div class="update-product-grid">
      <div class="product-image" >
        <img src="/images/' . $product[4] . '" alt="Product Image" />
      </div>
      <div>
          Tên sản phẩm:
      </div>
      <div>
          <input type="text" name="name" id="name" value="' . $product[2] . '" />
      </div>
      <div>
          Loại sản phẩm:
      </div>
      <div>
          <select name="category">
              <option value="1"';
    if ($product[1] == 1) echo 'selected="selected"';
    echo '>Bàn phím</option>
              <option value="2"';
    if ($product[1] == 2) echo 'selected="selected"';
    echo '>Chuột</option>
              <option value="3"';
    if ($product[1] == 3) echo 'selected="selected"';
    echo '>Tai nghe</option>
              <option value="4"';
    if ($product[1] == 4) echo 'selected="selected"';
    echo '>Ghế</option>
              <option value="5"';
    if ($product[1] == 5) echo 'selected="selected"';
    echo '>Loa</option>
              <option value="6"';
    if ($product[1] == 6) echo 'selected="selected"';
    echo '>Lót chuột</option>
          </select>
      </div>
      <div>
          Đơn giá:
      </div>
      <div>
          <input type="number" name="price" id="price" value="' . $product[3] . '" />
      </div>
      <div>
          Mô tả:
      </div>
      <div>
          <input type="text" name="description" id="description" value="' . $product[5] . '" />
      </div>
      <div>
          Mô tả 2:
      </div>
      <div>
          <input type="text" name="description_2" id="description_2"value="' . $product[6] . '" />
      </div>
      <div>
          Mô tả 3:
      </div>
      <div>
          <input type="text" name="description_3" id="description_3" value="' . $product[7] . '"/>
      </div>
      <div>
          Mô tả 4:
      </div>
      <div>
          <input type="text" name="description_4" id="description_4" value="' . $product[8] . '"/>
      </div>
      <div>
          Mô tả 5:
      </div>
      <div>
          <input type="text" name="description_5" id="description_5" value="' . $product[9] . '"/>
      </div>
      <div class="product-img">
          <label class="img-label">
              <input type="file" name="file" id="file" class="img-input" />
              <span class="text">Chọn ảnh sản phẩm&ensp;</span></label>
      </div>
      <div class="submit">
          <button type="submit" name="submit" class="order-button">
              Sửa thông tin sản phẩm
          </button>
      </div>
  </div>
  <input type="hidden" id="product_id" name="product_id" value="' . $product_id . '">
</form>
      ';
}

if (isset($_POST["submit"])) {

    $name = test_input($_POST["name"]);
    $category = test_input($_POST["category"]);
    $price = test_input($_POST["price"]);
    $description = test_input($_POST["description"]);
    $description_2 = test_input($_POST["description_2"]);
    $description_3 = test_input($_POST["description_3"]);
    $description_4 = test_input($_POST["description_4"]);
    $description_5 = test_input($_POST["description_5"]);
    $product_id = test_input($_POST["product_id"]);

    // File upload path
    $targetDir = "../images/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (!file_exists($targetFilePath)) {
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                    $sql = 'update product set name=?,category_id=?,price=?,description=?,description_2=?,description_3=?,description_4=?,description_5=?,image=? where id=?';
                    $parameter = array($name, $category, $price, $description, $description_2, $description_3, $description_4, $description_5, $fileName, $product_id);
                    writeDatabase($sql, $parameter);

                    echo "<script>alert('Sửa thông tin sản phẩm thành công!');</script>";
                    echo "<script>location.href = '../view/update-product.php?product_id=" . $product_id . "';</script>";
                } else
                    echo "<script>alert('Đã có lỗi xảy ra!');</script>";
            } else
                echo "<script>alert('Chỉ cho phép định dạng JPG, JPEG, PNG, GIF, PDF!');</script>";
        } else
            echo "<script>alert('File " . $fileName . " đã tồn tại');</script>";
    } else {
        $sql = 'update product set name=?,category_id=?,price=?,description=?,description_2=?,description_3=?,description_4=?,description_5=? where id=?';
        $parameter = array($name, $category, $price, $description, $description_2, $description_3, $description_4, $description_5, $product_id);
        writeDatabase($sql, $parameter);

        echo "<script>alert('Sửa thông tin sản phẩm thành công!');</script>";
        echo "<script>location.href = '../view/update-product.php?product_id=" . $product_id . "';</script>";
    }
}
