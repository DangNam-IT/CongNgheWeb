<?php
require_once '../MVC/models/ProductModel.php';

class ProductController {
    private $product;

    public function __construct($db) {
        $this->product = new Product($db);
    }

    public function index() {
        $result = $this->product->getAll();
        $products = $result->fetchAll(PDO::FETCH_ASSOC);
        require 'views/index.php';
    }

    public function add($data) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Gán dữ liệu từ form vào đối tượng product
            $this->product->name = $data['name'];
            $this->product->price = $data['price'];
    
            // Kiểm tra nếu việc tạo sản phẩm thành công, chuyển hướng về trang danh sách sản phẩm
            if ($this->product->create()) {
                header('Location: index.php');  // Quay lại trang index.php (danh sách sản phẩm)
                exit;  // Đảm bảo kết thúc mã để không thực hiện thêm nữa
            }
        } else {
            // Hiển thị form thêm sản phẩm
            include 'views/add.php';
        }
    }
    
    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Gán dữ liệu từ form vào đối tượng product và set id sản phẩm cần sửa
            $this->product->id = $id;
            $this->product->name = $_POST['name'];
            $this->product->price = $_POST['price'];
    
            // Kiểm tra nếu việc cập nhật sản phẩm thành công, chuyển hướng về trang danh sách sản phẩm
            if ($this->product->update()) {
                header('Location: index.php');  // Quay lại trang index.php (danh sách sản phẩm)
                exit;  // Đảm bảo kết thúc mã để không thực hiện thêm nữa
            }
        } else {
            // Nếu không phải POST, lấy thông tin sản phẩm theo ID
            $this->product->id = $id;
            $product = $this->product->getOne();  // Giả sử bạn có phương thức `getOne()` để lấy sản phẩm theo ID
    
            // Hiển thị form sửa sản phẩm
            include 'views/edit.php';
        }
    }
    
    public function delete($id) {
        // Xóa sản phẩm theo ID
        $this->product->id = $id;
        if ($this->product->delete()) {
            // Nếu xóa thành công, chuyển hướng về trang index (danh sách sản phẩm)
            header('Location: index.php');
            exit;  // Đảm bảo kết thúc mã để không thực hiện thêm nữa
        }
    }
    
}
?>
