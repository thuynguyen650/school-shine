<?php
	include "connect.php"; 
	if (strcmp($_COOKIE['loai'], '1') != 0)
	{
		$makh = $_POST['makh'];
		$buoi = $_POST['buoi'];
		$caudung = $_POST['caudung'];
		$mabt = $_POST['mabt'];
		$sql = "SELECT * FROM BAITAP where MABT =".$mabt;
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		$ispass = 0;
		if ((int)$caudung >= (int)$row['DIEMPASS']){
			$ispass = 1;
		}
		$sql1 = "INSERT INTO LICHSU (MAHV, MABT, DIEM, ISPASS)
		VALUES ('".$_COOKIE['userid']."',".$mabt.",".$caudung.",".$ispass.")";
		$query1 = mysqli_query($conn, $sql1);
		echo "Đã ghi nhận kết quả";
	}
	else
	{
		echo 'Kết quả của giảng viên sẽ không được lưu';
	}
?>