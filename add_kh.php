
<?php 
	include "connect.php";
	$makh = $_POST['makh'];
	$tenkh = $_POST['tenkh'];
	$loaikh = $_POST['loaikh'];
	$loaiskill = $_POST['loaiskill'];
	$gv = $_POST['gv'];
	$ca = $_POST['ca'];
	$thu = $_POST['thu'];
	$ngaybd = $_POST['ngaybd'];
	$ngaykt = $_POST['ngaykt'];
	$gia = $_POST['gia'];
	$loaitt = $_POST['loaitt'];
	$mota = $_POST['mota'];
	// if ($username == 'nhanuit'){
	// 	echo "OK";
	// }
	$sql1 = "SELECT * FROM KHOAHOC where MAGV ="."'".$gv."' and CA = ".$ca." and THU = '".$thu."' and TINHTRANG = 1";
	$query1 = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_array($query1);
	$total_row1 = mysqli_num_rows($query1);

	$sql2 = "SELECT * FROM KHOAHOC where MAKH ="."'".$makh."'";
	$query2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($query2);
	$total_row2 = mysqli_num_rows($query2);

	if ($total_row1>0 || $total_row2>0){
		echo "0";
	}
	else{
		$sql3 = "INSERT INTO KHOAHOC (MAKH, MAGV, TENKHOAHOC, SKILL, MOTA, GIA, CHUKI, CA, THU, NGAYBATDAU, NGAYKETTHUC, TINHTRANG, LOAI)
		VALUES ('".$makh."','".$gv."','".$tenkh."','".$loaiskill."','".$mota."',".$gia.",".$loaitt.",".$ca.",'".$thu."','".$ngaybd."','".$ngaykt."', 1,".$loaikh.")";
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