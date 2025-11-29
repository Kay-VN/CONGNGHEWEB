<?php
$flowers = [];
$path = 'hoadep/';

$files = scandir($path);

foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {

        // Tạo tên hoa từ tên file (ví dụ: haiduong → Hoa Hai Duong)
        $name = pathinfo($file, PATHINFO_FILENAME);
        $name = ucwords(str_replace("-", " ", str_replace("_", " ", $name)));

        $flowers[] = [
            "name" => "Hoa " . $name,
            "desc" => "Mô tả đang cập nhật...",
            "image" => $file
        ];
    }
}
?>
