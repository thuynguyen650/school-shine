<?php
    include "./includes/head.php";
?>

<?php
    include "./includes/header.php";
?>

<body>
    <main>
        <div class="page-banner-wrap">
            <div class="grid wide">
                <div class="page-banner">
                    <div class="page-title">
                        <h1>Liên hệ</h1>
                    </div>

                    <div class="page-breadcrumb">
                            <a class="page-banner-item" href="">Trang chủ</a>
                            <i class="page-banner-icon fas fa-arrow-right"></i>

                            <a class="page-banner-item" href="">Liên hệ</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="contact-info grid wide">
                <div class="row">
                    <div class="col l-4 m-4 c-12">
                        <div class="contact-item">
                            <i class="far fa-envelope"></i>

                            <div class="contact-info">
                                <a href="mailto:">nhom3.uit@gmail.com</a><br/>
                                <a href="">www.schoolshine.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="col l-4 m-4 c-12">
                        <div class="contact-item">
                            <i class="fas fa-phone-volume"></i>

                            <div class="contact-info">
                                <a href="tel:+">0866.918.123</a><br/>
                                <a href="tel:+">0866.918.123</a>
                            </div>
                        </div>
                    </div>

                    <div class="col l-4 m-4 c-12">
                        <div class="contact-item">
                            <i class="fas fa-search-location"></i>

                            <div class="contact-info">
                            Quarter 6, Linh Trung Ward<br/>
                            Thu Duc District, Ho Chi Minh City
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrapper">
                <div class="contact-form">
                    <div class="grid wide">
                        <h1>Liên Hệ Trung Tâm</h1>
                        <p class='contact-desc'>Mọi thông tin liên lạc của bạn sẽ được bảo mật. School Shine luôn mong muốn nhận được những phản hồi từ các bạn!</p>
                        <form action="">
                            <div class="contact-form-row">
                               <input type="text" class="contact-input" name="contact-name" id="contact-name" placeholder="Name*">
                                <input type="email" class="contact-input" name="contact-email" id="contact-email" placeholder="E-mail*">
                                <select name="contact-subject" id="contact-subject" class="contact-input">
                                    <option value="">Than phiền</option>
                                    <option value="">Khen ngợi</option>
                                    <option value="">Tư vấn/ Đăng ký khóa học</option>
                                    <option value="">Tuyển dụng</option>
                                </select>
                            </div>
                                
                            <div class="contact-form-row">
                                <textarea class="contact-input" name="contact-message" id="contact-message" cols="30" rows="6" placeholder="Message"></textarea>
                            </div>

                            <div class="contact-form-submit">
                                <button class="btn btn--primary btn--medium">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>

            <div class="contact-map">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=University of Information Technology, Ho Chi Minh city&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        </iframe>
                        <a href="https://www.fnfgo.com/">FNF</a>
                    </div>
                    <style>.mapouter{position:relative;text-align:right;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;}.gmap_iframe {width: 100%;height:400px!important;}</style>
                </div>
            </div>
        </div>
    </main>
</body>

<?php
    include "./includes/footer.php";
?>