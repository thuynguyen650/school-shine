<?php 
	echo "<!DOCTYPE html>
		<html>
		<head>
			<meta charset=\"utf-8\">
			<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
			<title>Thanh toán khóa học</title>
			<link rel=\"stylesheet\" href=\"\">
		</head>
		<body>";
	include "connect.php";
	$makh = $_POST['makh'];
	$mahv = $_POST['mahv'];
	$sql = "SELECT * FROM KHOAHOC WHERE MAKH = '".$makh."'" ;
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	$sql2 = "SELECT * FROM TAIKHOAN WHERE MATK = '".$mahv."'" ;
	$query2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($query2);
	$total_row = mysqli_num_rows($query);
	$total_row1 = mysqli_num_rows($query2);
	if ($total_row==0 || $total_row1 == 0)
	{
		echo "<script>
				alert('Phát hiện bạn chỉnh sửa dữ liệu không hợp lệ.');
				window.location.href = \"./home.php\";
			</script> ";
		//Phát hiện chỉnh sửa thông tin không hợp lệ
	}
	elseif (strcmp($row2['Loai'], '0') != 0){
		echo "<script>
				alert('Phát hiện bạn chỉnh sửa dữ liệu không hợp lệ.');
				window.location.href = \"./home.php\";
			</script> ";
		//Phát hiện chỉnh sửa thông tin không hợp lệ
	}
	else{
		$sql3  = "INSERT INTO THAMGIA (MAHV, MAKH) VALUES ('".$mahv."','".$makh."')";
		$query3 = mysqli_query($conn, $sql3);
		echo "<script>
				alert('Đã thanh toán ".$row['GIA']." đồng cho khóa học ".$makh.".');
				window.location.href = \"./home.php\";
			</script> ";
	}
	echo "</body>
		</html>";
	//Phát hiện chỉnh sửa thông tin không hợp lệ
?>
