<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Danh sách sản phẩm</h1>
    <a href="index.php?controller=product&action=add" class="btn btn-primary mb-3">Thêm sản phẩm</a>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= number_format($product['price'], 2) ?> VNĐ</td>
                <td>
                    <a href="index.php?controller=product&action=edit&id=<?= $product['id'] ?>" class="btn btn-warning btn-sm me-2">Sửa</a>
                    <a href="index.php?controller=product&action=delete&id=<?= $product['id'] ?>" class="btn btn-danger btn-sm"
                       onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
