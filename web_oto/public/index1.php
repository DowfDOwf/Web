<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Sơn-Đức Auto</title>
</head>

<body>
  <div class="header">
    <img src="../image/logo.png" height="200" alt="">
  </div class="row">
  <div class="topnav">
    <a href="">Trang chủ</a>
    <a href="">Thông tin các loại xe</a>
    <a href="">Đánh giá người dùng</a>
    <a href="">Liên hệ</a>
    <div class="login">
      <p class="user"> Chào mừng bạn <?php echo $_SESSION['username'];  ?></p>
      <?php

      // if (isset($_SESSION['username'])){
      // //     unset($_SESSION['username']);
      // }
      ?>
    </div>
  </div>
  <div>
    <div class="column side">
      <h4>Hãng xe</h4>
      <ul>
        <li class="li"><a href="../public/vinfast.php">Vinfast</a></li>
        <li class="li"><a href="../public/Mercedes-Benz.php">Mercedes-Benz</a> </li>
        <li class="li"><a href="../public/BMW.php">BMW</a></li>
        <li class="li"><a href="../public/Audi.php">Audi</a></li>
      </ul>
    </div>
    <div class="column middle">

      <h3 class="h4">Mẫu xe tiêu biểu</h4>
        <div class="slideshow-container">
          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="../image/vinfast.jpg" heigh="556" style="width:100%">
            <div class="text">Vinfast LUX A2.0</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="../image/VinFast.lux.jpg" heigh="556" style="width:100%">
            <div class="text1">Vinfast LUX SA2.0</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="../image/mercs c 300.jpg" height="560" style="width:100%">
            <div class="text">Mercedes-Benz C 300 AMG</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="../image/audi-a8.jpg" height="556" style="width:100%">
            <div class="text">Vinfast LUX SA2.0</div>
          </div>

          <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a> -->

        </div>
        <br>

        <!-- <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
        </div> -->
    </div>
    <div class="column side">
      zxc
    </div>
    <div class="footer">

    </div>
  </div>
  <script src="../javascript/js.js"></script>
</body>

</html>