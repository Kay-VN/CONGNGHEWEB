<?php
// === THIẾT LẬP KẾT NỐI PDO ===
$host = '127.0.0.1'; // hoặc localhost
$dbname = 'cse485_web'; // Tên CSDL bạn vừa tạo
$username = 'root'; // Username mặc định của XAMPP
$password = ''; // Password mặc định của XAMPP (rỗng)
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
try {
 // TODO 1: Tạo đối tượng PDO để kết nối CSDL
 // Gợi ý: $pdo = new PDO(...);
 $pdo = new PDO($dsn, $username, $password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Kết nối thành công!"; // (Bỏ comment để test)
} catch (PDOException $e) {
 die("Kết nối thất bại: " . $e->getMessage());
}
// === LOGIC THÊM SINH VIÊN (XỬ LÝ FORM POST) ===
// TODO 2: Kiểm tra xem form đã được gửi đi (method POST) và có 'ten_sinh_vien'
không
// Gợi ý: Dùng isset($_POST['...'])
if ( ... ) {

 // TODO 3: Lấy dữ liệu 'ten_sinh_vien' và 'email' từ $_POST
 $ten = ...;
 $email = ...;
 // TODO 4: Viết câu lệnh SQL INSERT với Prepared Statement (dùng dấu ?)
 $sql = "INSERT INTO sinhvien (ten_sinh_vien, email) VALUES (?, ?)";

 // TODO 5: Chuẩn bị (prepare) và thực thi (execute) câu lệnh
 // Gợi ý: $stmt = $pdo->prepare($sql);
 // Gợi ý: $stmt->execute([$ten, $email]);
 // TODO 6: (Tùy chọn) Chuyển hướng về chính trang này để "làm mới"
 // Gợi ý: Dùng header('Location: chapter4.php');
 exit;
}
// === LOGIC LẤY DANH SÁCH SINH VIÊN (SELECT) ===
// TODO 7: Viết câu lệnh SQL SELECT *
$sql_select = "SELECT * FROM sinhvien ORDER BY ngay_tao DESC";
// TODO 8: Thực thi câu lệnh SELECT (không cần prepare vì không có tham số)
// Gợi ý: $stmt_select = $pdo->query($sql_select);
?>