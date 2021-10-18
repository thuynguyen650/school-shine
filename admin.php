<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/admin.css">
    <meta charset="utf-8">
    <title>SCHOOL SHINE</title>
</head>

<body>
    <div id="list-tab">
        <div id="info-admin">
            <img src="assets/img/admin.png" alt="">
            <h2>Quỳnh Như</h2>
        </div>
        <a href="#" onclick="opentab('course-admin')">
            <div id="">Khóa học</div>
        </a>
        <a href="#" onclick="opentab('class-admin')">
            <div id="">Lớp học</div>
        </a>
        <a href="#" onclick="opentab('student-admin')">
            <div id="">Học viên</div>
        </a>
        <a href="#" onclick="opentab('blog-admin')">
            <div id="">Blog</div>
        </a>
    </div>
    <div id="content-tab-admin">
        <div class="name-tab" id="course-admin">
            <h3>Tạo lớp học</h3>
            <div><strong>Tên khóa học:</strong> <input type="text" name="" id="name-new-course" required="Tên khóa học không thể để trống"></div>
            <div>
                <strong>Loại khóa học:</strong>
                <input style="width:50px" type="radio" name="type-course" id="" value="Ielts"> Ielts
                <input style="width:50px" type="radio" name="type-course" id="" value="Toiec"> Toiec
                <input style="width:50px" type="radio" name="type-course" id="" value="Giao tiếp"> Giao tiếp
            </div>
            <div>
                <strong>Ngày bắt đầu:</strong>
                <input type="text" required="Ngày bắt đầu không thể để trống">
            </div>
            <div>
                <strong>Ngày kết thúc:</strong>
                <input type="text" required="Ngày kết thúc không thể để trống">
            </div>
            <div>
                <strong>Mô tả khóa học:</strong>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <button id="btn-add-course">Tạo khóa học</button>
        </div>
        <div class="name-tab" id="class-admin">
            <h3>Tạo lớp học</h3>

            <div><strong>Tên lớp học:</strong> <input type="text" name="" id="name-new-class" required="Tên lớp học không thể để trống"></div>

            <div><strong>Tên khóa học:</strong> <input type="text" name="" id="name-course-of" required="Tên khóa học không thể để trống"></div>

            <div><strong>Số lượng:</strong> <input type="text" name="" id="number-new-class" required="Sỉ số không thể để trống"></div>
            <div>
                <strong>Lịch học:</strong>
                <input style="width:50px" type="radio" name="type-course" id="" value="246"> 2 4 6
                <input style="width:50px" type="radio" name="type-course" id="" value="357"> 3 5 7
                <input style="width:50px" type="radio" name="type-course" id="" value="T7CN"> T7 Chủ nhật
            </div>
            <div>
                <strong>Ca học:</strong>
                <input style="width:50px" type="radio" name="type-course" id="" value="ca1"> Ca 1
                <input style="width:50px" type="radio" name="type-course" id="" value="ca2"> Ca 2
                <input style="width:50px" type="radio" name="type-course" id="" value="ca3"> Ca 3
            </div>
            <div>
                <strong>Mô tả lớp học:</strong>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <button id="btn-add-class">Tạo lớp học</button>
        </div>
        <div class="name-tab" id="student-admin">
            <h3>Thêm học viên</h3>
            <div><strong>Tên học viên:</strong> <input type="text" name="" id="name-new-class" required="Tên học viên không thể để trống"></div>
            <div><strong>CMND:</strong> <input type="text" name="" id="name-new-class" required="CMND không thể để trống"></div>
            <div><strong>Tên lớp học:</strong> <input type="text" name="" id="name-new-class" required="Lớp học không thể để trống"></div>
            <div>
                <strong>Tình trạng học phí:</strong>
                <input style="width:50px" type="radio" name="type-course" id="" value="246"> Đã hoàn thánh
                <input style="width:50px" type="radio" name="type-course" id="" value="357"> Chưa hoàn thành
            </div>
            <div>
                <strong>Chú thích:</strong>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <button id="btn-add-new-student">Thêm học viên</button>
        </div>
        <div class="name-tab" id="blog-admin">
            <h3>Thêm bài viết</h3>
            <div><strong>Tên bài viết:</strong> <input type="text" name="" id="name-new-blog" required="Tên bài viết không thể để trống"></div>
            <div><strong>Tên tác giả:</strong> <input type="text" name="" id="name-author-new-blog" required="Tên tác giả không thể để trống"></div>
            <div><strong>Ngày đăng bài:</strong> <input type="text" name="" id="name-date-new-class" required="Ngày đăng bài không thể để trống"></div>
            <div>
                <strong>Nội dung:</strong>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <button id="btn-add-class">Đăng bài Blog</button>
        </div>
    </div>
    <div class="clear"></div>
</body>
<script src="assets/scripts/admin.js"></script>

</html>