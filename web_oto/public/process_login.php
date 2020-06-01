<?php
	
	
	session_start();
    require_once("../admin/connect.php");
    
    //lấy dữ liệu từ form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($connect, "SELECT username, password FROM member WHERE username = '".$username."' and password= '".$password."'  ");
    if(mysqli_num_rows($query) == 0){
        echo "Tên đăng nhập hoặc mật khẩu không đúng. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    
    $row = mysqli_fetch_array($query);

    if($password != $row['password']){
        echo "Mật khẩu không đúng. Vui lòng nhập lại.";
        exit;
    }

	$_SESSION['username'] = $username;
   header('Location: ../index.html');
    die();  

?>