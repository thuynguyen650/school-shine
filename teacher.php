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
<body <?php
        $username = $_COOKIE['username'];
        $sql = "SELECT * FROM TAIKHOAN where TENDANGNHAP =". '\'' .$username. '\'';
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		echo 'onload= "teacher_setup([\''.$row['HOTEN'].'\',\''.$row['EMAIL'].'\',\''.$row['SDT'].'\',\''.$row['DIACHI'].'\']);"'
		//mysqli_close($conn);
    ?>>
	<!-- nếu có khóa học thì sẽ thêm parameter mảng khóa học -->
	<?php
        include "./includes/header.php";
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
				<div class="info" id="info">
				</div>
				<div class="image">
					<img src="http://education-html.themerex.net/images/john_snow_full.jpg" alt="">
				</div>
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