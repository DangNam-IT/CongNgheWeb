<?php
    include '../CRUD/header.php';
    include '../CRUD/footer.php';
        // Dữ liệu mẫu
        session_start();
        if (!isset($_SESSION['products'])) {
            $_SESSION['products'] = [
                ['id' => 1, 'name' => 'Sản Phẩm 1', 'price' => 100],
                ['id' => 2, 'name' => 'Sản phẩm 2', 'price' => 200],
                ['id' => 3, 'name' => 'Sản phẩm 3', 'price' => 300],
            ];
        }

        $products = &$_SESSION['products'];

        // Xử lý thêm sản phẩm
        if (isset($_POST['action']) && $_POST['action'] === 'create') {
            $newProduct = [
                'id' => count($products) + 1,
                'name' => $_POST['name'],
                'price' => $_POST['price'],
            ];
            $products[] = $newProduct;
        }

        // Xử lý cập nhật sản phẩm
        if (isset($_POST['action']) && $_POST['action'] === 'update') {
            foreach ($products as &$product) {
                if ($product['id'] == $_POST['id']) {
                    $product['name'] = $_POST['name'];
                    $product['price'] = $_POST['price'];
                    break;
                }
            }
        }

        // Xử lý xóa sản phẩm
        if (isset($_GET['action']) && $_GET['action'] === 'delete') {
            $products = array_filter($products, function ($product) {
                return $product['id'] != $_GET['id'];
            });
        }
        ?>

        <!-- Form thêm hoặc cập nhật sản phẩm -->
        <form method="post" class="mb-4">
            <input type="hidden" name="action" value="<?= isset($_GET['edit']) ? 'update' : 'create' ?>">
            <?php
            $editProduct = null;
            if (isset($_GET['edit'])) {
                foreach ($products as $product) {
                    if ($product['id'] == $_GET['edit']) {
                        $editProduct = $product;
                        break;
                    }
                }
            }
            ?>
            <input type="hidden" name="id" value="<?= $editProduct['id'] ?? '' ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $editProduct['name'] ?? '' ?>" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Giá</label>
                <input type="number" class="form-control" id="price" name="price" value="<?= $editProduct['price'] ?? '' ?>" required>
            </div>
            <button type="submit" class="btn btn-primary"><?= isset($editProduct) ? 'Update' : 'Add' ?> Sản phẩm</button>
        </form>

        <!-- Bảng danh sách sản phẩm -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Hoạt động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td>
                        <a href="?edit=<?= $product['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="?action=delete&id=<?= $product['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
