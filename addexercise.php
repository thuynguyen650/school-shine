<?php 
	include "connect.php";
	$makh = $_POST['makh'];
	$buoi = $_POST['buoi'];
	$tg = $_POST['tg'];
	$dl = $_POST['dl'];
	$min = $_POST['min'];
	$create = $_POST['create'];
	if ($makh != 'no'){
		$sql1 = "INSERT INTO BAITAP (MAKH, BUOIHOC, DIEMPASS, THOIGIAN, DEADLINE)
		VALUES ('".$makh."','".$buoi."','".$min."',".$tg.",'".$dl."')";
		$query1 = mysqli_query($conn, $sql1);
		if ($query1){
			echo 'thanh cong';
		}
		else{
			echo "that bai". $conn->error;
		}
	}
	
?>