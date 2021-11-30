<?php 
	include "connect.php";
	$makh = $_POST['makh'];
	
	$sql1 = "SELECT * FROM THAMGIA where MAKH ="."'".$makh."'";
	$query1 = mysqli_query($conn, $sql1);
	$total_row1 = mysqli_num_rows($query1);

	$sql2 = "DELETE FROM KHOAHOC WHERE MAKH = '".$makh."'";
	$query2 = mysqli_query($conn, $sql2);
	if ($total_row1>0){
		echo "0";
	}
	else{
		if ($query2){
			echo "1";
		}
		else{
			echo "2";
		}
		
	}


	mysqli_close($conn);
?>