<?php include 'Loadimages.php';
$flowers = isset($_SESSION['flowers']) ? $_SESSION['flowers'] : [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách các loại hoa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #4CAF50;
        }

        .flower-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .flower-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .flower-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .flower-image img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .flower-content {
            padding: 15px;
        }

        .flower-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .flower-description {
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }

        .flower-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .flower-actions a {
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .flower-actions a:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Danh sách các loại hoa</h1>
    <div class="flower-container">
        <?php foreach ($flowers as $flower): ?>
        <div class="flower-card">
            <div class="flower-image">
                <img src="<?php echo htmlspecialchars($flower['image']); ?>" alt="<?php echo htmlspecialchars($flower['name']); ?>">
            </div>
            <div class="flower-content">
                <h2 class="flower-title"><?php echo htmlspecialchars($flower['name']); ?></h2>
                <p class="flower-description"><?php echo htmlspecialchars($flower['description']); ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
