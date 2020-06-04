<?php
require_once("../admin/connect.php");
if (isset($_POST["btn_submit"])) {
	$username = $_POST["username"];
	$password = $_POST["pass"];
	$name = $_POST["name"];
	$date = $_POST["date"];
	$email = $_POST["email"];
	if ($username == "" || $password == "" || $name == "" || $email == "") {
		echo "bạn vui lòng nhập đầy đủ thông tin";
	} else {
		$sql = "select * from member where username='$username'";
		$kt = mysqli_query($connect, $sql);

		if (mysqli_num_rows($kt)  > 0) {
			echo "Tài khoản đã tồn tại";
		} else {
			$sql = "INSERT INTO member(
	    					username,
	    					password,
	    					name,
                            date,
						    email
	    					) VALUES (
	    					'$username',
	    					'$password',
						    '$name',
                            '$date',
	    					'$email'
							)";
			// echo $sql;
			mysqli_query($connect, $sql);
			echo "chúc mừng bạn đã đăng ký thành công";
		}
	}
}
