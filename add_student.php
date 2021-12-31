<?php 
	include "connect.php";
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	// if ($username == 'nhanuit'){
	// 	echo "OK";
	// }
	$sql1 = "SELECT * FROM TAIKHOAN WHERE Loai = '0' ORDER BY MATK DESC LIMIT 1";
	$query1 = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_array($query1);
	$number = (int)explode("HV",$row1['MATK'])[1]+1;
	$newCode = 'HV'.(string)$number;

	$sql2 = "SELECT * FROM TAIKHOAN where TENDANGNHAP ="."'".$username."'";
	$query2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($query2);
	$total_row2 = mysqli_num_rows($query2);

	if ($total_row2>0){
		echo "0";
	}
	else{
		$sql3 = "INSERT INTO TAIKHOAN (MATK, TENDANGNHAP, MATKHAU, HOTEN, EMAIL, SDT, GIOITINH, NGAYSINH, DIACHI, Loai)
		VALUES ('".$newCode."','".$username."','".$pass."','Chưa cập nhật','".$email."','Chưa cập nhật','Nam','2000-01-01','Chưa cập nhật',0".")";
		$query3 = mysqli_query($conn, $sql3);
		if ($query3){
			echo "1";
		}
		else{
			echo "2";
		}
		
	}


	mysqli_close($conn);
?>