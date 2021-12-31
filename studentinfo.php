
<!DOCTYPE html>
<html style="pointer-events: none;">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SchoolShine: Student</title>
	<link rel="stylesheet" href="assets/css/buycourse.css">
	<link rel="stylesheet" href="assets/css/usermng.css">
	<link rel="stylesheet" type="text/css" href="FontAwesome/css/all.css">
	<script src="assets/scripts/studentinfo.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<?php
    include "./includes/head.php";
?> 
<body <?php 
		include "connect.php";
        $studentcode = $_POST['studentcode'];
        $sql = "SELECT * FROM TAIKHOAN where MATK =". '\'' .$studentcode. '\'';
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		echo 'onload= "student_setup([\''.$row['HOTEN'].'\',\''.$row['EMAIL'].'\',\''.$row['SDT'].'\',\''.$row['DIACHI'].'\']);"'
	 ?>>
	<?php
        include "./includes/header.php";
    ?>
    <main>
    	<div class="panel">
			<div class="checkout_title">
				<?php 
					echo('<p>'.$row['HOTEN'].'</p>')
				?>
				<!-- phpcode -->

			</div>
			
		</div>
		<div class="user">
			<div class="bio">
				<div class="info" id="info">		
				</div>
			</div>
			<div class="course" id="course">
				<i class="fas fa-chalkboard-teacher icon"></i>
				<?php 
					echo "<span>Các khóa học của ".$row['HOTEN']."</span>"
				?>
				
				<?php 
					$sql1 = "SELECT * FROM THAMGIA where MAHV =". '\'' .$row['MATK']. '\'';
					$query1 = mysqli_query($conn, $sql1);
					$j = 1;
					while($row1 = mysqli_fetch_array($query1)){
							echo "<div class=\"_1course\">";
							echo "<i class=\"fas fa-book-open iconmini\"></i>";
							echo "<a href=\"#\" title=\"\">".$row1['MAKH']." <i class=\"far fa-plus-square showex\" id=\"course".$j."\"></i></a>";
							echo "</div>";
							$j = $j+1;
					}
				?>
			</div>
			
		</div>
    </main>
    <?php
        include "./includes/footer.php";
    ?> 
</body>
</html>