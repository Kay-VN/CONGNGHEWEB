<?php include 'data.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Danh Sách Hoa Đẹp</title>
    <style>
        body { font-family: Arial; width: 900px; margin: auto; }
        .flower { margin-bottom: 40px; }
        img { width: 300px; border-radius: 10px; }
    </style>
</head>
<body>

<h1> Bộ sưu tập hoa đẹp</h1>

<?php foreach ($flowers as $f): ?>
<div class="flower">
    <h2><?= $f["name"] ?></h2>
    <img src="hoadep/<?= $f["image"] ?>">
    <p><?= $f["desc"] ?></p>
</div>
<?php endforeach; ?>

</body>
</html>
