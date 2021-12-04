<?php 
	include "connect.php";
	$oldpass = $_POST['oldpass'];
	$newpass = $_POST['newpass'];
	// if ($username == 'nhanuit'){
	// 	echo "OK";
	// }
	$sql = "SELECT * FROM TAIKHOAN where TENDANGNHAP =". '\'' .$_COOKIE['username']. '\' and MATKHAU ='. '\'' .$oldpass. '\'' ;
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	$total_row = mysqli_num_rows($query);
	if ($total_row==0){
		echo "0";
	}
	else{
		$sql1 = "UPDATE TAIKHOAN
		SET MATKHAU='".$newpass."'
		WHERE TENDANGNHAP= '".$_COOKIE['username']."'";
		$query1 = mysqli_query($conn, $sql1);
		if ($query1) {
			echo "1";
		}
		else{
			echo "2";
		}
	}
	mysqli_close($conn);
?>