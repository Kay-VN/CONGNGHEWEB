<?php include 'data.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Quản trị hoa</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 10px; }
        img { width: 80px; }
    </style>
</head>
<body>

<h1>Trang quản trị - CRUD hoa</h1>
<a href="add.php"> Thêm hoa</a><br><br>

<table>
    <tr>
        <th>Ảnh</th>
        <th>Tên</th>
        <th>Mô tả</th>
        <th>Thao tác</th>
    </tr>

    <?php foreach ($flowers as $i => $f): ?>
    <tr>
        <td><img src="hoadep/<?= $f["image"] ?>"></td>
        <td><?= $f["name"] ?></td>
        <td><?= $f["desc"] ?></td>
        <td>
            <a href="edit.php?id=<?= $i ?>">Sửa</a> |
            <a href="delete.php?id=<?= $i ?>" onclick="return confirm('Xóa?')">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
