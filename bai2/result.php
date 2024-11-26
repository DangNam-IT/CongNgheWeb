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
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: #ffd700;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .result-box {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .result-box h2 {
            font-size: 2rem;
            color: #333;
        }

        .result-box p {
            font-size: 1.2rem;
            color: #555;
        }

        .btn-primary {
            background: #ff4500;
            border: none;
            font-size: 1.1rem;
            padding: 10px 20px;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: #e63900;
        }

        .btn-primary:focus {
            box-shadow: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Kết Quả Trắc Nghiệm</h1>
        <div class="result-box">
            <h2>Chúc mừng bạn!</h2>
            <p>Bạn đã trả lời đúng <strong><?php echo $score; ?></strong> / <?php echo count($answers); ?> câu.</p>
            <a href="index.php" class="btn btn-primary mt-3">Làm Lại</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
