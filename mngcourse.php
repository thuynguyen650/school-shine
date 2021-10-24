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
	<title>Quản lý khóa học</title>
    <link rel="stylesheet" href="assets/css/buycourse.css">
    <link rel="stylesheet" href="assets/css/mngcourse.css">
    <link rel="stylesheet" href="assets/css/usermng.css">
    <script src="assets/scripts/teacher.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<?php
    include "./includes/head.php";
?> 
<body>
	<?php
        include "./includes/header.php";
    ?>
    <main>
    	<div class="panel">
			<div class="checkout_title">
				<!-- <p>Lớp học EL102</p> -->
				<?php 
       				$coursename = $_POST['coursename'];
       				echo "<p>Lớp học ".$coursename."</p>"
				?>
				<!-- phpcode -->

			</div>
			
		</div>
		<div class="mngcourse">
			<div class="participant">
				<p class="title_mngcourse"><i class="fas fa-user-friends icon"></i>Danh sách học viên</p>
				<div class="list_participant">
					<?php 
						$sql = "SELECT * FROM THAMGIA T INNER JOIN TAIKHOAN K on T.MAHV=K.MATK WHERE T.MAKH = '".$_POST['coursename']."'";
						$query = mysqli_query($conn, $sql);
						$i=1;
						while($row = mysqli_fetch_array($query)){
							echo "<form class=\"_1student\"  action=\"studentinfo.php\" method=\"post\" id=\"enterstudent".$i."\">";
							echo "<input type=\"text\" id=\"studentname\" class=\"studentname\" name=\"studentname\" value =\"".$row['HOTEN']."\"/>";
							echo "<input type=\"text\" id=\"studentcode\" class=\"studentname\" name=\"studentcode\" value =\"".$row['MATK']."\"/>";
							echo "<a href=\"#\" title=\"\" class=\"_1participant\" onclick='enterstudent(\"enterstudent".$i."\")'>".$row['HOTEN']."</a>";
							echo "</form>";
							$i++;
						}
					?>
				</div>
			</div>
			<div class="list_homework">
				<p class="title_mngcourse"><i class="fas fa-tasks icon"></i>Danh sách bài tập</p>
				<?php 
					$sql1 = "SELECT * FROM BAITAP WHERE MAKH = '".$_POST['coursename']."'";
					$query1 = mysqli_query($conn, $sql1);
					$i = 1;
					while($row1 = mysqli_fetch_array($query1)){
							echo "<form class=\"_1course\" id=\"do_ex".$i."\" action=\"dohomework.php\" method=\"post\">";
							echo "<input type=\"text\" name=\"exname\" class=\"exname\" value=\"".$coursename."\">";
							echo "<input type=\"text\" name=\"lession\" class=\"exname\" value=\"".$row1['BUOIHOC']."\">";
							echo "<input type=\"text\" name=\"mabt\" class=\"exname\" value=\"".$row1['MABT']."\">";
							echo "<i class=\"fas fa-book-open iconmini\"></i>";
							echo "<a href=\"#\" title=\"\" onclick='do_exercise(\"do_ex".$i."\")'>Bài tập buổi ".$row1['BUOIHOC']."</a>";
							echo "</form>";
							$i = $i+1;
					}
				?>
				<form action="createhomework.php" method="post" accept-charset="utf-8" id="create_ex">
					<?php 
						echo "<input type=\"text\" name=\"coursename\" class=\"coursename\" value=\"".$_POST['coursename']."\">"
					?>
					
					<a class="bt_blue" href="#" onclick="create_ex()"><i class="fas fa-plus-circle"></i> Tạo bài tập</a>
				</form>
				
			</div>

		</div>
    </main>
    <?php
        include "./includes/footer.php";
    ?> 
</body>
</html>