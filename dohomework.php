<?php 
	include 'connect.php';
	$sql3 = "SELECT * FROM LICHSU WHERE MAHV = '".$_COOKIE['userid']."' and MABT = ".$_POST['mabt'];
	$query3 = mysqli_query($conn, $sql3);
	if (mysqli_num_rows($query3)>0)
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
	<title>Làm bài tập buổi 3</title>
	<link rel="stylesheet" href="assets/css/buycourse.css">
	<script src="assets/scripts/dohomework.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<?php
    include "./includes/head.php";
?> 
<body onload="">
	<?php
        include "./includes/header.php";
    ?>
    <main>
    	<div class="panel">
			<div class="checkout_title">
				
				<!-- phpcode -->
				<?php 
       				$exname = $_POST['exname'];
       				$lession = $_POST['lession'];
       				$mabt = $_POST['mabt'];
       				echo "<p>".$exname.": Làm bài tập buổi ".$lession."</p>";
				?>
			</div>
			
		</div>
		<div class="dohomework" id="dohomework">
			
			<?php 
				//include 'connect.php';
				$sql3 = "SELECT * FROM TAIKHOAN WHERE TENDANGNHAP = '".$_COOKIE['username']."'";
				$query3 = mysqli_query($conn, $sql3);
				$row3 = mysqli_fetch_array($query3);
				echo "<p>Tên: ".$row3['HOTEN']."</p>"
			?>
			<?php 
				
				$sql1 = "SELECT * FROM BAITAP B INNER JOIN CAUHOI C on B.MABT=C.MABT WHERE B.MAKH = '".$exname."' and B.BUOIHOC = '".$lession."'";
				$query1 = mysqli_query($conn, $sql1);
				$i=1;
				while($row1 = mysqli_fetch_array($query1)){
					echo "<div class=\"questionbox\">";
					echo "<p id = \"nd".$i."\">Câu ".$i.": ".$row1['NOIDUNG']."</p>";
					$arr = [];
					array_push($arr,$row1['DAPAN']);
					$sql2 = "SELECT * FROM DAPANSAI WHERE MACAUHOI = '".$row1['MACAUHOI']."'";
					$query2 = mysqli_query($conn, $sql2);
					while($row2 = mysqli_fetch_array($query2)){
						array_push($arr,$row2['NOIDUNG']);
					}
					shuffle($arr);
					echo "<div class=\"answerbox\">";
					echo "<a href=\"#\" title=\"\" class=\"answer cau".$i." a".$i."a\" onclick='cl(\"cau".$i."-a".$i."a\",event,\"".$i."a\",\"nd".$i."\")'>A. ".$arr[0]."</a>";
					echo "<a href=\"#\" title=\"\" class=\"answer cau".$i." b".$i."a\" onclick='cl(\"cau".$i."-b".$i."a\",event,\"".$i."b\",\"nd".$i."\")'>B. ".$arr[1]."</a>";
					echo "<a href=\"#\" title=\"\" class=\"answer cau".$i." c".$i."a\" onclick='cl(\"cau".$i."-c".$i."a\",event,\"".$i."c\",\"nd".$i."\")'>C. ".$arr[2]."</a>";
					echo "<a href=\"#\" title=\"\" class=\"answer cau".$i." d".$i."a\" onclick='cl(\"cau".$i."-d".$i."a\",event,\"".$i."d\",\"nd".$i."\")'>D. ".$arr[3]."</a>";
					echo "</div>";
					echo "<label id=\"dapan".$i."\">Đừng vô đây tìm đáp án làm gì, không có đâu. </label>";
					echo "</div>";
					$i = $i+1;
				}
			?>

			<?php
				echo "<a href=\"#\" title=\"\" class=\"bt_blue\" id=\"done_ex\" onclick='submit_ex(\"".$exname."\",\"".$lession."\",event,\"".$mabt."\")''>Nộp bài</a>"
			?>
			
			<!-- <div class="questionbox">
				<p>Câu 1: Nội dung câu hỏi 1</p>
				<div class="answerbox">
					<a href="#" title="" class="answer cau1 a1a" onclick='cl("cau1-a1a",event,"1a")'>A. Nội dung đáp án A</a>
					<a href="#" title="" class="answer cau1 b1a" onclick='cl("cau1-b1a",event,"1b")'>B. Nội dung đáp án B</a>
					<a href="#" title="" class="answer cau1 c1a" onclick='cl("cau1-c1a",event,"1c")'>C. Nội dung đáp án C</a>
					<a href="#" title="" class="answer cau1 d1a" onclick='cl("cau1-d1a",event,"1d")'>D. Nội dung đáp án D</a>
				</div>
			</div> -->
		</div>
    </main>
     <?php
        include "./includes/footer.php";
    ?> 
</body>
</html>