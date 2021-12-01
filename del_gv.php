<?php 
	include "connect.php";
	$magv = $_POST['magv'];
	
	$sql1 = "SELECT * FROM KHOAHOC where MAGV ="."'".$magv."'";
	$query1 = mysqli_query($conn, $sql1);
	$total_row1 = mysqli_num_rows($query1);

	
	if ($total_row1>0){
		echo "0";
	}
	else{
		$sql2 = "DELETE FROM TAIKHOAN WHERE MATK = '".$magv."'";
		$query2 = mysqli_query($conn, $sql2);
		if ($query2){
			echo "1";
		}
		else{
			echo "2";
		}
		
	}


	mysqli_close($conn);
?>