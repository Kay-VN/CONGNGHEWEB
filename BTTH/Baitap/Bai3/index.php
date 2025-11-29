    <?php
$filename = "65HTTT_Danh_sach_diem_danh.csv";

if (!file_exists($filename)) {
    die("Không tìm thấy tệp CSV!");
}

$rows = [];
if (($handle = fopen($filename, "r")) !== false) {
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        $rows[] = $data;
    }
    fclose($handle);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách điểm danh</title>
    <style>
        body { font-family: Arial; width: 900px; margin: auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #f2f2f2; }
    </style>
</head>
<body>

<h2>Danh sách điểm danh </h2>

<table>
    <?php foreach ($rows as $index => $row): ?>
        <?php if ($index == 0): ?>
            <tr>
                <?php foreach ($row as $cell): ?>
                    <th><?= htmlspecialchars($cell) ?></th>
                <?php endforeach; ?>
            </tr>
        <?php else: ?>
            <tr>
                <?php foreach ($row as $cell): ?>
                    <td><?= htmlspecialchars($cell) ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>

</body>
</html>
