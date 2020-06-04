<?php 
require_once("../admin/connect.php");
if (isset($_POST["btn_submit"])) { 
    $name=$_POST["name"];
    $add=$_POST["add"];
    $email=$_POST["email"];
    $sdt=$_POST["sdt"];
    $san_pham=$_POST["san_pham"];
    $sql="INSERT INTO khach_hang (ten,sdt,email,dia_chi,san_pham) VALUES ('".$name."','.$sdt.','".$email."','".$add."','".$san_pham."')";
    mysqli_query($connect,$sql);
    echo "Bạn đã gửi thông tin";
    // echo $sql;
}
?>