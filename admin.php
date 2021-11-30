<?php
    include "connect.php";
    $sql2 = "SELECT * FROM TAIKHOAN where TENDANGNHAP =". '\'' .$_COOKIE['username']. '\'';
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($query2);
    if (strcmp($row2['Loai'], '2') != 0)
    {
        header("Location: http://localhost/school-shine/block.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" type="text/css" href="FontAwesome/css/all.css">
    <meta charset="utf-8">
    <title>SCHOOL SHINE</title>
</head>

<body>
    <div id="list-tab">
        <div id="info-admin">
            <img src="assets/img/admin.png" alt="">
            <?php 
                echo '<h2>'.$row2['HOTEN'].'</h2>'
            ?>

        </div>
        <a href="#" onclick="opentab('course-admin')">
            <div id="">Khóa học</div>
        </a>
        <a href="#" onclick="opentab('teacher-admin')">
            <div id="">Giảng viên</div>
        </a>
        <a href="#" onclick="opentab('blog-admin')">
            <div id="">Blog</div>
        </a>
    </div>
    <div id="content-tab-admin">
        
        <div class="name-tab" id="course-admin">
            <ul>
                <li><a href="#" title="" onclick="addkh()">Tạo khóa học</a></li>
                <li><a href="#" title="" onclick="editkh()">Sửa khóa học</a></li>
                <li><a href="#" title="" onclick="delkh()">Xóa khóa học</a></li>
            </ul>
            <div class="info" id="info_add_kh">
                <h3>Tạo khóa học</h3>
                <div><strong>Mã khóa học:</strong> <input type="text" name="" id="code-new-course" required="Mã khóa học không thể để trống"></div>
                <div>
                    <strong></strong> 
                    <button id="" class="btn_check" onclick="check_suit_makh()">Kiểm tra</button> 
                    <label id="is_suit_makh">Trạng thái khả dụng</label>
                </div>
                <div><strong>Tên khóa học:</strong> <input type="text" name="" id="name-new-course" required="Tên khóa học không thể để trống"></div>
                <div>
                    <strong>Loại khóa học:</strong>
                    <input style="width:50px" type="radio" name="type-course" id="" value="ielts"> Toeic
                    <input style="width:50px" type="radio" name="type-course" id="" value="toeic"> Ielts
                </div>
                <div>
                    <strong>Kĩ năng:</strong>
                    <input style="width:50px" type="radio" name="skill" id="" value="Speaking"> Speaking
                    <input style="width:50px" type="radio" name="skill" id="" value="Writing"> Writing
                    <input style="width:50px" type="radio" name="skill" id="" value="Reading"> Reading
                    <input style="width:50px" type="radio" name="skill" id="" value="Listening"> Listening
                    <input style="width:50px" type="radio" name="skill" id="" value="Communicating"> Communicating
                </div>
                <div>
                    <strong>Giảng viên dạy:</strong>
                    <select name="" id="sel_gv">
                        <option value="">Chọn giảng viên</option>
                        <?php 
                            $sql4 = "SELECT * FROM TAIKHOAN where Loai = '1'";
                            $query4 = mysqli_query($conn, $sql4);
                            while($row4 = mysqli_fetch_array($query4))
                            {
                                echo "<option value=\"\">".$row4['MATK']." - ".$row4['HOTEN']."</option>";
                            }
                        
                        ?>
                    </select>
                </div>
                <div>
                    <strong></strong> 
                    <button id="" class="btn_check" onclick="check_suit_gv()">Kiểm tra</button> 
                    <label id="is_suit_gv">Trạng thái khả dụng</label>

                </div>
                <div>
                    <strong>Ca dạy:</strong>
                    <select name="" id="sel_ca">
                        <option value="">Chọn ca</option>
                        <option value="">Ca 1: 4h30 - 6h</option>
                        <option value="">Ca 2: 6h - 7h30</option>
                        <option value="">Ca 3: 7h30 - 9h</option>
                    </select>
                </div>
                <div>
                    <strong>Thứ</strong>
                    <select name="" id="sel_thu">
                        <option value="">Chọn thời gian</option>
                        <option value="">Thứ 2,4,6</option>
                        <option value="">Thứ 3,5,7</option>
                    </select>
                </div>
                <div>
                    <strong>Ngày bắt đầu:</strong>
                    <input type="date" id="ngaybd" required="Ngày bắt đầu không thể để trống">
                </div>
                <div>
                    <strong>Ngày kết thúc:</strong>
                    <input type="date" id="ngaykt" required="Ngày kết thúc không thể để trống">
                </div>
                <div>
                    <strong>Giá:</strong>
                    <input type="number" id="gia" required="Ngày kết thúc không thể để trống">
                </div>
                <div>
                    <strong>Chu kì thanh toán:</strong>
                    <input style="width:50px" type="radio" name="pay" id="" value="0"> Một lần
                    <input style="width:50px" type="radio" name="pay" id="" value="1"> Theo tháng
                </div>
                <div>
                    <strong>Mô tả khóa học:</strong>
                    <textarea name="" id="mota" cols="30" rows="10"></textarea>
                </div>
                <button id="btn-add-course" onclick="add()">Tạo khóa học</button>
            </div>
            
            <div class="info" id="info_edit_kh">
                <h3>Sửa thông tin khóa học</h3>
                <h4 class="warning">*Lưu ý: Các khóa học đã có học viên tham gia chỉ được chỉnh sửa tình trạng.</h4>
                <select name="" id="sel_edit" onchange="edit_sel_course()">
                    <option value="">Chọn khóa học</option>
                    
                    <?php 
                        $sql3 = "SELECT * FROM KHOAHOC";
                        $query3 = mysqli_query($conn, $sql3);
                        while($row3 = mysqli_fetch_array($query3))
                        {
                            echo "<option value=\"\">".$row3['MAKH']." - ".$row3['TENKHOAHOC']."</option>";
                        }
                        
                    ?>
                </select>
                <div class="show_info_course">
                    <div class="half_width restrict">
                        <p>Tên khóa học</p>
                        <input type="text" name="" id="ed_name_course">
                    </div>
                    <div class="half_width restrict">
                        <p>Giảng viên dạy</p>
                        <select name="" id="ed_sel_gv">
                        <?php 
                            $sql4 = "SELECT * FROM TAIKHOAN where Loai = '1'";
                            $query4 = mysqli_query($conn, $sql4);
                            while($row4 = mysqli_fetch_array($query4))
                            {
                                echo "<option value=\"\">".$row4['MATK']." - ".$row4['HOTEN']."</option>";
                            }
                        
                        ?>
                    </select>
                    </div>
                    <div class="half_width restrict">
                        <p>Skill</p>
                        <select name="" id="ed_sel_skill">
                             <option value="">Speaking</option>
                             <option value="">Writing</option>
                             <option value="">Listening</option>
                             <option value="">Reading</option>
                             <option value="">Communicating</option>
                         </select> 
                    </div>
                    <div class="half_width restrict">
                        <p>Loại khóa học</p>
                        <select name="" id="ed_sel_type">
                             <option value="">Toeic</option>
                             <option value="">Ielts</option>
                         </select>  
                    </div>
                    <div class="half_width restrict">
                        <p>Ngày bắt đầu</p>
                        <input type="date" name="" id="ed_ngaybd"> 
                    </div>
                    <div class="half_width restrict">
                        <p>Ngày kết thúc</p>
                        <input type="date" name="" id="ed_ngaykt"> 
                    </div>
                    <div class="half_width restrict">
                        <p>Giá</p>
                        <input type="number" name="" id="ed_gia"> 
                    </div>
                    <div class="half_width restrict">
                        <p>Chu kì thanh toán</p>
                        <select name="" id="ed_sel_pay">
                             <option value="">Một lần</option>
                             <option value="">Theo tháng</option>
                         </select>  
                    </div>
                    <div class="half_width restrict">
                        <p>Ca</p>
                        <select name="" id="ed_sel_ca">
                            <option value="">Ca 1: 4h30 - 6h</option>
                            <option value="">Ca 2: 6h - 7h30</option>
                            <option value="">Ca 3: 7h30 - 9h</option>
                         </select>  
                    </div>
                    <div class="half_width restrict">
                        <p>Thứ</p>
                        <select name="" id="ed_sel_thu">
                            <option value="">Thứ 2,4,6</option>
                            <option value="">Thứ 3,5,7</option>
                         </select>  
                    </div>
                    <div class="half_width nonrestrict">
                        <p>Tình trạng</p>
                        <select name="" id="ed_sel_sta">
                            <option value="">Đã kết thúc</option>
                            <option value="">Chưa kết thúc</option>
                         </select>  
                    </div>
                    <div class="full_width restrict">
                        <p>Mô tả khóa học</p>
                        <textarea name="" id="ed_mota" cols="30" rows="10"></textarea>
                    </div>
                    <button id="btn-edit-course" onclick="edit()">Xác nhận sửa thông tin</button>
                </div>
            </div>

            <div class="info" id="info_del_kh">
                <h3>Xóa khóa học</h3>
                <h4 class="warning">*Lưu ý: Chỉ được xóa các lớp chưa có học viên nào tham gia.</h4>
                <select name="" id="sel_del" onchange="">
                    <option value="">Chọn khóa học</option>
                    
                    <?php 
                        $sql3 = "SELECT * FROM KHOAHOC";
                        $query3 = mysqli_query($conn, $sql3);
                        while($row3 = mysqli_fetch_array($query3))
                        {
                            echo "<option value=\"\">".$row3['MAKH']." - ".$row3['TENKHOAHOC']."</option>";
                        }
                        
                    ?>
                </select>
                <br>
                <div class="confirm">
                    <input type="checkbox" id="confirm" name="confirm">
                    <label for="confirm" id="lbl_confirm">Đồng ý với việc xóa lớp học này sẽ không thể khôi phục lại</label>
                </div>
                <button id="btn-add-course" onclick="del()">Xóa khóa học</button>
            </div>
        </div>
        <div class="name-tab" id="teacher-admin">
            <ul>
                <li><a href="" title="">Thêm giảng viên</a></li>
                <li><a href="" title="">Sửa thông tin giảng viên</a></li>
                <li><a href="" title="">Xóa giảng viên</a></li>
            </ul>

            <h3>Thêm giảng viên</h3>
            <div><strong>Mã khóa học:</strong> <input type="text" name="" id="name-new-course" required="Tên khóa học không thể để trống"></div>
            <div><strong>Tên khóa học:</strong> <input type="text" name="" id="name-new-course" required="Tên khóa học không thể để trống"></div>
            <div>
                <strong>Loại khóa học:</strong>
                <input style="width:50px" type="radio" name="type-course" id="" value="ielts"> Ielts
                <input style="width:50px" type="radio" name="type-course" id="" value="toeic"> Toeic
            </div>
            <div>
                <strong>Kĩ năng:</strong>
                <input style="width:50px" type="radio" name="skill" id="" value="speaking"> Speaking
                <input style="width:50px" type="radio" name="skill" id="" value="writing"> Writing
                <input style="width:50px" type="radio" name="skill" id="" value="reading"> Reading
                <input style="width:50px" type="radio" name="skill" id="" value="listening"> Listening
                <input style="width:50px" type="radio" name="skill" id="" value="communicating"> Communicating
            </div>
            <div>
                <strong>Ngày bắt đầu:</strong>
                <input type="date" required="Ngày bắt đầu không thể để trống">
            </div>
            <div>
                <strong>Ngày kết thúc:</strong>
                <input type="date" required="Ngày kết thúc không thể để trống">
            </div>
            <div>
                <strong>Giá:</strong>
                <input type="number" required="Ngày kết thúc không thể để trống">
            </div>
            <div>
                <strong>Chu kì thanh toán:</strong>
                <input style="width:50px" type="radio" name="pay" id="" value="0"> Một lần
                <input style="width:50px" type="radio" name="pay" id="" value="1"> Theo tháng
            </div>
            <div>
                <strong>Mô tả khóa học:</strong>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <button id="btn-add-course">Tạo khóa học</button>
        </div>
        <div class="name-tab" id="blog-admin">
            <ul>
                <li><a href="" title="">Tạo bài viết</a></li>
                <li><a href="" title="">Sửa bài viết</a></li>
                <li><a href="" title="">Xóa bài viết</a></li>
            </ul>
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