<?php 
	include "connect.php";
	$magv = $_POST['magv'];
	$ca = $_POST['ca'];
	$thu = $_POST['thu'];
	// if ($username == 'nhanuit'){
	// 	echo "OK";
	// }
	$sql = "SELECT * FROM KHOAHOC where MAGV ="."'".$magv."' and CA = ".$ca." and THU = '".$thu."' and TINHTRANG = 1";
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