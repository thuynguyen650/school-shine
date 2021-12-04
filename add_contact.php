<?php 
	include "connect.php";
	$name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
	$subject = $_POST['contact-subject'];
    $message = $_POST['contact-message'];

    $sql = "INSERT INTO lienhe (name, email, topic, message) VALUES ('".$name."', '".$email."', '".$subject."', '".$message."')";
	$query = mysqli_query($conn, $sql);

	mysqli_close($conn);
?>