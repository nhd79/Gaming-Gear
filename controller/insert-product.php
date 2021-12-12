<?php
if (isset($_POST["submit"])) {

    $name = test_input($_POST["name"]);
    $category = test_input($_POST["category"]);
    $price = test_input($_POST["price"]);
    $description = test_input($_POST["description"]);
    $description_2 = test_input($_POST["description_2"]);
    $description_3 = test_input($_POST["description_3"]);
    $description_4 = test_input($_POST["description_4"]);
    $description_5 = test_input($_POST["description_5"]);

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
                    $sql = 'insert into product(name,category_id,price,description,description_2,description_3,description_4,description_5,image)
                    values(?,?,?,?,?,?,?,?,?)';
                    $parameter = array($name, $category, $price, $description, $description_2, $description_3, $description_4, $description_5, $fileName);
                    writeDatabase($sql, $parameter);

                    echo "<script>alert('Thêm sản phẩm thành công!');</script>";
                } else
                    echo "<script>alert('Đã có lỗi xảy ra!');</script>";
            } else
                echo "<script>alert('Chỉ cho phép định dạng JPG, JPEG, PNG, GIF, PDF!');</script>";
        } else
            echo "<script>alert('File " . $fileName . " đã tồn tại');</script>";
    } else
        echo "<script>alert('Hãy chọn file để tải lên!');</script>";
}
