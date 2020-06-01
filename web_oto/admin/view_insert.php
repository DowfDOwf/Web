<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu quản trị</title>
</head>
<body>
<form action="process_insert1.php" method="POST">
        <h1>[QUẢN TRỊ] HỆ THỐNG CỬA HÀNG BÁN Ô TÔ</h1>
        </table>
        <table>
            <tr>
                <td>Mã sản phẩm</td>
                <td><input type="text" name="ma_sanpham"></td>
            </tr>
            <tr>
                <td>Mã thương hiệu</td>
                <td><input type="text" name="ma_thuonghieu"></td>
            </tr>
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="ten_sanpham"></td>
            </tr>
            <tr>
                <td>Loại xe</td>
                <td><select name="loai_xe" id="loai_xe">
                    <option value="loai_xe">Loại xe</option>
                    <option value="xe_2_cua">Xe 2 cửa</option>
                    <option value="xe_4_cho">Xe 4 chỗ</option>
                    <option value="xe_7_cho">Xe 7 chỗ</option>
                    <option value="xe_ban_tai">Xe bán tải</option>
                    <option value="xe_khac">Xe khác</option>
                </select></td>
            </tr>
            <tr>
                <td>Giá sản phẩm</td>
                <td><input type="number" name="gia_sanpham"></td>
            </tr>
            <tr>
                <td>Mã loại xe</td>
                <td><input type="text" name="ma_loaixe"></td>
            </tr>
            <tr>
                <td>Chi tiết sản phẩm</td>
                <td><input type="text" name="chitiet_sanpham"></td>
            </tr>
            <tr>
                <td><button name="them_moi"type="submit">Thêm mới</button>
                        <input name="lam_lai" type="reset" value="Làm lại"></td>
            </tr>
            
                
            
        
        </table>
    </form>
        
</html>