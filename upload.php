<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $employeeId = $_POST['employee-id'];
    
    // Kiểm tra và lưu file vào thư mục uploads/
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "File đã được gửi thành công.";
        header("Location: index.html"); // Quay lại trang gửi file sau khi upload thành công
    } else {
        echo "Có lỗi xảy ra khi gửi file.";
    }
}
?>
