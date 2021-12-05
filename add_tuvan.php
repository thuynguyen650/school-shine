<?php 
	include "connect.php";
	$name = $_POST['name'];
    $sdt = $_POST['phone'];
	$email = $_POST['email'];

    $sql = "INSERT INTO tuvan (name, sdt, email) VALUES ('".$name."', '".$sdt."', '".$email."')";
	$query = mysqli_query($conn, $sql);

	mysqli_close($conn);
?>