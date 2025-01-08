<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Thông tin đăng nhập mẫu
    $valid_username = "Englishmybest";
    $valid_password = "toikhongbiet";

    if ($username == $valid_username && $password == $valid_password) {
        echo "Đăng nhập thành công!";
    } else {
        echo "Tên đăng nhập hoặc mật khẩu không chính xác";
    }
}
?>
