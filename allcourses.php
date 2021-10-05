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
    <div class="panel">
		<div class="allcourse_title">
			<p>Tất cả khoá học</p>
			<div class="addr">
				<a href="home.php" class="btn_addr">Trang chủ</a>
				<label>&rarr;</label>
				<a href="#" class="btn_addr">Khóa học</a>
				<label>&rarr;</label>
				<a href="#" class="btn_addr">Tất cả khóa học</a>
			</div>
		</div>

	</div>
	<!-- Phần này dùng để lọc khóa học theo kĩ năng -->
	
	
	<div class="listfields">
		<a href="#" title="" class="field" onclick="showAll();">All</a>
		<a href="#" title="" class="field" onclick="showWriting();">Writing Skill</a>
		<a href="#" title="" class="field" onclick="showReading();">Reading Skill</a>
		<a href="#" title="" class="field" onclick="showListening();">Listening Skill</a>
		<a href="#" title="" class="field" onclick="showSpeaking();">Speaking Skill</a>
		<a href="#" title="" class="field" onclick="showFull();">Full SKill</a>
	</div>
	<!-- Phần này dùng để lọc khóa học theo kĩ năng -->
	<!-- Danh sách các khóa học copy từ file newcourses.php qua -->
	<!-- có 1 class mở rộng đằng sau _1newcourse dùng để nhận biết lọc kĩ năng -->
	<div class="list_courses">
		<div class="_1newcourse Writing" id="Writing">
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
		<div class="_1newcourse Full" id="Full">
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
		<div class="_1newcourse Full" id="Full">
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
		<div class="_1newcourse Writing" id="Writing">
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
		<div class="_1newcourse Reading" id="Reading">
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
		<div class="_1newcourse Reading" id="Reading">
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

    </main>
	 <?php
        include "./includes/footer.php";
    ?> 
</body>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tất cả khóa học</title>
	<link rel="stylesheet" href="assets/css/courses.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
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

	<!-- Phần này dùng để lọc khóa học theo kĩ năng -->
	
	
	<div class="listfields">
		<a href="#" title="" class="field" onclick="showAll();">All</a>
		<a href="#" title="" class="field" onclick="showWriting();">Writing Skill</a>
		<a href="#" title="" class="field" onclick="showReading();">Reading Skill</a>
		<a href="#" title="" class="field" onclick="showListening();">Listening Skill</a>
		<a href="#" title="" class="field" onclick="showSpeaking();">Speaking Skill</a>
		<a href="#" title="" class="field" onclick="showFull();">Full SKill</a>
	</div>
	<!-- Phần này dùng để lọc khóa học theo kĩ năng -->
	<!-- Danh sách các khóa học copy từ file newcourses.php qua -->
	<!-- có 1 class mở rộng đằng sau _1newcourse dùng để nhận biết lọc kĩ năng -->
	<div class="list_courses">
		<div class="_1newcourse Writing" id="Writing">
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
		<div class="_1newcourse Full" id="Full">
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
		<div class="_1newcourse Full" id="Full">
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
		<div class="_1newcourse Writing" id="Writing">
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
		<div class="_1newcourse Reading" id="Reading">
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
		<div class="_1newcourse Reading" id="Reading">
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

    </main>
	 <?php
        include "./includes/footer.php";
    ?> 
</body>
</html>