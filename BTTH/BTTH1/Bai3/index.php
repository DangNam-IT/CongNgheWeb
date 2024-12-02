<?php
// Đường dẫn đến CSV file
$filename = "KTPM2.csv";
// Tạo một mảng trống để lưu trữ dữ liệu
$students = [];

// Mở file CSV để đọc
if (($handle = fopen($filename, "r")) !== FALSE) {
    // Đọc tiêu đề (tên cột)
    $headers = fgetcsv($handle, 1000, ",");

    // Đọc từng hàng của CSV và thêm nó vào mảng $students
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $students[] = array_combine($headers, $data); // Kết hợp các tiêu đề với dữ liệu hàng
    }

    fclose($handle);
}


// Tùy chọn, bạn có thể in dữ liệu ra để kiểm tra
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            color: #28a745;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .table thead {
            background-color: #28a745;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s ease;
        }

        .table-bordered th,
        .table-bordered td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Danh Sách Sinh Viên</h1>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Course</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Lặp qua mảng và hiển thị dữ liệu của từng học sinh theo hàng
                foreach ($students as $student) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($student['username']) . "</td>";
                    echo "<td>" . htmlspecialchars($student['password']) . "</td>";
                    echo "<td>" . htmlspecialchars($student['lastname']) . "</td>";
                    echo "<td>" . htmlspecialchars($student['firstname']) . "</td>";
                    echo "<td>" . htmlspecialchars($student['city']) . "</td>";
                    echo "<td>" . htmlspecialchars($student['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($student['course1']) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
