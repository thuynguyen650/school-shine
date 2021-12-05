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
                        <h1 class="calendar-title">Lịch Khai Giảng: Tháng 12, 2021</h1>
                    </div>

                    <div class="page-breadcrumb">
                            <a class="page-banner-item" href="">Trang chủ</a>
                            <i class="page-banner-icon fas fa-arrow-right"></i>

                            <a class="page-banner-item" href="">Lịch khai giảng</a>
                            <i class="page-banner-icon fas fa-arrow-right"></i>

                            <span class="page-banner-item">Tháng 12, 2021</span>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="page-content">
            <div class="grid wide">
                <div class="calendar-search">
                    <form action="" class="calendar-form">
                        <div class="calendar-input-group">
                            <label for="date" class="calendar-label">Thời gian</label>
                            <select id="type" name="type" class="calendar-input time-input">
                                <option value="12">Tháng 12 / 2021</option>
                                <option value="1">Tháng 01 / 2022</option>
                            </select>
                        </div>

                        <div class="calendar-input-group">
                            <label for="keyword" class="calendar-label">Khóa học</label>
                            <select id="type" name="type" class="calendar-input level-input">
                                <option value="0">Tất cả</option>
                                <option value="1">Level Basic (Xây dựng nền tảng)</option>
                                <option value="2">Level Pre (TOEIC 300-350)</option>
                                <option value="2">Level A (TOEIC 450-500)</option>
                                <option value="2">Level B (TOEIC 600-650)</option>
                                <option value="2">Luyện đề TOEIC</option>
                            </select>
                        </div>

                        <div class="calendar-input-group">
                            <label for="type" class="calendar-label">Hình thức</label>
                            <select id="type" name="type" class="calendar-input">
                                <option value="0">Tất cả</option>
                                <option value="1">Online</option>
                                <option value="2">Offline</option>
                            </select>
                        </div>

                        <div class="calendar-button">
                            <button onclick="timLich()" type="button">Tìm kiếm lịch</button>
                        </div>
                    </form>
                </div>

                <div class="calendar-content lich-thang-12">
                    <h2 class="calendar-table-heading">Lịch khai giảng các lớp tháng 12 năm 2021</h2>

                    <table class="calendar-table">
                        <tr>
                            <th>Lớp</th>
                            <th>Ca</th>
                            <th>Thứ</th>
                            <th>Ngày khai giảng</th>
                            <th>Hình thức</th>
                            <th>Tình trạng</th>
                            <th>Đăng ký</th>
                        </tr>
                        <tr class="basic">
                            <td rowspan="2">
                                <a href="./paid_courses.php">Level Basic <br/> (Xây dựng nền tảng)</a>
                            </td>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>
                        <tr class="basic">
                            <td>19h45 - 21h15</td>
                            <td>3.5.7</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>                            
                        
                        <tr class="pre">
                            <td rowspan="3">
                                <a href="./paid_courses.php">Level Pre <br/> (TOEIC 300-350)</a>
                            </td>
                            <td>19h45 - 21h15</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>                            
                        
                        <tr class="pre">
                            <td>19h45 - 21h15</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr class="pre">
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr class="levelA">
                            <td rowspan="4">
                                <a href="./paid_courses.php">Level A <br/> (TOEIC 450-500)</a>
                            </td>
                            <td>19h45 - 21h15</td>
                            <td>3.5.7</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr class="levelA">
                            <td>17h45 - 19h15</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr class="levelA">
                            <td>19h45 - 21h15</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr class="levelA">
                            <td>19h45 - 21h15</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>
                        <tr class="levelB">
                            <td rowspan="2">
                                <a href="./paid_courses.php">Level B <br/> (TOEIC 600-650)</a>
                            </td>
                            <td>17h45 - 19h15</td>
                            <td>3.5.7</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr class="levelB">
                            <td>19h45 - 21h15</td>
                            <td>3.5.7</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr class="luyende">
                            <td rowspan="2">
                                <a href="./paid_courses.php">Luyện đề TOEIC</a>
                            </td>
                            <td>8h30 - 11h30</td>
                            <td>SÁNG CHỦ NHẬT</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="calendar-content lich-thang-1">
                    <h2 class="calendar-table-heading">Lịch khai giảng các lớp tháng 01 năm 2022</h2>

                    <table class="calendar-table">
                        <tr>
                            <th>Lớp</th>
                            <th>Ca</th>
                            <th>Thứ</th>
                            <th>Ngày khai giảng</th>
                            <th>Hình thức</th>
                            <th>Tình trạng</th>
                            <th>Đăng ký</th>
                        </tr>
                        <tr>
                            <td rowspan="2">
                                <a href="./paid_courses.php">Level Basic <br/> (Xây dựng nền tảng)</a>
                            </td>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>
                        <tr>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>                            
                        
                        <tr>
                            <td rowspan="3">
                                <a href="./paid_courses.php">Level Pre <br/> (TOEIC 300-350)</a>
                            </td>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>                            
                        
                        <tr>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr>
                            <td rowspan="4">
                                <a href="./paid_courses.php">Level A <br/> (TOEIC 450-500)</a>
                            </td>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2">
                                <a href="./paid_courses.php">Level B <br/> (TOEIC 600-650)</a>
                            </td>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr>
                            <td rowspan="2">
                                <a href="./paid_courses.php">Luyện đề TOEIC</a>
                            </td>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>

                        <tr>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="./buycourse.php">Đăng ký ngay</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

<!-- nút ontop -->
        <?php
            include "./includes/btntop.php";
        ?>

        <!-- chatbox -->
        <?php
            include "./includes/chatbot.php";
        ?>
<?php
    include "./includes/footer.php"
?>