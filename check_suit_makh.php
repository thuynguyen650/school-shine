<?php 
	include "connect.php";
	$makh = $_POST['makh'];
	// if ($username == 'nhanuit'){
	// 	echo "OK";
	// }
	$sql = "SELECT * FROM KHOAHOC where MAKH ="."'".$makh."'" ;
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	$total_row = mysqli_num_rows($query);
	if ($total_row>0){
		echo "0";
	}
	else{
		echo "1";
	}
	mysqli_close($conn);
?>