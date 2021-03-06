<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Các khóa học mới</title>
	<link rel="stylesheet" href="assets/css/courses.css">
	<link rel="stylesheet" type="text/css" href="FontAwesome/css/all.css">
	<script src="assets/scripts/vote.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<?php
    include "./includes/head.php";
?> 
<body>
	<?php
        include "./includes/header.php";
    ?>
	<main>
		<div class="page-banner-wrap">
			<div class="grid wide">
				<div class="page-banner">
					<div class="page-title">
						<h1>Các Khóa Học Mới</h1>
					</div>

					<div class="page-breadcrumb">
							<a class="page-banner-item" href="">Trang chủ</a>
							<i class="page-banner-icon fas fa-arrow-right"></i>

							<a class="page-banner-item" href="">Khóa học</a>
							<i class="page-banner-icon fas fa-arrow-right"></i>

							<span class="page-banner-item">Các khóa học mới</span>
					</div>
				</div>
				
			</div>
		</div>
		<div class="page-content">
			<div class="grid wide">
				<div class="list_courses">
					<?php 
						include "connect.php";
						$sql = "SELECT * FROM KHOAHOC WHERE TINHTRANG=1";
						$query = mysqli_query($conn, $sql);
						$i=0;
						$chuki = '';
						$color = array("blueback", "greenback", "yellowback");
						$img = array("assets/img/Principles of Written English, Part 2.jpg", "assets/img/Entrepreneurship 101 Who is your customer.jpg","assets/img/Evaluating Social Programs.png",
									"assets/img/Principles of Written English, Part 1.jpeg","assets/img/Introduction to Biomedical Imaging.jpg", "assets/img/Introduction to Computer Science.jpg");
						while($row = mysqli_fetch_array($query)){
							if ($i == 6)
							{
								break;
							}
							else
							{
								$clor = $color[rand(0,count($color)-1)];
								echo "<div class=\"_1newcourse\" id=\"Language\">";
								echo "<div class=\"hover ".$clor."\">";
								echo "<h4> ".$row['TENKHOAHOC']." </h4>";
								echo "<p>".$row['MOTA']."<br> Ngày bắt đầu: ".$row['NGAYBATDAU']."<br> Ca: ".$row['CA']." <br>
								Thứ: ".$row['THU']."<label class=\"mobile_price\">Giá: ".$row['GIA'];
								if (strcmp($row['CHUKI'], '1') == 0)
								{
									$chuki = 'tháng';
									echo "/ tháng";
								}
								else{
									$chuki = 'none';
								}
								echo "</label></p>";
								echo "<div class=\"sel\">
									<a href=\"paid_courses.php\" title=\"Tìm hiểu thêm về các khóa học.\" class=\"learnmore\" onclick=\"setWriting()\">Tìm hiểu thêm</a>
									<a href=\"#\" title=\"Mua khóa ".$row['TENKHOAHOC']."\" class=\"buynow\" onclick='buyCourse(\"".$row['MAKH']."\",\"".$row['TENKHOAHOC']."\",\"".$row['GIA']."\", \"".$chuki."\", \"".$_COOKIE['userid']."\")'>Mua ngay</a>
								</div>";
								echo "</div>";
								
								echo "<div class=\"unhover\">
								<div class=\"imgcourse\">	
									<img src=\"".$img[rand(0,count($img)-1)]."\" alt=\"".$row['TENKHOAHOC']."\">
								</div>
								<div class=\"namecourse ".$clor."\">	
									<h4>
										".$row['TENKHOAHOC']."
									</h4>
								</div>
								<div class=\"overview\">
									<p class=\"type blue\">".$row['SKILL']."</p>
									<p class=\"cost\">".$row['GIA']."đ <label class=\"period\">";
									if (strcmp($row['CHUKI'], '1') == 0)
									{
										echo "/ tháng";
									}
									
								echo "</label>
									</p>	
								</div>
								</div>
								</div>";
								$i++;
							}
						}
					?>
					
					</div>
				</div>
				<a href="allcourses.php" title="" class="view_all"> <i class="fas fa-graduation-cap"></i> XEM TẤT CẢ KHÓA HỌC</a>
			</div>

	<!-- Thông tin các khóa học -->
	
	</main>
	<!-- nút ontop -->
		<?php
            include "./includes/btntop.php";
        ?>

        <!-- chatbox -->
        <?php
            include "./includes/chatbot.php";
        ?>
	 <?php
        include "./includes/footer.php";
    ?> 
</body>
</html>