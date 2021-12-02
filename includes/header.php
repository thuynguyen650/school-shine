<script>
    function gotoTeacher(){
        window.location.href = "teacher.php";
    }
    function gotoStudent(){
        window.location.href = "student.php";
    }
    function logout(){
        const xhr = new XMLHttpRequest();
        xhr.onload = function(){
           window.location.href = "http://localhost/school-shine/home.php";
        }
        xhr.open("POST","logout.php");
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }
    function login(){
        window.location.href = "http://localhost/school-shine/login.php";
    }
</script>
<span onclick="gotoTeacher()"></span>
<header class="header preload">
    <div class="grid wide">
        <div class="sub-header">
            <div class="header-contact">
                Liên hệ tư vấn:
                <a href="#" style="color: var(--primary-color);">0876 123 123</a> hoặc 
                <a href="mailto:" style="color: var(--primary-color);">nhom3@uit.edu.vn</a>
            </div>
    
            <div class="header-user">
                <!-- <ul class="header-user-list">
                    <li class="header-user-item user-logout btn btn-border-bottom btn--small btn--yellow after">
                        <a href="#" class="user-logout-link">
                        <i class="far fa-bookmark"></i>
                        </a>
                        <ul class="sub-header-user-list btn btn btn--yellow">
                            <li class="sub-header-user-item" style="border-bottom: 1px solid #f9d6d6">
                                Đánh dấu trang này
                            </li>
                            <li class="sub-header-user-item">
                                Team members
                                <span class="bookmark-remove"><i class="fas fa-times"></i></span>
                            </li>
                        </ul>
                    </li>
                </ul> -->

                <!-- <ul class="header-user-list">
                    <li class="header-user-item user-control btn btn-border-bottom btn--small btn--yellow after">
                        <span class="user-avt">
                            <img  src="./assets/img/default-avt.png" alt="avt">
                        </span>
                        <?php
                            if (strcmp($_COOKIE['username'], '') == 0)
                            {
                                echo "<span class=\"user-name\" onclick=\"login()\">
                                Đăng nhập
                                </span>";
                            }
                            else
                            { 
                                if (strcmp($_COOKIE['loai'], '1') == 0)
                                {
                                    echo "<span class=\"user-name\" onclick=\"gotoTeacher()\">
                                    ".$_COOKIE['username']."
                                    </span>";
                                    echo "<li class=\"header-user-item user-logout btn btn-border-bottom btn--small btn--green\">
                                    <a href=\"#\" class=\"user-logout-link\"onclick=\"logout()\" >Đăng xuất </a>
                                    </li>";
                                }
                                else{
                                    echo "<span class=\"user-name\" onclick=\"gotoStudent()\">
                                    ".$_COOKIE['username']."
                                    </span>";
                                    echo "<li class=\"header-user-item user-logout btn btn-border-bottom btn--small btn--green\">
                                    <a href=\"#\" class=\"user-logout-link\" onclick=\"logout()\" >Đăng xuất</a>
                                    </li>";
                                }
                            }
                        ?>
                        

                         <ul class="sub-header-user-list btn btn btn--yellow">
                            <li class="sub-header-user-item">
                                <a href="#">Lớp học</a>
                            </li>

                            <li class="sub-header-user-item">
                                <a href="./edit-profile.php">Chỉnh sửa thông tin</a>
                            </li>

                            <li class="sub-header-user-item">
                                <a href="./edit-password.php">Thay đổi mật khẩu</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header-user-item user-logout btn btn-border-bottom btn--small btn--green">
                        <a href="#" class="user-link user-logout-link">Đăng xuất</a>
                    </li>
                </ul> 

                <ul class="header-user-list">
                    <li class="header-user-item user-logout btn btn-border-bottom btn--small btn--green">
                        <a href="#" class="user-link user-signup-link">Đăng ký</a>
                    </li>
                    <li class="header-user-item user-logout btn btn-border-bottom btn--small btn--green">
                        <a href="#" class="user-link user-signin-link">Đăng nhập</a>
                        </ul> -->
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="grid wide">
        <div class="main-header">
            <a href="./home.php" class="logo title">
                <div style="margin-top: 15px; margin-right: 4px; font-size: 10rem;">S</div>
                <div >
                    <div>chool</div>
                    <div style="margin-top: 18px;">hine🌥</div>
                </div>
            </a>

            <!-- sticky logo  -->
            <a href="./home.php" class="sticky-logo title">
                School Shine🌥
            </a> 

            <!-- mobile and tablet logo -->
            <a href="./home.php" class="tablet-logo title">
                School Shine🌥
            </a>

            <!-- navigation -->
            <nav>
                <ul class="nav-list">
                    <li class="nav-item after">
                        <ul class="sub-nav-list btn btn--green">
                            <li class="sub-nav-item">
                                <a href="aboutus.php">Về School Shine</a>
                            </li>
                            <li class="sub-nav-item">
                                <a href="phuongphapdaotao.php">Phương pháp đào tạo</a>
                            </li>
                            <li class="sub-nav-item">
                                <a href="teacher-list.php">Đội ngũ giảng viên</a>
                            </li>
                            <li class="sub-nav-item">
                                <a href="chinhsachhocvien.php">Chính sách học viên</a>
                            </li>
                        </ul>
                        <a href="">Về chúng tôi</a>
                    </li>
                    <li class="nav-item after">
                        <ul class="sub-nav-list btn btn--green">
                            <li class="sub-nav-item">
                                <a href="newcourses.php">Các khóa học mới</a>
                            </li>
                            <li class="sub-nav-item">
                                <a href="allcourses.php">Tất cả các khóa học</a>
                            </li>
                        </ul>
                        <span>Khóa học</span>
                    </li>
                    <li class="nav-item after">
                        <a href="./calendar.php">Lịch khai giảng</a>
                    </li>
                    <li class="nav-item after">
                        <ul class="sub-nav-list btn btn--green">
                            <li class="sub-nav-item">
                                <a href="./blog-list.php">Tất cả bài viết</a>
                            </li>
                            <li class="sub-nav-item">
                                <a href="./new-post.php">Bài viết mới</a>
                            </li>
                            <li class="sub-nav-item">
                                <a href="./learning-tips.php">Bí kíp học ngoại ngữ</a>
                            </li>

                            <li class="sub-nav-item">
                                <a href="./cam-nhan.php">Cảm nhận học viên</a>
                            </li>

                            <li class="sub-nav-item">
                                <a href="./recruitment.php">Tuyển dụng</a>
                            </li>
                        </ul>
                        <a href="./blog-list.php">Blog</a>
                    </li>
                    <li class="nav-item after">
                        <ul class="sub-nav-list btn btn--green">
                            <li class="sub-nav-item">
                                <a href="./listtest.php">Test trình độ online</a>
                            </li>
                            <li class="sub-nav-item">
                                <a href="./document.php">Tài liệu miễn phí</a>
                            </li>

                            <li class="sub-nav-item">
                                <a href="./utilities.php">Tiện ích</a>
                            </li>

                            <li class="sub-nav-item">
                                <a href="">Khóa học miễn phí</a>
                            </li>
                        </ul>
                        <span>Tự học online</span>
                    </li>
                    <li class="nav-item after">
                        <a href="./contact.php">Liên hệ</a>
                    </li>
                </ul>

                <!-- mobile menu icon-->
                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            
            </nav>

            <!-- mobile nav  -->
            <div class="mobile-nav btn btn--green">
                <ul class="mobile-nav-list">
                    <li class="mobile-nav-item mobile-nav-item--has-children">
                        <span>Về chúng tôi</span>
                        
                        <div class="nav-icon">
                            <i class="fas fa-chevron-down nav-icon--down"></i>
                            <i class="fas fa-chevron-up nav-icon--up"></i>
                        </div>

                        <ul class="sub-nav-list">
                            <li class="sub-nav-item">
                                <a href="">Về School Shine</a>
                            </li>
                            <li class="sub-nav-item">
                                <a href="">Phương pháp đào tạo</a>
                            </li>
                            <li class="sub-nav-item">
                                <a href="">Đội ngũ giảng viên</a>
                            </li>
                            <li class="sub-nav-item">
                                <a href="">Chính sách học viên</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-nav-item  mobile-nav-item--has-children">
                        <span>Khóa học</span>
                        <i class="fas fa-chevron-down"></i>

                        <ul class="sub-nav-list">
                            <li class="sub-nav-item">
                                <a href="newcourses.php">Các khóa học mới</a>
                            </li>
                            <li class="sub-nav-item">
                                <a href="allcourses.php">Tất cả các khóa học</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-nav-item">
                        <a href="">Lịch khai giảng</a>
                        <!-- <i class="fas fa-chevron-down"></i> -->
                    </li>
                    <li class="mobile-nav-item">
                        <a href="">Blog</a>
                        <!-- <i class="fas fa-chevron-down"></i> -->
                    </li>
                    <li class="mobile-nav-item  mobile-nav-item--has-children">
                        <span>Tự học online</span>
                        <i class="fas fa-chevron-down"></i>

                        <ul class="sub-nav-list">
                            <li class="sub-nav-item">
                                <a href="">Test trình độ online</a>
                            </li>
                            <li class="sub-nav-item">
                                <a href="">Tài liệu miễn phí</a>
                            </li>
                            <li class="sub-nav-item">
                                <a href="">Khóa học miễn phí</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-nav-item">
                        <a href="">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
