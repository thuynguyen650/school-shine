<?php
    include "./includes/head.php";
?>
<body>
    <?php
        include "./includes/header.php";
    ?>
    <main>
        <div class="slide-container">
            <div class="grid">
                <div class="row">
                    <div class="col l-7 m-7 c-0">
                        
                        <div class="slideshow-wrap">

                            <div class="mySlides-1 fade">
                                <img class="slide-img" src="./assets/img/slide-1.jpg" alt="Hình ảnh slide">
                                
                            </div>

                            <div class="mySlides-1 fade">
                                
                                <img class="slide-img" src="./assets/img/slide-2.jpg" alt="Hình ảnh slide">
                                
                            </div>

                            <div class="mySlides-1 fade">
                                
                                <img  class="slide-img" src="./assets/img/slide-3.jpg" alt="Hình ảnh slide">
                                
                            </div>
                        </div>
                        <br>

                        <div style="text-align:center">
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
                            <div class="slide-desc">Trung tâm Anh ngữ hàng đầu Việt Nam, cung cấp chương trình đào tạo chất lượng với mức học phí hợp lý, phương pháp giảng dạy sinh động, môi trường học tập tương tác cao! </div>
                            <button class="slide-btn btn btn--large">Đăng Ký Học Ngay</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- giới thiệu school shine -->
        <div class="home-background-img">
            <div class="grid wide">
                <div class="row-home">
                    <div class="col-home">
                        <h2 class="home_header" style="padding-top: 10px;">Giới thiệu School Shine</h2>
                        <div class="home-section" style="justify-content: center; align-items: center; display: flex; flex-direction: column;">
                            <p style="color: var(--secondary-color); text-align: justify;">Tự hào là một trong những đơn vị đầu tiên giảng dạy theo phương pháp truyền cảm hứng với mô hình đào tạo S-SMART kết hợp dạy bảng và slide một cách thông minh. Nhờ phương pháp này, hàng nghìn học viên và giáo viên của Anh ngữ 2Eng đều được đồng bộ hóa về giá trị đào tạo. Với mong muốn lan toả nhiều hơn những giá trị đào tạo và khai phá tiềm năng của học viên, chúng tôi sẽ không chỉ dừng lại ở 5 cơ sở tại TP. HCM mà còn đến với các tỉnh thành khác trên toàn quốc.</p>
                            <div style="margin-top: 30px;">
                                <a class="btn btn--large btn--green" href="#">Xem chi tiết</a>
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
                            <p style="color: var(--secondary-color); text-align: justify;">Tự hào là một trong những đơn vị đầu tiên giảng dạy theo phương pháp truyền cảm hứng với mô hình đào tạo S-SMART kết hợp dạy bảng và slide một cách thông minh. Nhờ phương pháp này, hàng nghìn học viên và giáo viên của Anh ngữ School Shine đều được đồng bộ hóa về giá trị đào tạo. Với mong muốn lan toả nhiều hơn những giá trị đào tạo và khai phá tiềm năng của học viên, chúng tôi sẽ không chỉ dừng lại ở 5 cơ sở tại TP. HCM mà còn đến với các tỉnh thành khác trên toàn quốc.</p>
                            <div style="margin-top: 30px;">
                                <a class="btn btn--large btn--green" href="#">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>


        <!-- tại sao lại chọn school shine -->
        <div class="home-background-color">
            <div class="grid wide">
                <h2 class="home_header">Tại sao lại chọn chúng tôi</h2>
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
        <div class="grid wide">
            <h2 class="home_header">Khóa học tiêu biểu</h2>

        </div>

        <!-- cảm nhận của học viên -->
        <div class="slide-student">
            <div class="grid wide">
                <h2 class="home_header" style="color: var(--white-color);">Cảm nhận của học viên</h2>
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
                        setTimeout(showSlides_2, 5000);
                    }
                            
                </script>
                
            </div>
        </div>

        <!-- nút ontop -->
        <button id="btn-ontop" class="btn btn--small btn--green btn-ontop" onclick="btnonTop()">&#94</button>
        <script>
            var btntop = document.getElementById("btn-ontop");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                    btntop.style.display = "block";
                } else {
                    btntop.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function btnonTop() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
       
    </main>
    

    <?php
        include "./includes/footer.php";
    ?>
</body>
</html>