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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trắc Nghiệm</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #74ebd5, #acb6e5);
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
            max-width: 750px;
        }

        h1 {
            text-align: center;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .question-header {
            background-color: #333;
            color: white;
            padding: 10px;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
        }

        .question-card {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-check-label {
            margin-left: 10px;
            font-size: 16px;
            color: #555;
        }

        .btn-submit {
            background-color: #4caf50;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Trắc Nghiệm</h1>
        <form method="POST" action="result.php">
            <?php
            $question_number = 1;
            foreach ($all_questions as $question) {
                echo "<div class='question-card'>";
                echo "<div class='question-header'>Câu {$question_number}: {$question[0]}</div>";
                echo "<div class='mt-3'>";
                for ($i = 1; $i <= 4; $i++) {
                    $answer = substr($question[$i], 0, 1); // Lấy A, B, C, D
                    echo "<div class='form-check'>";
                    echo "<input class='form-check-input' type='radio' name='question{$question_number}' value='{$answer}' id='question{$question_number}{$answer}'>";
                    echo "<label class='form-check-label' for='question{$question_number}{$answer}'>{$question[$i]}</label>";
                    echo "</div>";
                }
                echo "</div>";
                echo "</div>";
                $question_number++;
            }
            ?>
            <div class="text-center">
                <button type="submit" class="btn-submit">Nộp bài</button>
            </div>
        </form>
        <div class="footer">Chúc bạn làm bài tốt!</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

