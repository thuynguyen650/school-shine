<?php 
	include "connect.php";
	$makh = $_POST['makh'];
	$mahv = $_POST['mahv'];
	// if ($username == 'nhanuit'){
	// 	echo "OK";
	// }
	$sql = "SELECT * FROM THAMGIA where MAKH =". '\'' .$makh. '\' and MAHV ='. '\'' .$mahv. '\'' ;
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	$total_row = mysqli_num_rows($query);
	if ($total_row>0){
		echo "1";
	}
	else{
		echo "0";
	}
	mysqli_close($conn);
?>