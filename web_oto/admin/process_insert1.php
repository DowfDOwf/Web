
    <?php 
        require_once("connect.php");
        if(isset($_POST["btn_submit"])){
            $name = $_POST["ma_sanpham"];
            $price = $_POST["ma_thuonghieu"];
            $description = $_POST["ten_sanpham"];
            $detail = $_POST["gia_sanpham"];
            $sql = "INSERT INTO san_pham (`ma_sanpham`,`ma_thuonghieu`,`ten_sanpham`,`gia_sanpham`) VALUES (". $ma_sanpham .",".$ma_thuonghieu.",'".$ten_sanpham."',".$gia_sanpham.")";
            mysqli_query($connect,$sql);
            echo "Cập nhật sản phẩm thành công";
        }
    ?>

