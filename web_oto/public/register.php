<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Đăng ký thành viên</title>
</head>

<body>
    <div class="header">
        <img src="../image/logo.png" alt="">
    </div>
    <div class="topnav">
        <a href="../index.php">Trang chủ</a>
        <a href="">Thông tin các loại xe</a>
        <a href="">Đánh giá người dùng</a>
        <a href="">Liên hệ</a>
    </div>
    <div class="column side">
        <h4>Hãng xe</h4>
        <ul>
            <li class="li"><a href="vinfast.php">Vinfast</a></li>
            <li class="li"><a href="Mercedes-Benz.php">Mercedes-Benz</a> </li>
            <li class="li"><a href="BMW.php">BMW</a></li>
            <li class="li"><a href="Audi.php">Audi</a></li>

        </ul>
    </div>
    <div class="column middle">

        <form action="process_register.php" method="post">

            <fieldset class="register">
                <legend>Đăng ký thành viên</legend>
                <table>
                    <tr>
                        <td colspan="2">Đăng ký thành viên</td>
                    </tr>
                    <tr>
                        <td>Tên đăng nhập :</td>
                        <td><input type="text" id="username" name="username"></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu :</td>
                        <td><input type="password" id="pass" name="pass"></td>
                    </tr>
                    <tr>
                        <td>Họ tên :</td>
                        <td><input type="text" id="name" name="name"></td>
                    </tr>
                    <tr>
                        <td>Ngày sinh</td>
                        <td><input type="date" name="date" id="date"></td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><input type="text" id="email" name="email"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Dang ky"></td>
                        <td> <a href="login.php" title="Đăng nhập">Đăng nhập</a></td>
                    </tr>

                </table>
            </fieldset>
        </form>
    </div>
    <div class="column side">
        zxc
    </div>
    <div class="footer">

    </div>
    <script src="../web_oto/javascript/js.js"></script>
</body>

</html>