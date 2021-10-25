<?php 
	include "connect.php";
	$makh = $_POST['makh'];
	$buoi = $_POST['buoi'];
	$cauhoi = $_POST['cauhoi'];
	$tl = $_POST['tl'];
	$sql = "SELECT * FROM BAITAP B INNER JOIN CAUHOI C on B.MABT=C.MABT WHERE B.MAKH = '".$makh."' and B.BUOIHOC = '".$buoi."'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	$mabt = $row['MABT'];
	$sql2 = "SELECT * FROM CAUHOI WHERE MABT = ".$mabt." and NOIDUNG = '".$cauhoi."'";
	$query2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($query2);
	$true = $row2['DAPAN'];
	$sql1 = "SELECT * FROM CAUHOI WHERE MABT = ".$mabt." and NOIDUNG = '".$cauhoi."' and DAPAN = '".$tl."'";
	$query1 = mysqli_query($conn, $sql1);
	if (mysqli_num_rows($query1)>0){
		echo '1-'.$true;
	}
	else{
		echo '0-'.$true;
	}
	
?>