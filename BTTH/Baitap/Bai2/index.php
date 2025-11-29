<?php
// Đọc file câu hỏi
$raw = file_get_contents("quiz.txt");

// Tách từng câu hỏi theo dấu xuống dòng kép
$blocks = preg_split("/\n\s*\n/", trim($raw));

$questions = [];

foreach ($blocks as $block) {
    $lines = explode("\n", trim($block));

    // Câu hỏi
    $q = array_shift($lines);

    // Các lựa chọn
    $choices = [];
    $answer = "";

    foreach ($lines as $line) {
        $line = trim($line);

        // Lấy ANSWER
        if (str_starts_with($line, "ANSWER")) {
            $answer = trim(explode(":", $line)[1]);
        } 
        // Lấy A. B. C. D.
        else {
            $choices[] = $line;
        }
    }

    $questions[] = [
        "question" => $q,
        "choices" => $choices,
        "answer"  => $answer
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Trắc nghiệm </title>
    <style>
        body { font-family: Arial; width: 900px; margin: auto; }
        .question { margin-bottom: 25px; padding: 10px; border-bottom: 1px solid #ccc; }
    </style>
</head>
<body>

<h1>Bài trắc nghiệm </h1>
<form action="result.php" method="POST">

<?php foreach ($questions as $i => $q): ?>
<div class="question">
    <p><b><?= $i+1 ?>. <?= $q["question"] ?></b></p>

    <?php foreach ($q["choices"] as $c): ?>
        <label>
            <input type="radio" name="answer<?= $i ?>" value="<?= substr($c,0,1) ?>">
            <?= $c ?>
        </label><br>
    <?php endforeach; ?>

    <!-- Gửi đáp án đúng ẩn -->
    <input type="hidden" name="correct<?= $i ?>" value="<?= $q["answer"] ?>">
</div>
<?php endforeach; ?>

<button type="submit">Nộp bài</button>

</form>

</body>
</html>
