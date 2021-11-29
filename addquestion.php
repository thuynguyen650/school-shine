<?php 
	include "connect.php";
	$makh = $_POST['makh'];
	$buoi = $_POST['buoi'];
	$needmabt = $_POST['needmabt'];
	if (strcmp($needmabt, "yes") == 0)
	{
		$sql = "SELECT * FROM BAITAP where MAKH = '" .$makh. "' and BUOIHOC = '".$buoi."'";
		$query = mysqli_query($conn, $sql);
		$row= mysqli_fetch_array($query);
		//$total_row = mysqli_num_rows($query);
		//echo $total_row;
		//echo $query;
		$mabt = $row['MABT'];
		echo $mabt;
	}
	else{
		$nd = $_POST['nd'];
		$dung = $_POST['dung'];
		$sai1 = $_POST['sai1'];
		$sai2 = $_POST['sai2'];
		$sai3 = $_POST['sai3'];
		$sai = array($sai1, $sai2, $sai3);
		$sql1 = "INSERT INTO CAUHOI (MABT, NOIDUNG, DAPAN)
		VALUES (".$needmabt.",'".$nd."','".$dung."')";
		$query1 = mysqli_query($conn, $sql1);
		$mach = $conn->insert_id;
		for ($k=0; $k<3; $k++){
			// $sql2 = "INSERT INTO DAPANSAI (MACAUHOI, NOIDUNG)
			// VALUES (".$mach.",'".$sai[i]."'')";
			$sql2 = "INSERT INTO DAPANSAI (MACAUHOI, NOIDUNG)
			VALUES (".$mach.", '".$sai[$k]."')";
			$query2 = mysqli_query($conn, $sql2);
		}
		echo "ok";
	}
?>