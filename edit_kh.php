<?php 
	include "connect.php";
	$makh = $_POST['makh'];
	
	$sql1 = "SELECT * FROM THAMGIA where MAKH ="."'".$makh."'";
	$query1 = mysqli_query($conn, $sql1);
	$total_row1 = mysqli_num_rows($query1);

	$sql2 = "SELECT * FROM KHOAHOC where MAKH ="."'".$makh."'";
	$query2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($query2);
	if ($total_row1>0){
		echo "0 - ".$row2['TINHTRANG'];
	}
	else{
		if ($query2){
			echo $row2['MAGV'].' | '.$row2['TENKHOAHOC'].' | '.$row2['SKILL'].' | '.$row2['MOTA'].' | '.$row2['GIA'].' | '.$row2['CHUKI'].' | '.$row2['CA'].' | '.$row2['THU'].' | '.$row2['NGAYBATDAU'].' | '.$row2['NGAYKETTHUC'].' | '.$row2['TINHTRANG'].' | '.$row2['LOAI'];
		}
		else{
			echo "2";
		}
		
	}


	mysqli_close($conn);
?>