<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Đăng nhập</title>
</head>
<body>
    <h1>Form đăng nhập</h1>
    <!-- Khi request method="GET" thì packet được mã hóa hiển thị trên thanh địa chỉ  -->
                                                            <!-- aciton="" <=> action="form-login-tu-gui-chinh-minh" -->
    <form name="fr-Dang-Nhap" id="fr-Dang-Nhap" method="GET" action="">
        Tên đăng nhập:  <input type="text" name="username" id="username"> <br>
        Mật khẩu:  <input type="text" name="password" id="password"> <br>
        <input type="submit" name="btnDangNhap" id="btnDangNhap">
    </form>

    <?php
        //Kiểm tra người dùng có bấm btnDangNhap không ?
        if(isset($_GET['btnDangNhap'])){
            $ten_tai_khoan = $_GET['username'];
            $mat_khau = $_GET['password'];
            //Kiểm tra điều kiện đăng nhập
            if($ten_tai_khoan == 'admin' && $mat_khau == '123456' )
            {
                echo '<h1>Chào mừng admin quay lại !</h1>';
            }else{
                echo 'Đăng nhập thất bại';
            };
        }
    ?>
</body>
</html>