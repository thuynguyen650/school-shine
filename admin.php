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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    function logout(){
        const xhr = new XMLHttpRequest();
        xhr.onload = function(){
           window.location.href = "http://localhost:8080/school-shine/home.php";
        }
        xhr.open("POST","logout.php");
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }
    </script>
</head>

<body>
    <div id="list-tab">
        <div id="info-admin">
            <img src="assets/img/admin.png" alt="">
            <?php 
                echo '<h2>'.$row2['HOTEN'].'</h2>'
            ?>

        </div>
        <hr>
        <a href="#" onclick="opentab('course-admin')">
            <div id="course-admin-active" class="thuy-admin-item">Khóa học</div>
        </a>
        <a href="#" onclick="opentab('teacher-admin')">
            <div id="teacher-admin-active" class="thuy-admin-item">Giảng viên</div>
        </a>
        <a href="#" onclick="opentab('blog-admin')">
            <div id="blog-admin-active" class="thuy-admin-item">Blog</div>
        </a>

        <a href="#" onclick="opentab('tuvan-admin')">
            <div id="tuvan-admin-active" class="thuy-admin-item">Đăng ký tư vấn</div>
        </a>
        
        <a href="#" onclick="opentab('contact-admin')">
            <div id="contact-admin-active" class="thuy-admin-item">Liên hệ, góp ý</div>
        </a>
        <hr>
        <a href="./home.php">
            <div id="contact-admin-active">Đi tới trang chủ</div>
        </a>

        <a href="#" onclick="logout()">
            <div id="blog-admin-active">Đăng xuất</div>
        </a>
    </div>
    <div id="content-tab-admin">
        
        <div class="name-tab" id="course-admin">
            <ul class="nav-admin">
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
            <ul class="manage_gv nav-admin">
                <li><a href="#" title="" onclick="add_gv()">Thêm giảng viên</a></li>
                <li><a href="#" title="" onclick="delete_gv()">Xóa giảng viên</a></li>
            </ul>
            <div class="info_gv" id="info_add_gv">
                <h3>Thêm giảng viên</h3>
                <div class="half_width">
                    <p>Tên đăng nhập: </p>
                    <input class="admin-input" type="text" name="" id="username_gv" required="Tên đăng nhập không thể để trống">
                </div>
                <div class="half_width">
                    <p>Mật khẩu: </p>
                    <input class="admin-input" type="password" id="pass_gv" name="" required="Mật khẩu không thể để trống">
                </div>
                <div class="half_width">
                    <p>Họ Tên: </p>
                    <input class="admin-input" type="text" id="name_gv" name="" required="Họ tên không thể để trống">
                </div>
                <div class="half_width">
                    <p>Email: </p>
                    <input class="admin-input" type="text" id="email_gv" name="" required="Email không thể để trống">
                </div>
                <div class="half_width">
                    <p>Số điện thoại: </p>
                    <input class="admin-input" type="number"  id="phone_gv" name="" required="Số điện thoại không thể để trống">
                </div>
                <div class="half_width">
                        <p>Giới tính</p>
                        <select class="admin-input" name="" id="sel_gender_gv">
                            <option value="">Nam</option>
                            <option value="">Nữ</option>
                            <option value="">Không xác định</option>
                        </select>  
                </div>
                <div class="half_width">
                    <p>Ngày sinh: </p>
                    <input class="admin-input" type="date" id="dob_gv" name="" required="Ngày sinh không thể để trống">
                </div>
                <div class="half_width">
                    <p>Địa chỉ: </p>
                    <input class="admin-input" type="text" id="addr_gv" name="" required="Địa chỉ không thể để trống">
                </div>
                <button id="btn-add-course" onclick="add_gv_func()">Thêm giảng viên</button>
            </div>

            <div class="info_gv" id="info_del_gv">
                <h3>Thêm giảng viên</h3>
                <h4 class="warning">*Lưu ý: Chỉ được xóa những giảng viên chưa dạy lớp nào kể cả những lớp đã kết thúc.</h4>
                <select name="" id="sel_del_gv">
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
                <div class="confirm">
                    <input type="checkbox" id="confirm_del_gv" name="confirm">
                    <label for="confirm_del_gv" id="lbl_confirm">Đồng ý với việc xóa giảng viên này sẽ không thể khôi phục lại</label>
                </div>
                <button id="btn-add-course" onclick="del_gv_func()">Xóa giảng viên</button>
            </div>
        </div>
        <div class="name-tab" id="blog-admin">
            <ul>
                <li><a href="#" title="" onclick="addblog()">Tạo bài viết</a></li>
                <li><a href="#" title="" onclick="delblog()">Danh sách bài viết</a></li>
            </ul>
            <div class="info" id="info_add_blog">
            <h3>Thêm bài viết</h3>
            <div class="blog-input-group"><strong>Tên bài viết:</strong> <input type="text" name="" id="blog-title-input" required="Tên bài viết không thể để trống"></div>
            <div class="blog-input-group"><strong>Tên tác giả:</strong> <input type="text" name="" id="blog-author-input" required="Tên tác giả không thể để trống"></div>
            <div class="blog-input-group"><strong>Danh mục:</strong> 
                <select name="blog-topic-input" id="blog-topic-input" class="contact-input">
                    <option value="1">Bí kíp học ngoại ngữ</option>
                    <option value="2">Cảm nhận học viên</option>
                    <option value="3">Tuyển dụng</option>
                </select>
            </div>
            <div class="blog-input-group">
                <strong>Nội dung:</strong>
                <textarea name="blog-content-input" id="blog-content-input" cols="30" rows="10"></textarea>
            </div>
            <button id="blog-add-btn" onclick="addBlog()">Đăng bài Blog</button>
            </div>

            <div class="info" id="info_del_blog">
            <h3>Danh sách bài viết</h3>
            <div>
                <?php 
						include "connect.php";
						$sql = "SELECT * FROM blog";
						$query = mysqli_query($conn, $sql);
                        // $row = mysqli_fetch_assoc($query);
                        $total_row = mysqli_num_rows($query);

                        $i = 0;
                        if($total_row === 0) {
                            echo "<p class='null'>Chưa có bài viết nào.</p>";
                        } else {
                        echo "<div>
                        <table style='border: 1px solid black;'>
                            <tr>
                                <th>STT</th>
                                <th>Danh mục</th>
                                <th>Tên bài viết</th>
                                <th>Tác giả</th>
                                <th>Thao tác</td>
                                </tr>";
                        while ($row = mysqli_fetch_assoc($query)) {
                            $i++;
                            switch($row['topic']) {
                                case 1:
                                    $row['topic'] = 'Bí kíp học ngoại ngữ';
                                    break;
                                case 2: 
                                    $row['topic'] = 'Cảm nhận học viên';
                                    break;
                                case 3:
                                    $row['topic'] = 'Tuyển dụng';
                                    break;
                            }
                            echo "
                            
                                <tr id='".$row['blog_id']."'>
                                <td>".$i."</td>
                                <td>".$row['topic']."</td>
                                <td>".$row['title']."</td>
                                <td>".$row['author']."</td>
                                <td>
                                    <div class='delete-button' id=".$row['blog_id']." onclick='xoaBaiViet(this.id)''>Xóa</div>
                                </td>
                                </tr>
                                ";
                            }
                        echo "

                        </table>
                        <div class='table-actions'>
                            <button onclick='clearContact()'>Xóa tất cả</button>
                        </div>
                        </div>";
                        }
					?>
            </div>
            </div>

            
        </div>
        <div class="name-tab thuy-admin" id="tuvan-admin">
            <h1>Đăng ký tư vấn</h1>
            <div>
                <?php 
						include "connect.php";
						$sql = "SELECT * FROM tuvan";
						$query = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($query);
                        if($row === null) {
                            echo "<p class='null'>Hiện tại chưa có ai đăng ký tư vấn.</p>";
                        } else {
                        echo "<div>
                        <table style='border: 1px solid black;'>
                            <tr>
                                <th>Tên</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                            </tr>";
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "
                            
                                <tr>
                                <td>".$row['name']."</td>
                                <td>
                                <a href='tel: ".$row['sdt']."'>
                                ".$row['sdt']."</td>
                                <td>
                                <a href='mailto:".$row['email']."'>
                                ".$row['email']."</td>
                            </tr>
                                ";
                            }
                        echo "

                        </table>
                        </div>";
                        }
					?>
            </div>
        </div>
        <div class="name-tab thuy-admin" id="contact-admin">
            <h1>Thắc mắc & Góp ý</h1>
            <div>
                <?php 
						include "connect.php";
						$sql = "SELECT * FROM lienhe";
						$query = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($query);
                        if($row === null) {
                            echo "<p class='null'>Hiện tại chưa có thắc mắc và góp ý.</p>";
                        } else {
                        echo "<div>
                        <table style='border: 1px solid black;'>
                            <tr>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Danh mục</th>
                                <th>Lời nhắn</th>
                                </tr>";
                        while ($row = mysqli_fetch_assoc($query)) {
                            switch($row['topic']) {
                                case 1:
                                    $row['topic'] = 'Than phiền';
                                    break;
                                case 2: 
                                    $row['topic'] = 'Khen ngợi';
                                    break;
                                case 3:
                                    $row['topic'] = 'Tư vấn / Đăng ký khóa học';
                                    break;
                                case 4: 
                                    $row['topic'] = 'Tuyển dụng';
                                    break;
                            }
                            echo "
                            
                                <tr>
                                <td>".$row['name']."</td>
                                <td>
                                <a href='mailto:".$row['email']."'>
                                ".$row['email']."</td>
                                <td>".$row['topic']."</td>
                                <td>".$row['message']."</td>
                                </tr>
                                ";
                            }
                        echo "

                        </table>
                        <div class='table-actions'>
                            <button onclick='clearContact()'>Xóa tất cả</button>
                        </div>
                        </div>";
                        }
					?>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</body>
<script src="assets/scripts/admin.js"></script>

</html>