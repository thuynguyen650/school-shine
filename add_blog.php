<?php 
	include "connect.php";
	$title = $_POST['title'];
    $author = $_POST['author'];
	$topic = $_POST['topic'];
    $content = $_POST['content'];
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    echo "The time is " . date("h:i:sa"); echo date("d/m/Y");
    $time = date("Y-m-d h:i:sa");
    $sql = "INSERT INTO blog (title, author, time, topic, content) VALUES ('".$title."', '".$author."', '".$time."','".$topic."', '".$content."')";
	$query = mysqli_query($conn, $sql);

	mysqli_close($conn);
?>