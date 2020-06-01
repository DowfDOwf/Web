<?php
		require_once("../admin/connect.php");
		if (isset($_POST ["btn_submit"])) {
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
 			 $name = $_POST["name"];
  			$email = $_POST["email"];
			  if ($username == "" || $password == "" || $name == "" || $email == "") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
                      $sql="select * from member where username='$username'";
					$kt=mysqli_query($conn, $sql);

					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
	    				$sql = "INSERT INTO user(
	    					username,
	    					password,
	    					name,
                            date_birth,
						    email
	    					) VALUES (
	    					'$username',
	    					'$password',
						    '$name',
                            '$date_birth',
	    					'$email'
	    					)";
   						mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã đăng ký thành công";
					}
									    
					
			  }
	}
	?>