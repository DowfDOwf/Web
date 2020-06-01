<?php
session_start();
?>
<html>
<head>
	<title>Trang đăng nhập admin</title>
	<meta charset="utf-8">
</head>
<body>

<?php
	
	require_once("connect.php");
	if (isset($_POST["btn_submit"])) {
		$user = $_POST["user"];
		$password = $_POST["password"];
	
		$user = strip_tags($user);
		$user = addslashes($user);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($user == "" || $password =="") {
			echo "user hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from admin where user = '$user' and password = '$password' ";
			$query = mysqli_query($connect,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
		
                $_SESSION['user'] = $user;
                
                
             
                header('Location: view_insert.php');
			}
		}
	}
?>
	<form method="POST" action="login_admin.php">
	<fieldset>
	    <legend>Login admin</legend>
	    	<table>
	    		<tr>
	    			<td>User</td>
	    			<td><input type="text" name="user" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password</td>
	    			<td><input type="password" name="password" size="30"></td>
	    		</tr>
	    		<tr>
                    <td colspan="2" align="center"> 
                        <input name="btn_submit" type="submit" value="Login">
                        <input type="reset" value="reset">
                    </td>
					
	    		</tr>
	    	</table>
  </fieldset>
  </form>
</body>
</html>