<?php
//Phân rã khối dữ liệu nhận từ client
$ten_tai_khoan = $_POST['username'];
$mat_khau = $_POST['password'];
$fullname = $_POST['fullname']

?>
<!-- Hiện thị Check -->
<h1>Bạn đã đăng ký với thông tin</h1>
<ul>
    <li>Tên đăng nhập: <?= $ten_tai_khoan?></li>
    <li>Mật khẩu: <?= $mat_khau?></li>
    <li>Full name: <?= $fullname?></li>
</ul>