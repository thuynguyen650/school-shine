<?php 
	include "connect.php";
	$blogId = $_POST['id'];
	
	$sql = "DELETE FROM blog where blog_id ="."'".(int)$blogId."'";
    echo $sql;
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
?>