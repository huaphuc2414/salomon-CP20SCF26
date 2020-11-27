<?php 
//Phân rã khối dữ liệu nhận từ client
    $ten_tai_khoan = $_GET['username'];
    $mat_khau = $_GET['password'];
//Kiểm tra điều kiện đăng nhập
    if($ten_tai_khoan == 'admin' && $mat_khau == '123456' )
    {
        echo '<h1>Chào mừng admin quay lại !</h1>';
    }else{
        echo 'Đăng nhập thất bại';
    };
?>