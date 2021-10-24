<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="assets/css/buycourse.css">
	<script src="assets/scripts/testlogin.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	<form name="frmLogin" action="teacher.php" method="post" id="login">
			<label>User Name: </label>
			<input type="text" name="username" id="username" /><br/>
			<label>Password: </label>
			<input type="password" id="password" /><br/>
			<a href="#" onclick="check_login()" class="bt_blue">LOGIN</a>
	</form>
</body>
</html>