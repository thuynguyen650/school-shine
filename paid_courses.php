<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tìm hiểu thêm</title>
	<link rel="stylesheet" href="assets/css/paid_courses.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script src="assets/scripts/vote.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<?php
    include "./includes/head.php";
?> 
<body onload="setUp()">
	<?php
        include "./includes/header.php";
    ?>
	<main>
	<div class="panel">
		<div class="filter">
			<div class="icon">
				<i class="fas fa-chart-line icon_course"></i> <br>
				<a href="" title="" id="field_name">Computers, Marketing</a>
				<p>___________________</p>
			</div>
			<div class="content_big">
				<h3>Video hướng dẫn sử dụng Microsoft Teams để tham gia các khóa học trực tuyến</h3> <br>
				<a href="" title="">Xem Video hướng dẫn</a>
			</div>
		</div>
	</div>
	<div class="info">
		<div class="time_details">
			<p><i class="far fa-clock"></i><label for="">Kết thúc vào <a href="" title="" class="finish">ngày 2 tháng 4 năm 2022</a></label><label for="" class="time_attend">
				| từ 17:00 - 19:00  
			</label>
			<label for="" class="length">
				| Thời gian lý tưởng trong vòng 5 tháng 
			</label>
			</p>
		</div> 
		<div class="about_course">
			<div class="info_course">
				<p class="about">
					Về các khóa học
				</p>
				<p>
					Các khóa học của chúng tôi được thiết kế dành cho cả các bạn sinh viên và những người đang đi làm. Với nhiều khóa học cùng với việc 
					sắp xếp thời gian một cách linh động, các bạn hoàn toàn có thể làm chủ thời gian của mình. <br> <br>
				</p>
				<p>Bạn có thể xem qua một vài video dạy thử bằng cách đăng nhập tài khoản ở dưới: <br>
				Tài khoản: <strong>test_customer </strong><br>
				Mật khẩu: <strong>test</strong> <br>
				Mục đích cuối cùng của chúng tôi là sự hài lòng của bạn, hãy bỏ ra thời gian xem thử bài giảng của chúng tôi để đánh giá mức độ phù hợp của bạn.
				 Sau đó hãy quyết định xem có nên mua hay không.</p> <br>
				 <em class="survey_desk">Nếu bạn đã kết thúc khóa học này, hãy làm một bài khảo sát nhanh ở bên phải để chúng tôi có thể nâng cao chất lượng dịch vụ.<br></em> 
				 <em class="survey_mobile">Nếu bạn đã kết thúc khóa học này, hãy làm một bài khảo sát nhanh bên dưới để chúng tôi có thể nâng cao chất lượng dịch vụ.</em> <br> 
				<a href="index.php" title="" class="btn_paid_course">Chuyển về trang chủ</a>
			</div>
			<!-- Phần này đánh giá chất lượng khóa học -->
			<div class="chart">
				<form class="vote">
					<fieldset class="field">
						<legend>Đánh giá chất lượng khóa học.</legend>
						<label> <br>Chất lượng bài giảng:</label> <br>
						<input type="range" min="1" max="100" value="50" id="tutorial" class="tutorial slider" oninput="changeTutorial();">
						<label id="val_tutorial"> 50% </label><br> <br>
						<label>Kĩ năng thực hành:</label> <br>
						<input type="range" min="1" max="100" value="50" id="training" class="training slider" oninput="changeTraining();">
						<label id="val_training"> 50% </label><br> <br>
						<label>Giảng viên:</label> <br>
						<input type="range" min="1" max="100" value="50" id="teacher" class="teacher slider" oninput="changeTeacher();">
						<label id="val_teacher"> 50% </label><br> <br>
						<label>Mức giá:</label> <br>
						<input type="range" min="1" max="100" value="50" id="price" class="price slider" oninput="changePrice();">
						<label id="val_price"> 50% </label><br> <br>
						<div class="acpt">
							<a href="" title="" class="btn_paid_course">Hoàn thành khảo sát</a>
						</div>
					</fieldset>

				</form>
				<div class="avg">
					<label class="summa">Đây sẽ là chỉ số đánh giá chất lượng của khóa học sau khi bạn nhấn nút hoàn thành. Thông tin người làm khảo sát sẽ được ẩn danh.</label>
					<label class="percent" id="percent">50%</label>
				</div>
			</div>
			<!-- Hết phần đánh giá chất lượng khóa học -->
		</div>
		<div class="more">
			<div class="plan">
				<p class="about">
					Một vài hướng dẫn khác
				</p>
				<ul>
					<li><p><i class="fas fa-circle"></i><a href="" title="" class="need">Sử dụng hệ thống Moodle để nộp bài tập.</a> <label> | 19/03/2021 bởi </label>
					<a href="" title="" class="author">Thành Nhân</a> <br>Trong suốt quá trình học, sẽ có một vài bài tập nhỏ để chúng tôi đánh giá mức tiến bộ của bạn, bài viết này sẽ hướng dẫn bạn làm việc với Moodle, hệ thống đánh giá bài tập của chúng tôi.</p> <br>	</li>
					<li><p><i class="fas fa-circle"></i><a href="" title="" class="need">Một vài ứng dụng tự luyện tập thêm ở nhà</a> <label> | 20/6/2021 bởi </label>
					<a href="" title="" class="author">Cẩm Duyên</a> <br>Ngoài việc học ở trung tâm, nếu có thời gian rảnh, các bạn nên luyện tập thêm một vài kĩ năng khác bằng các ứng dụng miễn phí có sẵn trên AppStore, Play Store. Bài viết này chúng tôi sẽ giới thiệu một vài ứng dụng cho các bạn.</p><br>	</li>
					<li><p><i class="fas fa-circle"></i><a href="" title="" class="need">Khắc phục một vài sự cố khi mua hoặc tham gia khóa học</a> <label> | 20/6/2021 bởi </label>
					<a href="" title="" class="author">Thúy Nguyễn</a> <br>Để các bạn nắm rõ hơn về các phương thức thanh toán khi mua khóa học, đồng thời nắm rõ hơn về cách tham gia các lớp học. Hãy đọc bài viết này để giải đáp các thắc mắc.</p><br></li>
					<li><p><i class="fas fa-circle"></i><a href="" title="" class="need">Kĩ năng làm việc nhóm khi học online</a> <label> | 20/6/2021 bởi </label>
					<a href="" title="" class="author">Quỳnh Như</a> <br>Tuy rằng các khóa sẽ hoàn toàn giảng dạy một cách trực tuyến, nhưng chúng ta cũng sẽ có một vài bài tập nhóm và các bạn sẽ có cơ hội nâng cao kĩ năng teamwork thông qua công cụ Trello. Bài viết này sẽ hướng dẫn các bạn sử dụng công cụ trên.</p><br></li>
				</ul>
			</div>
			<!-- Phần hiển thị vị trí của trường -->
			<div class="location">
				<p class="about">
					Địa điểm
				</p>
				<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.231171196225!2d106.80086541531658!3d10.870014160430358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiDEkEhRRyBUUC5IQ00!5e0!3m2!1svi!2s!4v1632038661345!5m2!1svi!2s" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
				<p class="location_name"><i class="fas fa-map-marked-alt"></i>Khu phố 6, Phường Linh Trung, Thành phố Thủ Đức, Thành phố Hồ Chí Minh.</p>
			</div>
			<!-- Hết phần hiển thị vị trí của trường -->
		</div>
	</div>
	</main>
	<?php
        include "./includes/footer.php";
    ?> 
</body>
</html>