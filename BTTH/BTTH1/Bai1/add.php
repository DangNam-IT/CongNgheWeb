<?php
session_start();
require 'Loadimages.php';
// Xử lý thêm sản phẩm
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy giá trị từ form
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Xử lý upload ảnh
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = 'images/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image); // Di chuyển ảnh vào thư mục uploads
    } else {
        $image = ''; // Nếu không có ảnh, sử dụng giá trị rỗng
    }

    // Gọi hàm add() để thêm hoa
    add($name, $description, $image);

    // Sau khi thêm, điều hướng về trang index.php
    header("Location: admin.php");
    exit();
}
?>

<h2>Thêm Hoa mới</h2>
<form method="POST" action="add.php" enctype="multipart/form-data">
    <label for="name">Tên Hoa:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="description">Mô tả:</label><br>
    <textarea id="description" name="description" required></textarea><br><br>

    <label for="image">Hình ảnh:</label><br>
    <input type="file" id="image" name="image" required><br><br>

    <button type="submit">Thêm</button>
</form>