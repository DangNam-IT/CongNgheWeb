<?php
require_once '../MVC/models/Database.php';
require_once '../MVC/controllers/ProductController.php';

// Tạo đối tượng Database và kết nối
$database = new Database();
$db = $database->connect();

// Tạo đối tượng controller và truyền đối số $db vào
$controller = new ProductController($db);

$action = $_GET['action'] ?? 'index';  // Mặc định là trang index
$id = $_GET['id'] ?? null;  // Lấy id nếu có

if ($action === 'add') {
    // Thực hiện hành động thêm
    $controller->add($_POST);
} elseif ($action === 'edit') {
    // Thực hiện hành động sửa
    $controller->edit($id);
} elseif ($action === 'delete') {
    // Thực hiện hành động xóa
    $controller->delete($id);
} else {
    // Hiển thị danh sách sản phẩm
    $controller->index();
}
?>
