<?php
// Đọc dữ liệu từ tệp questions.txt
$filename = "questions.txt";
$questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$current_question = [];
$all_questions = [];
$answers = [];

foreach ($questions as $line) {
    if (strpos($line, "Câu") === 0) {
        if (!empty($current_question)) {
            $all_questions[] = $current_question;
        }
        $current_question = [];
    }
    $current_question[] = $line;
}
$all_questions[] = $current_question; // Thêm câu hỏi cuối cùng vào mảng

// Tạo mảng đáp án
foreach ($questions as $line) {
    if (strpos($line, "Đáp án:") !== false) {
        $answers[] = trim(substr($line, strpos($line, ":") + 1));
    }
}

// Xử lý khi người dùng nộp bài
$score = 0;
foreach ($_POST as $key => $userAnswer) {
    $questionNumber = (int)filter_var($key, FILTER_SANITIZE_NUMBER_INT);
    if (isset($answers[$questionNumber - 1]) && $answers[$questionNumber - 1] === $userAnswer) {
        $score++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Trắc Nghiệm</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #28a745;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .score-box {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 10px;
        }

        .score-box.success {
            background-color: #d4edda;
            color: #155724;
        }

        .score-box.fail {
            background-color: #f8d7da;
            color: #721c24;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Kết Quả Trắc Nghiệm</h1>
        <?php
        $total_questions = count($answers);
        $pass_score = ceil($total_questions * 0.6); // Đặt ngưỡng đạt là 60%
        if ($score >= $pass_score) {
            echo "<div class='score-box success'>Chúc mừng! Bạn đã trả lời đúng <strong>{$score}</strong> / {$total_questions} câu.</div>";
        } else {
            echo "<div class='score-box fail'>Rất tiếc, bạn chỉ trả lời đúng <strong>{$score}</strong> / {$total_questions} câu. Hãy thử lại!</div>";
        }
        ?>
        <a href="index.php" class="btn btn-primary">Làm lại</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
