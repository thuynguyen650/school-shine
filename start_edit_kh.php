<?php 
	$makh = $_POST['makh'];
	$name = $_POST['name'];
	$gia = $_POST['gia'];
	$gv = $_POST['gv'];
	$skill = $_POST['skill'];
	$type = $_POST['type'];
	$ngaybd = $_POST['ngaybd'];
	$ngaykt = $_POST['ngaykt'];
	$gia = $_POST['gia'];
	$pay = $_POST['pay'];
	$ca = $_POST['ca'];
	$thu = $_POST['thu'];
	$sta = $_POST['sta'];
	$mota = $_POST['mota'];
	$edittype = $_POST['edittype'];
	if (strcmp($edittype, '0') == 0){
		include "connect.php";
		$sql = "UPDATE KHOAHOC
		SET TINHTRANG = ".$sta."
		WHERE MAKH= '".$makh."'";
		$query = mysqli_query($conn, $sql);
		if ($query){
			echo 'Cap nhat thanh cong';
		}
		else{
			echo 'Da xay ra loi';
		}
	}
	else{
		include "connect.php";
		$sql = "UPDATE KHOAHOC
		SET MAGV='".$gv."', TENKHOAHOC='".$name."', SKILL = '".$skill."', MOTA = '".$mota."', GIA = ".$gia.", CHUKI = ".$pay.", CA = ".$ca.", THU = '".$thu."', NGAYBATDAU = '".$ngaybd."', NGAYKETTHUC = '".$ngaykt."', TINHTRANG = ".$sta.", LOAI = ".$type."
		WHERE MAKH= '".$makh."'";
		$query = mysqli_query($conn, $sql);
		if ($query){
			echo 'Cap nhat thanh cong';
		}
		else{
			echo 'Da xay ra loi';
		}
	}
?>