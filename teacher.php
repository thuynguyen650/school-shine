<?php
	include "connect.php";
	$sql2 = "SELECT * FROM TAIKHOAN where TENDANGNHAP =". '\'' .$_COOKIE['username']. '\'';
	$query2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($query2);
	if (strcmp($row2['Loai'], '1') != 0)
	{
		header("Location: http://localhost/school-shine/block.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SchoolShine: Teacher</title>
	<link rel="stylesheet" href="assets/css/buycourse.css">
	<link rel="stylesheet" href="assets/css/usermng.css">
	<link rel="stylesheet" type="text/css" href="FontAwesome/css/all.css">
	<script src="assets/scripts/teacher.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<?php
    include "./includes/head.php";
?> 
<body >
	<!-- nếu có khóa học thì sẽ thêm parameter mảng khóa học -->
	<?php
        include "./includes/header.php";
    ?>
    <?php
        $username = $_COOKIE['username'];
        $sql = "SELECT * FROM TAIKHOAN where TENDANGNHAP =". '\'' .$username. '\'';
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		//mysqli_close($conn);
    ?>
    <main>
    	<div class="panel">
			<div class="checkout_title">
				<?php 
					echo('<p>Chào mừng '.$row['HOTEN'].'</p>')
				?>
				<!-- <p>Chào mừng Nguyễn Thành Nhân</p> -->
				<!-- phpcode -->

			</div>
			
		</div>
		<div class="user">
			<div class="bio">
				
					<?php 
						echo "<div class=\"teacher-profile-containerr\" >";
						echo "<div class=\"teacher-profile\">";
						echo "<div class=\"teacher-profile--left\">";
						echo "<img class=\"teacher-img\" src=\"assets/img/teacher-11.jpg\" alt=\"use\" />";
						echo "<div class=\"teacher-list-info\">";
						echo "<div class=\"item\">
		                                    <i class=\"fas fa-user\"></i>
		                                    <div class=\"text\">
		                                        <strong>Họ và tên</strong>
		                                        <p>".$row['HOTEN']."</p>
		                                    </div>
		                                    
		                      </div>";
		                echo "<div class=\"item\">
		                                    <i class=\"fas fa-phone\"></i>
		                                    <div class=\"text\">
		                                        <strong>Số điện thoại liên lạc: </strong>
		                                        <p>".$row['SDT']."</p>
		                                    </div>
		                                    
		                                </div>";
		                echo "<div class=\"item\">
		                                    <i class=\"fas fa-envelope\"></i>
		                                    <div class=\"text\">
		                                        <strong>Địa chỉ Email</strong>
		                                        <p>".$row['EMAIL']."</p>
		                                    </div>
		                                    
		                                </div>";
		                echo "<div class=\"item\">
		                                    <i class=\"fas fa-map-marker\"></i>
		                                    <div class=\"text\">
		                                        <strong>Địa chỉ hiện tại:</strong>
		                                        <p>".$row['DIACHI']."</p>
		                                    </div>
		                                    
		                                </div>";
		                
						echo "</div>";
						echo "</div>";
						echo "<div class=\"teacher-profile--right\">
		                            <div class=\"teacher-profile--des\">
		                                <p class=\"teacher-profile--des header\">Đôi nét về Giảng viên</p>
		                                <p class=\"teacher-profile--des des\">Năng động, trẻ trung, sôi nổi, nhiệt huyết, sáng tạo - là phong cách mà cô hướng tới vì thế trong mỗi bài giảng của mình cô luôn biến hóa một cách sinh động với nhiều phong cách, và nhiều hướng tiếp cận bài học giúp cho các em học sinh tiếp cận kiến thức 1 cách thoải mái, rèn luyện và củng cố kiến thức một cách tự nhiên.</p>
		                                <p class=\"teacher-profile--des des\">Luôn cập nhật công nghệ thông tin để ứng dụng và cải tiến vào trong các bài giảng, vì thế các bài giảng của cô luôn có sự phá cách và tạo được ấn tượng với các em học sinh.</p>
		                                <p class=\"teacher-profile--des des\">Phong cách giảng dạy chuyên nghiệp, trẻ trung, nhiệt huyết đam mê truyền động lực mạnh mẽ cho các em học sinh thông qua mục tiêu bài học rõ ràng. Cách tiếp cận bài học thông qua bài hát, hoạt động, trò chơi .... phù hợp với tất cả các học sinh ở mọi trình độ.</p>
		                            </div>
		                            <div class=\"teacher-profile--des\">
		                                <p class=\"teacher-profile--des header\">Thành tích</p>
		                                <p class=\"teacher-profile--des des\">Nhà Sáng lập - Giám đốc trung tâm Anh Ngữ SABI EDU, hiện nay là Trung tâm CHU CHU English</p>
		                                <p class=\"teacher-profile--des des\">Bằng chứng chỉ giảng dạy Tiếng Anh chuyên nghiệp theo phương pháp Tesol.</p>
		                                <p class=\"teacher-profile--des des\">Top 10 nữ sinh thanh lịch trường Đại học Công Nghiệp Hà Nội năm 2014 và giành giải nữ sinh được yêu thích nhiều nhất.</p>
		                                <p class=\"teacher-profile--des des\">\"Tác giả bộ thẻ học liệu Magic English Flashcard: http://magicenglishflashcard.com/\"</p>
		                            </div>
		                        </div> ";
		                
						echo "</div>";
						echo "</div>";
			 		?>
				<a href="#" title="Chỉnh sửa thông tin giảng viên" class="bt_blue" id="edbtn" onclick="edinfo(event);"><i class="fas fa-pen"></i> Chỉnh sửa thông tin</a>
			</div>
			
			<?php 
				echo "<div class=\"editif\" id=\"editif\" style=\"display: none;\">";
				echo "<i class=\"fas fa-edit icon\"></i>";
				echo "<span>Cập nhật thông tin của bạn</span>";
				echo "<form class=\"edinfo\" id=\"edinfo\" action=\"editinfo.php\" method=\"post\">";
				echo "<div class=\"half\">
					<label class=\"detail_field\">Họ và tên<label class=\"notnull\">*</label> <br>
					</label>
					<input type=\"text\" name=\"hoten\" class=\"in_half\" id=\"inFirstName\" style=\"background-color: white;\" value=\"".$row['HOTEN']."\" >
					<br>
					<label class=\"error\" id=\"first_name_er\">Lỗi ở đây</label>
					<br>
					
				</div>";
				echo "<div class=\"half\">
					<label class=\"detail_field\">Email<label class=\"notnull\">*</label> <br>
					</label>
					<input type=\"email\" name=\"email\" class=\"in_half\" id=\"inFirstName\"  style=\"background-color: white;\" value=\"".$row['EMAIL']."\">
					<br>
					<label class=\"error\" id=\"first_name_er\">Lỗi ở đây</label>
					<br>
					
				</div>";
				echo "<div class=\"half\">
					<label class=\"detail_field\">Số điện thoại <label class=\"notnull\">*</label> <br>
					</label>
					<input type=\"number\" name=\"sdt\" class=\"in_half\" id=\"inFirstName\"  style=\"background-color: white;\" value=\"".$row['SDT']."\" >
					<br>
					<label class=\"error\" id=\"first_name_er\">Lỗi ở đây</label>
					<br>
					
				</div>";
				echo "<div class=\"half\">
					<label class=\"detail_field\">Giới tính<label class=\"notnull\">*</label> <br>
					</label>
					<select class=\"in_half\" name= \"gioitinh\"style=\"background-color: white;\" value=\"".$row['GIOITINH']."\" >
					<option value=\"Nam\">Nam</option>
  					<option value=\"Nữ\">Nữ</option>
  					<option value=\"undefine\">Không xác định</option>
					</select>
					<br>
					<label class=\"error\" id=\"first_name_er\">Lỗi ở đây</label>
					<br>
					
				</div>";
				echo "<div class=\"half\">
					<label class=\"detail_field\">Ngày sinh<label class=\"notnull\">*</label> <br>
					</label>
					<input type=\"date\" name=\"ngaysinh\" class=\"in_half\" id=\"inFirstName\" style=\"background-color: white;\" value=\"".$row['NGAYSINH']."\" >
					<br>
					<label class=\"error\" id=\"first_name_er\">Lỗi ở đây</label>
					<br>
					
				</div>";
				echo "<div class=\"half\">
					<label class=\"detail_field\">Địa chỉ<label class=\"notnull\">*</label> <br>
					</label>
					<input type=\"text\" name=\"diachi\" class=\"in_half\" id=\"inFirstName\" style=\"background-color: white;\" value=\"".$row['DIACHI']."\" >
					<br>
					<label class=\"error\" id=\"first_name_er\">Lỗi ở đây</label>
					<br>
					
				</div>";
				echo "</form>";
				echo "<a href=\"#\" title=\"\" class=\"bt_blue\" onclick=\"done_edit(event)\">Hoàn tất</a>";
				echo "</div>";
				

			?>
			
			<div class="course" id="course">
				<i class="fas fa-chalkboard-teacher icon"></i>
				<span>Các khóa học đang dạy</span>
				<?php 
					$sql1 = "SELECT * FROM KHOAHOC where MAGV =". '\'' .$row['MATK']. '\'';
					$query1 = mysqli_query($conn, $sql1);
					$i = 1;
					while($row1 = mysqli_fetch_array($query1)){
							echo "<form name=\"enter\" action=\"mngcourse.php\" method=\"post\" id=\"enter".$i."\" class =\"_1course\">";
							echo "<input type=\"text\" name=\"coursename\" class = \"coursename\" value = \"".$row1['MAKH']."\">";
							echo "<i class=\"fas fa-book-open iconmini\"></i>";
							echo "<a href=\"#\" title=\"\" onclick='entercourse(\"enter".$i."\")'>".$row1['MAKH']."</a>";
							echo "</form>";
					}
				?>

			</div>
			
			
			<!-- <form name="frmLogin" action="mngcourse.php" method="post" id="login">
				<label>ten khoa hoc: </label>
				<input type="text" name="coursename" id="coursename" /><br/>
				<input type="submit" id="password" /><br/>
			</form> -->
		</div>
    </main>
    <?php
        include "./includes/footer.php";
    ?> 
</body>
</html>