<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "KHOAHOC";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
if ($conn){
	mysqli_query($conn, "SET NAMES 'utf-8'");
}
else{
	alert ("Ban da ket noi that bai".mysqli_connect_error());
}
?>