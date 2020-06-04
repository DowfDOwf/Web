<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Sơn-Đức Auto</title>
</head>

<body>
  <div class="header">
    <img src="../web_oto/image/logo.png" height="200" alt="">
  </div class="row">
  <div class="topnav">
    <a href="">Trang chủ</a>
    <a href="">Thông tin các loại xe</a>
    <a href="">Đánh giá người dùng</a>
    <a href="">Liên hệ</a>
    <div class="login">
      <a href="public/login.php">Đăng nhập</a>
      <a href="public/register.php">Đăng ký</a>
    </div>
  </div>
  <div>
    <div class="column side">
      <h4>Hãng xe</h4>
      <ul>
        <li class="li"><a href="../web_oto/public/vinfast.php">Vinfast</a></li>
        <li class="li"><a href="../web_oto/public/Mercedes-Benz.php">Mercedes-Benz</a> </li>
        <li class="li"><a href="../web_oto/public/BMW.php">BMW</a></li>
        <li class="li"><a href="../web_oto/public/Audi.php">Audi</a></li>
      </ul>
      <h4>Thông tin nhận tư vấn</h4>
      <form action="../web_oto/public/process_thongtin.php" method="POST">
        <table>
          <tr>
            <td>Họ Tên:</td>
            <td><input type="text" name="name"></td>
          </tr>
          <tr>
            <td>Địa chỉ:</td>
            <td><input type="text" name="add"></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><input type="text" name="email" id=""></td>
          </tr>
          <tr>
            <td>Số điện thoại:</td>
            <td><input type="number" name="sdt"></td>
          </tr>
          <tr>
            <td>Sản phẩm quan tâm:</td>
            <td><input type="text" name="san_pham"></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" value="Gửi" name="btn_submit"></td>
          </tr>
        </table>
      </form>
    </div>
    <div class="column middle">

      <h3 class="h4">Mẫu xe tiêu biểu</h4>
        <div class="slideshow-container">

          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="../web_oto/image/vinfast.jpg" style="width:100%">
            <div class="text">Vinfast LUX SA2.0</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="../web_oto/image/VinFast.lux.jpg" style="width:100%">
            <div class="text1">Vinfast LUX A2.0</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="../web_oto/image/mercs c 300.jpg" height="556" style="width:100%">
            <div class="text">Mercedes-Benz C 300 AMG</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="../web_oto/image/audi-a8.jpg" height="556" style="width:100%">
            <div class="text">Vinfast LUX SA2.0</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="../web_oto/image/vinfast.jpg" height="" style="width:100%">
            <div class="text">Vinfast LUX SA2.0</div>
          </div>
          <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a> -->

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
        </div>


    </div>
    <div class="column side">
      zxc
    </div>
    <div class="footer">

    </div>
  </div>
  <script src="../web_oto/javascript/js.js"></script>
</body>

</html>