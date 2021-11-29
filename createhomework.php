<?php
	include "connect.php";
	$sql2 = "SELECT * FROM TAIKHOAN where TENDANGNHAP =". '\'' .$_COOKIE['username']. '\'';
	$query2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($query2);
	if (strcmp($row2['Loai'], '1') != 0)
	{
		header("Location: http://localhost/school-shine/block.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tạo bài tập</title>
	<link rel="stylesheet" href="assets/css/buycourse.css">
	<link rel="stylesheet" type="text/css" href="FontAwesome/css/all.css">
	<script src="assets/scripts/createhomework.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<?php
    include "./includes/head.php";
?> 
<body>
	<?php
        include "./includes/header.php";
    ?>
    <main id="main">
    	<div class="panel">
			<div class="checkout_title">
				<?php 
       				$coursename = $_POST['coursename'];
       				echo "<p>".$coursename.": Tạo bài tập</p>"
				?>
				<!-- <p>EL452: Bài tập buổi 3</p> -->
				<!-- phpcode -->
			</div>
			
		</div>
		<div class="homework" id="homework">
			<div class="half">
				<label class="detail_field label_block">Buổi:
				</label>
				<input type="number" name="" class="in_half buoihoc" id="question_buoihoc"> <br>
				<label class="detail_field label_block">Số lượng câu hỏi:
				</label>
				<input type="number" name="" class="in_half buoihoc" id="question_val"> <br>
				<label class="detail_field label_block">Thời gian làm bài:
				</label>
				<input type="number" name="" class="in_half buoihoc" id="question_time"> <br>
				<label class="detail_field label_block">Deadline:
				</label>
				<input type="datetime-local" name="" class="in_half buoihoc" id="question_deadline"> <br>
				<label class="detail_field label_block">Điểm đạt tối thiểu:
				</label>
				<input type="number" name="" class="in_half buoihoc" id="question_min"> <br>
				<?php 
       				$coursename = $_POST['coursename'];
       				echo "<a href=\"#\" title=\"\" class=\"bt_blue\" onclick='questionval("."\"".$coursename."\"".")'>Đồng ý</a>";
				?>
				
			</div>
				
		</div>
		<input type="text" name="" class= "mabt" id="mabt">
    </main>
    <?php
        include "./includes/footer.php";
    ?> 
</body>
</html>