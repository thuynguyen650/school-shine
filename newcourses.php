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
		<div class="_1newcourse" id="Language">
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- blueback = blue background (nền màu xanh) tương tự các màu khác -->
			<div class="hover blueback">
				<h4>
					Luyện thi TOEIC 400+
				</h4>
				<p>
					Khóa học kéo dài 6 tháng. 4 tháng đầu học viên sẽ được rèn luyện 2 kĩ năng Reading và Listening, 2 tháng còn lại 
					sẽ học 2 kĩ năng Speaking và Writing. Chuẩn đầu ra sẽ được đảm bảo như sau: <br>
					Reading + Listening: 550+ <br>
					Speaking + Writing: 200+ <br>
					Thời gian học: 18h - 19h30 thứ 2,4,6 mỗi tuần. <br>
					Thời hạn đăng kí: Đến hết 15/09/2021.
					<label class="mobile_price">Giá 5.400.000đ</label>
				</p>
				<div class="sel">
					<!-- Lưu ý: nút nhấn là thẻ a, không phải thẻ input -->
					<a href="paid_courses.php" title="" class="learnmore" onclick="setWriting()">Tìm hiểu thêm</a>
					<a href="buycourse.php" title="" class="buynow" onclick="buyCourse('Luyện thi TOEIC 400+ (Khoá 1)','5.400.000', 'tháng (demo chu kì')">Mua ngay</a>
				</div>
			</div>
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- Hiển thị thông tin sơ lược -->
			<div class="unhover">
				<div class="imgcourse">	
					<img src="assets/img/Principles of Written English, Part 2.jpg" alt="">
				</div>
				<div class="namecourse blueback">	
					<h4>
						Luyện thi TOEIC 400+
					</h4>
				</div>
				<div class="overview">
					<p class="type blue">Writing Skill</p>
					<p class="cost">235.000đ <label class="period">/ tháng</label>
					</p>	
				</div>
			</div>
			<!-- Hiển thị thông tin sơ lược -->
		</div>
		<!-- finish 1 course -->
		<div class="_1newcourse" id="Marketing">
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- blueback = blue background (nền màu xanh) tương tự các màu khác -->
			<div class="hover greenback">
				<h4>
					Luyện thi TOEIC 400+
				</h4>
				<p>
					Khóa học kéo dài 6 tháng. 4 tháng đầu học viên sẽ được rèn luyện 2 kĩ năng Reading và Listening, 2 tháng còn lại 
					sẽ học 2 kĩ năng Speaking và Writing. Chuẩn đầu ra sẽ được đảm bảo như sau: <br>
					Reading + Listening: 550+ <br>
					Speaking + Writing: 200+ <br>
					Thời gian học: 18h - 19h30 thứ 2,4,6 mỗi tuần. <br>
					Thời hạn đăng kí: Đến hết 15/09/2021.
					<label class="mobile_price">Giá 5.400.000đ</label>
				</p>
				<div class="sel">
					<!-- Lưu ý: nút nhấn là thẻ a, không phải thẻ input -->
					<a href="paid_courses.php" title="" class="learnmore" onclick="setFull()">Tìm hiểu thêm</a>
					<a href="buycourse.php" title="" class="buynow" onclick="buyCourse('Luyện thi TOEIC 400+ (Khoá 2)','5.400.000', 'tháng (demo chu kì')">Mua ngay</a>
				</div>
			</div>
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- Hiển thị thông tin sơ lược -->
			<div class="unhover">
				<div class="imgcourse">	
					<img src="assets/img/Entrepreneurship 101 Who is your customer.jpg" alt="">
				</div>
				<div class="namecourse greenback">	
					<h4>
						Luyện thi TOEIC 400+
					</h4>
				</div>
				<div class="overview">
					<p class="type green">Full Skill</p>
					<p class="cost">5.400.000đ <label class="period"></label>
					</p>	
				</div>
			</div>
			<!-- Hiển thị thông tin sơ lược -->
		</div>
		<!-- finish 1 course -->
		<div class="_1newcourse" id="Social">
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- blueback = blue background (nền màu xanh) tương tự các màu khác -->
			<div class="hover yellowback">
				<h4>
					Luyện thi TOEIC 400+
				</h4>
				<p>
					Khóa học kéo dài 6 tháng. 4 tháng đầu học viên sẽ được rèn luyện 2 kĩ năng Reading và Listening, 2 tháng còn lại 
					sẽ học 2 kĩ năng Speaking và Writing. Chuẩn đầu ra sẽ được đảm bảo như sau: <br>
					Reading + Listening: 550+ <br>
					Speaking + Writing: 200+ <br>
					Thời gian học: 18h - 19h30 thứ 2,4,6 mỗi tuần. <br>
					Thời hạn đăng kí: Đến hết 15/09/2021.
					<label class="mobile_price">Giá 5.400.000đ</label>
				</p>
				<div class="sel">
					<!-- Lưu ý: nút nhấn là thẻ a, không phải thẻ input -->
					<a href="paid_courses.php" title="" class="learnmore" onclick="setFull()">Tìm hiểu thêm</a>
					<a href="buycourse.php" title="" class="buynow" onclick="buyCourse('Luyện thi TOEIC 400+ (Khoá 3)','5.400.000', 'none')">Mua ngay</a>
				</div>
			</div>
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- Hiển thị thông tin sơ lược -->
			<div class="unhover">
				<div class="imgcourse">	
					<img src="assets/img/Evaluating Social Programs.png" alt="">
				</div>
				<div class="namecourse yellowback">	
					<h4>
						Luyện thi TOEIC 400+
					</h4>
				</div>
				<div class="overview">
					<p class="type yellow">Full Skill</p>
					<p class="cost">5.400.000đ<label class="period"></label>
					</p>	
				</div>
			</div>
			<!-- Hiển thị thông tin sơ lược -->
		</div>
		<!-- finish 1 course -->
		<div class="_1newcourse" id="Language">
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- blueback = blue background (nền màu xanh) tương tự các màu khác -->
			<div class="hover greenback">
				<h4>
					Luyện thi TOEIC 400+
				</h4>
				<p>
					Khóa học kéo dài 6 tháng. 4 tháng đầu học viên sẽ được rèn luyện 2 kĩ năng Reading và Listening, 2 tháng còn lại 
					sẽ học 2 kĩ năng Speaking và Writing. Chuẩn đầu ra sẽ được đảm bảo như sau: <br>
					Reading + Listening: 550+ <br>
					Speaking + Writing: 200+ <br>
					Thời gian học: 18h - 19h30 thứ 2,4,6 mỗi tuần. <br>
					Thời hạn đăng kí: Đến hết 15/09/2021.
					<label class="mobile_price">Giá 5.400.000đ</label>
				</p>
				<div class="sel">
					<!-- Lưu ý: nút nhấn là thẻ a, không phải thẻ input -->
					<a href="paid_courses.php" title="" class="learnmore" onclick="setWriting()">Tìm hiểu thêm</a>
					<a href="buycourse.php" title="" class="buynow" onclick="buyCourse('Luyện thi TOEIC 400+ (Khoá 4)','5.400.000', 'tháng (demo chu kì')">Mua ngay</a>
				</div>
			</div>
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- Hiển thị thông tin sơ lược -->
			<div class="unhover">
				<div class="imgcourse">	
					<img src="assets/img/Principles of Written English, Part 1.jpeg" alt="">
				</div>
				<div class="namecourse greenback">	
					<h4>
						Luyện thi TOEIC 400+
					</h4>
				</div>
				<div class="overview">
					<p class="type green">Writing Skill</p>
					<p class="cost">235.000đ <label class="period">/ tháng</label>
					</p>	
				</div>
			</div>
			<!-- Hiển thị thông tin sơ lược -->
		</div>
		<!-- finish 1 course -->
		<div class="_1newcourse" id="Medicine">
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- blueback = blue background (nền màu xanh) tương tự các màu khác -->
			<div class="hover yellowback">
				<h4>
					Luyện thi TOEIC 400+
				</h4>
				<p>
					Khóa học kéo dài 6 tháng. 4 tháng đầu học viên sẽ được rèn luyện 2 kĩ năng Reading và Listening, 2 tháng còn lại 
					sẽ học 2 kĩ năng Speaking và Writing. Chuẩn đầu ra sẽ được đảm bảo như sau: <br>
					Reading + Listening: 550+ <br>
					Speaking + Writing: 200+ <br>
					Thời gian học: 18h - 19h30 thứ 2,4,6 mỗi tuần. <br>
					Thời hạn đăng kí: Đến hết 15/09/2021.
					<label class="mobile_price">Giá 5.400.000đ</label>
				</p>
				<div class="sel">
					<!-- Lưu ý: nút nhấn là thẻ a, không phải thẻ input -->
					<a href="paid_courses.php" title="" class="learnmore" onclick="setReading()">Tìm hiểu thêm</a>
					<a href="buycourse.php" title="" class="buynow" onclick="buyCourse('Luyện thi TOEIC 400+ (Khoá 5)','5.400.000', 'tháng (demo chu kì')">Mua ngay</a>
				</div>
			</div>
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- Hiển thị thông tin sơ lược -->
			<div class="unhover">
				<div class="imgcourse">	
					<img src="assets/img/Introduction to Biomedical Imaging.jpg" alt="">
				</div>
				<div class="namecourse yellowback">	
					<h4>
						Luyện thi TOEIC 400+
					</h4>
				</div>
				<div class="overview">
					<p class="type yellow">Reading Skill</p>
					<p class="cost">300.000đ <label class="period"> / tháng</label>
					</p>	
				</div>
			</div>
			<!-- Hiển thị thông tin sơ lược -->
		</div>
		<!-- finish 1 course -->
		<div class="_1newcourse" id="Computer">
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- blueback = blue background (nền màu xanh) tương tự các màu khác -->
			<div class="hover blueback">
				<h4>
					Luyện thi TOEIC 400+
				</h4>
				<p>
					Khóa học kéo dài 6 tháng. 4 tháng đầu học viên sẽ được rèn luyện 2 kĩ năng Reading và Listening, 2 tháng còn lại 
					sẽ học 2 kĩ năng Speaking và Writing. Chuẩn đầu ra sẽ được đảm bảo như sau: <br>
					Reading + Listening: 550+ <br>
					Speaking + Writing: 200+ <br>
					Thời gian học: 18h - 19h30 thứ 2,4,6 mỗi tuần. <br>
					Thời hạn đăng kí: Đến hết 15/09/2021.
					<label class="mobile_price">Giá 5.400.000đ</label>
				</p>
				<div class="sel">
					<!-- Lưu ý: nút nhấn là thẻ a, không phải thẻ input -->
					<a href="paid_courses.php" title="" class="learnmore" onclick="setReading()">Tìm hiểu thêm</a>
					<a href="buycourse.php" title="" class="buynow" onclick="buyCourse('Luyện thi TOEIC 400+ (Khoá 6)','5.400.000', 'tháng (demo chu kì')">Mua ngay</a>
				</div>
			</div>
			<!-- Hiển thị thông tin chi tiết khi hover vào -->
			<!-- Hiển thị thông tin sơ lược -->
			<div class="unhover">
				<div class="imgcourse">	
					<img src="assets/img/Introduction to Computer Science.jpg" alt="">
				</div>
				<div class="namecourse blueback">	
					<h4>
						Luyện thi TOEIC 400+
					</h4>
				</div>
				<div class="overview">
					<p class="type blue">Reading Skill</p>
					<p class="cost">300.000đ <label class="period">/ tháng</label>
					</p>	
				</div>
			</div>
			<!-- Hiển thị thông tin sơ lược -->
		</div>
		<!-- finish 1 course -->
	</div>
			</div>
		</div>

	<!-- Thông tin các khóa học -->
	<a href="allcourses.php" title="" class="view_all"> <i class="fas fa-graduation-cap"></i> XEM TẤT CẢ KHÓA HỌC</a>
	</main>
	 <?php
        include "./includes/footer.php";
    ?> 
</body>
</html>