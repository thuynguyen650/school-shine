<?php
	if (strcmp($_COOKIE['username'], '') == 0)
	{
		echo "<!DOCTYPE html>
		<html>
		<head>
			<meta charset=\"utf-8\">
			<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
			<title>Truy cập bị từ chối</title>
			<link rel=\"stylesheet\" href=\"\">
		</head>
		<body>
			<script>
				alert('Bạn cần đăng nhập tài khoản để tiếp tục.');
				window.location.href = \"http://localhost/school-shine/login.php\";
			</script> 
		</body>
		</html>";
	}
	else
	{
		echo "<!DOCTYPE html>
		<html>
		<head>
			<meta charset=\"utf-8\">
			<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
			<title>Truy cập bị từ chối</title>
			<link rel=\"stylesheet\" href=\"\">
		</head>
		<body>
			<script>
				alert('Bạn không có quyền truy cập trang này.');
				window.location.href = \"http://localhost/school-shine/home.php\";
			</script> 
		</body>
		</html>";
	}
?>
