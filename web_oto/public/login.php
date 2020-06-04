</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Đăng nhập thành viên</title>
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
        <div class="login">
            <a href="../public/register.php">Đăng ký</a>
        </div>
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
        <form method="POST" action="process_login.php" class="login1">
            <fieldset>
                <legend>Đăng nhập</legend>
                <table class="tbl">
                    <tr>
                        <td>Tên đăng nhập</td>
                        <td><input type="text" name="username" size="30"></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu</td>
                        <td><input type="password" name="password" size="30"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input name="btn_submit" type="submit" value="Login">
                            <input type="reset" value="reset">
                        </td>
                        <td class="regis"><a href="register.php">Đăng ký</a></td>
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