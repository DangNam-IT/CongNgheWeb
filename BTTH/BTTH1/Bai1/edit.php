<?php
session_start();

// Kiểm tra xem đã có mảng flowers trong session chưa
if (!isset($_SESSION['flowers'])) {
    $_SESSION['flowers'] = [];
}

// Lấy index hoa từ URL
if (isset($_GET['index']) && is_numeric($_GET['index'])) {
    $index = $_GET['index']; //nhận chỉ số hoa cẩn sửa từ URL
    $flower = $_SESSION['flowers'][$index];
} else {
    // Nếu không có index, chuyển về trang danh sách
    header("Location: admin.php");
    exit();
}

// Cập nhật thông tin hoa
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    // Cập nhật thông tin vào mảng flowers
    $_SESSION['flowers'][$index] = [
        'name' => $name,
        'description' => $description,
        'image' => $image
    ];

    // Quay lại trang admin.php sau khi cập nhật
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin hoa</title>
</head>

<body>
    <h1>Sửa thông tin hoa</h1>
    <form action="edit.php?index=<?php echo $index; ?>" method="post">
        <label for="name">Tên hoa:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($flower['name']); ?>"
            required><br><br>

        <label for="description">Mô tả:</label>
        <input type="text" id="description" name="description"
            value="<?php echo htmlspecialchars($flower['description']); ?>" required><br><br>

        <label for="image">Ảnh:</label>
        <input type="text" id="image" name="image" value="<?php echo htmlspecialchars($flower['image']); ?>"
            required><br><br>

        <input type="submit" value="Cập nhật">
    </form>
    <a href="admin.php">Quay lại trang quản lý</a>
</body>

</html>