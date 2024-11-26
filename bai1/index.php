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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f0f8ff, #e6e6fa);
            color: #333;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #4b0082;
        }

        .flower_container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .flower_item {
            background: white;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .flower_item:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        .flower_item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .flower_item h2 {
            font-size: 1.5rem;
            margin: 10px;
            color: #2e8b57;
        }

        .flower_item p {
            font-size: 1rem;
            margin: 10px;
            color: #555;
        }

        .flower_item p:last-of-type {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Danh sách các loại hoa</h1>
    <div class="flower_container">
        <?php foreach ($flowers as $flower): ?>
            <div class="flower_item">
                <img src="<?php echo $flower['image']; ?>" alt="<?php echo $flower['name']; ?>">
                <h2><?php echo $flower['name']; ?></h2>
                <p><?php echo $flower['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
