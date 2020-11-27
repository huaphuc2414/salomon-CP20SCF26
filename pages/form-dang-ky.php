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
    <!-- Khi request method="POST" thì packet được mã hóa bên trong body request  -->
    <form name="fr-Dang-Ky" id="fr-Dang-Ky" method="POST" action="xu-ly-dang-ky.php">
        Tên đăng nhập:  <input type="text" name="username" id="username"> <br>
        Mật khẩu:  <input type="text" name="password" id="password"> <br>
        Fullname:  <input type="text" name="fullname" id="fullname"> <br>
        <input type="submit" name="btnDangKy" id="btnDangKy">
    </form>
</body>
</html>