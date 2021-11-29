<?php 
	$hoten = $_POST['hoten'];
	$email = $_POST['email'];
	$sdt = $_POST['sdt'];
	$gioitinh = $_POST['gioitinh'];
	$ngaysinh = $_POST['ngaysinh'];
	$diachi = $_POST['diachi'];
	$redirect = '';
	if (strcmp($_COOKIE['loai'], '1') == 0){
		$redirect = "teacher";
	}
	else{
		$redirect = "student";
	}
	include "connect.php";
	$sql = "UPDATE TAIKHOAN
		SET HOTEN='".$hoten."', EMAIL='".$email."', SDT = '".$sdt."', GIOITINH = '".$gioitinh."', NGAYSINH = '".$ngaysinh."', DIACHI = '".$diachi."'
		WHERE MATK= '".$_COOKIE['userid']."'";
	$query = mysqli_query($conn, $sql);
	if ($query){
		echo "<!DOCTYPE html>
			<html>
			<head>
				<meta charset=\"utf-8\">
				<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
				<title>Trạng thái cập nhật</title>
				<link rel=\"stylesheet\" href=\"\">
			</head>
			<body>
				<script>
					alert('Cập nhật thành công.');
					window.location.href = \"http://localhost/school-shine/".$redirect.".php\";
				</script> 
			</body>
			</html>";
	}
	else{
		echo "<!DOCTYPE html>
			<html>
			<head>
				<meta charset=\"utf-8\">
				<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
				<title>Trạng thái cập nhật</title>
				<link rel=\"stylesheet\" href=\"\">
			</head>
			<body>
				<script>
					alert('Cập nhật thất bại.');
					window.location.href = \"http://localhost/school-shine/".$redirect.".php\";
				</script> 
			</body>
			</html>";
	}
?>