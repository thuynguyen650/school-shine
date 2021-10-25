<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tất cả khóa học</title>
	<link rel="stylesheet" href="assets/css/courses.css">
	<link rel="stylesheet" type="text/css" href="FontAwesome/css/all.css">
	<script src="assets/scripts/course_filter.js" type="text/javascript" charset="utf-8" async defer></script>
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
						<h1>Tất Cả Khóa Học</h1>
					</div>

					<div class="page-breadcrumb">
							<a class="page-banner-item" href="">Trang chủ</a>
							<i class="page-banner-icon fas fa-arrow-right"></i>

							<a class="page-banner-item" href="">Khóa học</a>
							<i class="page-banner-icon fas fa-arrow-right"></i>

							<span class="page-banner-item">Tất cả khóa học</span>
					</div>
				</div>
				
			</div>
		</div>
	<!-- Phần này dùng để lọc khóa học theo kĩ năng -->
		<div class="page-content">
			<div class="grid wide">
				<div class="listfields">
					<a href="#" title="" class="field" onclick="showAll(event);">All</a>
					<a href="#" title="" class="field" onclick="showWriting(event);">Writing Skill</a>
					<a href="#" title="" class="field" onclick="showReading(event);">Reading Skill</a>
					<a href="#" title="" class="field" onclick="showListening(event);">Listening Skill</a>
					<a href="#" title="" class="field" onclick="showSpeaking(event);">Speaking Skill</a>
					<a href="#" title="" class="field" onclick="showFull(event);">Full SKill</a>
					<a href="#" title="" class="field" onclick="showCommunication(event);">Communication SKill</a>
				</div>
				<!-- Phần này dùng để lọc khóa học theo kĩ năng -->
				<!-- Danh sách các khóa học copy từ file newcourses.php qua -->
				<!-- có 1 class mở rộng đằng sau _1newcourse dùng để nhận biết lọc kĩ năng -->
				<div class="list_courses">
					<?php 
						include "connect.php";
						$sql = "SELECT * FROM KHOAHOC";
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
								echo "<div class=\"_1newcourse ".$row['SKILL']."\" id=\"".$row['SKILL']."\">";
								echo "<div class=\"hover ".$color[rand(0,count($color)-1)]."\">";
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
									<a href=\"buycourse.php\" title=\"Mua khóa ".$row['TENKHOAHOC']."\" class=\"buynow\" onclick=\"buyCourse('".$row['TENKHOAHOC']."','".$row['GIA']."', '".$chuki."')\">Mua ngay</a>
								</div>";
								echo "</div>";
								
								echo "<div class=\"unhover\">
								<div class=\"imgcourse\">	
									<img src=\"".$img[rand(0,count($img)-1)]."\" alt=\"".$row['TENKHOAHOC']."\">
								</div>
								<div class=\"namecourse ".$color[rand(0,count($color)-1)]."\">	
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
					
					<!-- finish 1 course -->
				</div>
			</div>
		</div>
    </main>
	 <?php
        include "./includes/footer.php";
    ?> 
</body>
