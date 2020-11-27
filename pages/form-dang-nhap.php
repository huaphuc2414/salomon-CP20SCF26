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
    <form name="fr-Dang-Nhap" id="fr-Dang-Nhap" method="GET" action="xu-ly-dang-nhap.php">
        Tên đăng nhập:  <input type="text" name="username" id="username"> <br>
        Mật khẩu:  <input type="text" name="password" id="password"> <br>
        <input type="submit" name="btnDangNhap" id="btnDangNhap">
    </form>
</body>
</html>