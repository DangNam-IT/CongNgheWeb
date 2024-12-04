<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="card-title">Danh sách sản phẩm</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <a href="index.php?controller=product&action=add" class="btn btn-success">
                            + Thêm sản phẩm
                        </a>
                    </div>
                    <table class="table table-striped text-center">
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
                                    <a href="index.php?controller=product&action=edit&id=<?= $product['id'] ?>" 
                                       class="btn btn-sm btn-warning me-2">Sửa</a>
                                    <a href="index.php?controller=product&action=delete&id=<?= $product['id'] ?>" 
                                       class="btn btn-sm btn-danger"
                                       onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-muted text-center">
                    Tổng số sản phẩm: <?= count($products) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
