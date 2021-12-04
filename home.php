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
        <div class="slide-container">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-7 m-7 c-0">
                        
                        <div class="slideshow-wrap">

                            <div class="mySlides-1 fade">
                                <img id="slide-img-1" class="slide-img" src="./assets/img/slide-1.png" alt="Hình ảnh slide">
                                
                            </div>

                            <div class="mySlides-1 fade">
                                
                                <img id="slide-img-2" class="slide-img" src="./assets/img/slide-2.jpg" alt="Hình ảnh slide">
                                
                            </div>

                            <div class="mySlides-1 fade">
                                
                                <img id="slide-img-3" class="slide-img" src="./assets/img/slide-3.jpg" alt="Hình ảnh slide">
                                
                            </div>
                        </div>

                        <div class="dots" style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span> 
                            <span class="dot" onclick="currentSlide(2)"></span> 
                            <span class="dot" onclick="currentSlide(3)"></span> 
                        </div>

                        <script>
                            var slideIndex_1=1;
                            const slides_1 = document.getElementsByClassName("mySlides-1");
                            const dots = document.getElementsByClassName("dot");
                            showSlides_1(slideIndex_1);


                            function currentSlide(n) {
                            showSlides_1(slideIndex_1 = n);
                            }

                            function showSlides_1(n) {
                                var i;
                                // var slides = document.getElementsByClassName("mySlides");
                                // var dots = document.getElementsByClassName("dot");
                                if (n > slides_1.length) {slideIndex_1 = 1}    
                                if (n < 1) {slideIndex_1 = slides_1.length}
                                for (i = 0; i < slides_1.length; i++) {
                                    slides_1[i].style.display = "none";
                                }
                                for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" active", "");
                                }
                                slides_1[slideIndex_1-1].style.display = "block";  
                                dots[slideIndex_1-1].className += " active";
                                
                                //chuyển đến slide tiếp theo
                                slideIndex_1++;
                                //nếu đang ở slide cuối cùng thì chuyển về slide đầu
                                if (slideIndex_1 > slides_1.length) {
                                slideIndex_1 = 1;
                                }    
                                //tự động chuyển đổi slide sau 5s
                                setTimeout(showSlides_1, 5000);
                            }

                            
                        </script>
                    </div>
                    <div class="col l-5 m-5 c-12">
                        <div class="slide-content">
                            <div class="slide-title">
                                <div class="main-title title">Online courses</div>
                                <div class="sub-title title">and distance education</div>
                            </div>
                            <ul class="slide-desc">
                                <li>
                                    <i class="far fa-check-square"></i>
                                    <p>Hệ thống học tiếng Anh
                                    <br/>
                                    <span>toàn diện cho người mới bắt đầu</span></p>
                                </li>
                                <li>
                                    <i class="far fa-check-square"></i>
                                    <p>TẮM tiếng Anh hằng ngày với: 
                                    <br/>
                                    <span>Class - Club - E-learning - Community</span></p>
                                </li>
                                <li>
                                    <i class="far fa-check-square"></i>    
                                    <p>Cơ hội gặp gỡ và tiếp xúc <span>với các diễn giả, trải nghiệm các dự án cộng đồng</span></p>
                                </li>
                            </ul>
                            <a href= "newcourses.php" class="slide-btn btn btn--large">Đăng Ký Học Ngay</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- giới thiệu school shine -->
        <div class="home-background img">
            <div class="grid wide">
                <div class="row-home">
                    <div class="col-home">
                        <h2 class="home_header" style="padding-top: 10px;">Giới thiệu School Shine</h2>
                        <div class="home-section" style="justify-content: center; align-items: center; display: flex; flex-direction: column;">
                            <p class="home-desc">School Shine đem đến một môi trường học tập tiện ích cùng ứng dụng công nghệ hiện đại giúp học viên dễ dàng quản lý thời gian biểu, tiết kiệm chi phí và nhanh chóng đạt được mục tiêu học tập. Được quản lý và vận hành bởi những sáng lập viên tâm huyết và có nhiều kinh nghiệm trong lĩnh vực giáo dục Tiếng Anh online – tiếng Anh trực tuyến, School Shine cam kết luôn mang đến cho học viên chất lượng đào tạo và dịch vụ học tiếng Anh online – học tiếng Anh trực tuyến tốt nhất.</p>
                            <div style="margin-top: 30px;">
                                <a class="btn btn--medium btn--green" href="aboutus.php">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-home home-img">
                        <img src="./assets/img/home-1.png" alt="giới thiệu school shine"> 
                    </div>
                </div>
                    
            </div>
        
            

            <div class="grid wide">
                <div class="row-home">
                    <div class="col-home home-img">
                        <img src="./assets/img/home-2.jpg" alt="đội ngũ giảng viên">
                    </div>
                    <div class="col-home"> 
                        <h2 class="home_header" style="padding-top: 10px;">Đội ngũ giảng viên</h2>
                        <div class="home-section" style="justify-content: center; align-items: center; display: flex; flex-direction: column;">
                            <p class="home-desc">Tự hào là một trong những đơn vị đầu tiên giảng dạy theo phương pháp truyền cảm hứng với mô hình đào tạo S-SMART kết hợp dạy bảng và slide một cách thông minh. Nhờ phương pháp này, hàng nghìn học viên và giáo viên của Anh ngữ School Shine đều được đồng bộ hóa về giá trị đào tạo. Với mong muốn lan toả nhiều hơn những giá trị đào tạo và khai phá tiềm năng của học viên, chúng tôi sẽ không chỉ dừng lại ở 5 cơ sở tại TP. HCM mà còn đến với các tỉnh thành khác trên toàn quốc.</p>
                            <div style="margin-top: 30px;">
                                <a class="btn btn--medium btn--green" href="teacher-list.php">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>


        <!-- tại sao lại chọn school shine -->
        <div class="home-background color">
            <div class="grid wide">
                <h2 class="home_header">Tại sao chọn chúng tôi?</h2>
                <div class="row home-section">
                    <div class="col l-3 m-3 c-6">
                        <div class="into_item">
                            <i class="fas fa-user-graduate"></i>
                            <p>Đào tạo hơn 10.000 bạn trẻ mất gốc tiếng Anh, sở hữu chứng chỉ TOIEC, IELTS, VNU-EPT với điểm số cao.</p>
                        </div>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <div class="into_item">
                            <i class="fas fa-book-open"></i>
                            <p>Lộ trình học tại trung tâm 2Eng được thiết kế theo giáo trình riêng, rõ ràng, tinh gọn và hiệu quả.</p>
                        </div>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <div class="into_item">
                            <i class="fas fa-users"></i>
                            <p>Đội ngũ giảng viên, trợ giảng chuyên nghiệp đến từ các trường đại học danh tiếng trong và ngoài nước.</p>
                        </div>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <div class="into_item">
                            <i class="fas fa-medal"></i>
                            <p>Cam kết đầu ra bằng văn bản với học viên.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- khóa học tiêu biểu -->
        <div class="home-background">
            <div class="grid wide">
                <h2 class="home_header">Các khóa học tiêu biểu</h2>
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
                <a href="allcourses.php" title="" class="view_all"> <i class="fas fa-graduation-cap"></i> XEM TẤT CẢ KHÓA HỌC</a>
            </div>
        </div>

        <!-- cảm nhận của học viên -->
        <div class="slide-student">
            <div class="grid wide">
                <div class="slideshow-wrap">
                    <div class="mySlides-2 fade">
                        <div class="slide-item">
                            <div class="slide-item--avatar">
                                <img src="./assets/img/student-1.jpg">
                            </div>
                            <div class="slide-item--des">
                                <p>School Shine là có những khóa học thật tuyệt vời, nó đã cải thiện trình độ anh văn của tôi rất nhiều. Cảm ơn thầy cô rất là nhiệt tình ở Shool SHine.</p>
                            </div>
                            <div class="slide-item--author">
                                <p>Duyên</p>
                            </div>
                        </div>
                    </div>
                    <div class="mySlides-2 fade">
                        <div class="slide-item">
                            <div class="slide-item--avatar">
                                <img src="./assets/img/student-1.jpg">
                            </div>
                            <div class="slide-item--des">
                                <p>School Shine là có những khóa học thật tuyệt vời, nó đã cải thiện trình độ anh văn của tôi rất nhiều. Cảm ơn thầy cô rất là nhiệt tình ở Shool SHine.</p>
                            </div>
                            <div class="slide-item--author">
                                <p>Quỳnh</p>
                            </div>
                        </div>
                    </div>
                    <div class="mySlides-2 fade">
                        <div class="slide-item">
                            <div class="slide-item--avatar">
                                <img src="./assets/img/student-1.jpg">
                            </div>
                            <div class="slide-item--des">
                                <p>School Shine là có những khóa học thật tuyệt vời, nó đã cải thiện trình độ anh văn của tôi rất nhiều. Cảm ơn thầy cô rất là nhiệt tình ở Shool SHine.</p>
                            </div>
                            <div class="slide-item--author">
                                <p>Thúy</p>
                            </div>
                        </div>
                    </div>
                    <a class="slide-prev" onclick="plus_slides(-1)">&#10094</a>
                    <a class="slide-next" onclick="plus_slides(1)">&#10095</a>
                    
                </div>
                <script>
                    var slideIndex_2 = 1;
                    const slides_2 = document.getElementsByClassName("mySlides-2");
                    showSlides_2(slideIndex_2);

                    function plus_slides(m) {
                    showSlides_2(slideIndex_2 += m);
                    }

                    function showSlides_2(m) {
                        var j;
                        if (m > slides_2.length) {slideIndex_2 = 1}    
                        if (m < 1) {slideIndex_2 = slides_2.length}
                        for (j = 0; j < slides_2.length; j++) {
                            slides_2[j].style.display = "none";  
                        }
                        slides_2[slideIndex_2-1].style.display = "block";  
                      
                        //chuyển đến slide tiếp theo
                        slideIndex_2++;
                        //nếu đang ở slide cuối cùng thì chuyển về slide đầu
                        if (slideIndex_2 > slides_2.length) {
                        slideIndex_2 = 1;
                        }    
                        //tự động chuyển đổi slide sau 5s
                        setTimeout(showSlides_2, 500000000);
                    }
                            
                </script>
                
            </div>
        </div>

        <!-- nút ontop -->
        <?php
            include "./includes/btntop.php";
        ?>

        <!-- chatbox -->
        <?php
            include "./includes/chatbot.php";
        ?>
    </main>
    <?php
        include "./includes/footer.php";
    ?>
</body>
</html>