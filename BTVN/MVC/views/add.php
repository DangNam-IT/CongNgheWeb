<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Thêm sản phẩm mới</h1>
    <form action="index.php?controller=product&action=add" method="POST">
        <div class="form-group">
            <label for="name">Tên sản phẩm</label>
            <input type="text" name="name" id="name" class="form-control" required >
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Lưu</button>
        <a href="index.php" class="btn btn-secondary mt-3">Hủy</a>
    </form>
</div>
</body>
</html>
