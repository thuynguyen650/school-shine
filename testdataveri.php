<?php 
	include "connect.php";
	$username = $_POST['username'];
	$password = $_POST['password'];
	// if ($username == 'nhanuit'){
	// 	echo "OK";
	// }
	$sql = "SELECT * FROM TAIKHOAN where TENDANGNHAP =". '\'' .$username. '\' and MATKHAU ='. '\'' .$password. '\'' ;
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	$total_row = mysqli_num_rows($query);
	if ($total_row>0){
		setcookie('userid',$row['MATK'], time() + 3600);
		setcookie('username',$username, time() + 3600);
		setcookie('loai',$row['Loai'], time() + 3600);
		echo "1".'-'.$row['Loai'];
	}
	else{
		echo "0";
	}
	mysqli_close($conn);
?>