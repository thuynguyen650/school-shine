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
                        <h1>Lịch Khai Giảng: Tháng 10, 2021</h1>
                    </div>

                    <div class="page-breadcrumb">
                            <a class="page-banner-item" href="">Trang chủ</a>
                            <i class="page-banner-icon fas fa-arrow-right"></i>

                            <a class="page-banner-item" href="">Lịch khai giảng</a>
                            <i class="page-banner-icon fas fa-arrow-right"></i>

                            <span class="page-banner-item">Tháng 10, 2021</span>
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
                            <input type="date" name="date" id="date" class="calendar-input">
                        </div>

                        <div class="calendar-input-group">
                            <label for="keyword" class="calendar-label">Khóa học</label>
                            <input type="text" name="keyword" id="keyword" placeholder="Nhập từ khóa..." class="calendar-input">
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
                            <button>Tìm kiếm lịch</button>
                        </div>
                    </form>
                </div>

                <div class="calendar-content">
                    <h2 class="calendar-table-heading">Lịch khai giảng các lớp tháng 10 năm 2021</h2>

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
                            <td>
                                <a href="">Luyện thi TOEIC 400+</a>
                            </td>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="">Đăng ký ngay</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">Luyện thi TOEIC 400+</a>
                            </td>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="">Đăng ký ngay</a>
                            </td>
                        </tr>                            <tr>
                            <td>
                                <a href="">Luyện thi TOEIC 400+</a>
                            </td>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="">Đăng ký ngay</a>
                            </td>
                        </tr>                            <tr>
                            <td>
                                <a href="">Luyện thi TOEIC 400+</a>
                            </td>
                            <td>18h - 19h30</td>
                            <td>2.4.6</td>
                            <td>20/09/2021</td>
                            <td>Online</td>
                            <td>Còn trống</td>
                            <td>
                                <a href="">Đăng ký ngay</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

<?php
    include "./includes/footer.php"
?>