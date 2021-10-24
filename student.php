<?php
	include "connect.php";
	$sql2 = "SELECT * FROM TAIKHOAN where TENDANGNHAP =". '\'' .$_COOKIE['username']. '\'';
	$query2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($query2);
	if (strcmp($row2['Loai'], '0') != 0)
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
	<title>SchoolShine: Student</title>
	<link rel="stylesheet" href="assets/css/buycourse.css">
	<link rel="stylesheet" href="assets/css/usermng.css">
	<link rel="stylesheet" type="text/css" href="FontAwesome/css/all.css">
	<script src="assets/scripts/student.js" type="text/javascript" charset="utf-8" async defer></script>
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
		echo 'onload= "student_setup([\''.$row['HOTEN'].'\',\''.$row['EMAIL'].'\',\''.$row['SDT'].'\',\''.$row['DIACHI'].'\']);"'
	 ?>>
	<?php
        include "./includes/header.php";
    ?>
    <main>
    	<div class="panel">
			<div class="checkout_title">
				<?php 
					echo('<p>Chào mừng '.$row['HOTEN'].'</p>')
				?>
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
				<span>Các khóa học của bạn</span>
				<?php 
					$sql1 = "SELECT * FROM THAMGIA where MAHV =". '\'' .$row['MATK']. '\'';
					$query1 = mysqli_query($conn, $sql1);
					$j = 1;
					while($row1 = mysqli_fetch_array($query1)){
							echo "<div class=\"_1course\">";
							echo "<i class=\"fas fa-book-open iconmini\"></i>";
							echo "<a href=\"#\" title=\"\" onclick='showex(event, \"course".$j."\", \"listcourse".$j."\")'>".$row1['MAKH']." <i class=\"far fa-plus-square showex\" id=\"course".$j."\"></i></a>";
							echo "<div class=\"listex\" id=\"listcourse".$j."\", style=\"display: none;\">";
							// echo "<a href=\"#\" title=\"\"> <i class=\"fas fa-circle\"></i> OK</a> <br>";
							// echo "<a href=\"#\" title=\"\"> <i class=\"fas fa-circle\"></i> OK</a> <br>";
							// echo "<a href=\"#\" title=\"\"> <i class=\"fas fa-circle\"></i> OK</a> <br>";
							// echo "<a href=\"#\" title=\"\"> <i class=\"fas fa-circle\"></i> OK</a> <br>";
							$sql2 = "SELECT * FROM BAITAP WHERE MAKH = '".$row1['MAKH']."'";
							$query2 = mysqli_query($conn, $sql2);
							$i = 1;
							while($row2 = mysqli_fetch_array($query2)){
								echo "<form class=\"_1course\" id=\"do_ex".$i."\" action=\"dohomework.php\" method=\"post\">";
								echo "<input type=\"text\" name=\"exname\" class=\"exname\" value=\"".$row1['MAKH']."\">";
								echo "<input type=\"text\" name=\"lession\" class=\"exname\" value=\"".$row2['BUOIHOC']."\">";
								echo "<input type=\"text\" name=\"mabt\" class=\"exname\" value=\"".$row2['MABT']."\">";
								$sql3 = "SELECT * FROM LICHSU WHERE MAHV = '".$_COOKIE['userid']."' and MABT = ".$row2['MABT'];
								$query3 = mysqli_query($conn, $sql3);
								$deadline = explode("T",$row2['DEADLINE']);
								$dead_time = $deadline[1];
								$dead_day = explode("-",$deadline[0]);
								if (time() >= strtotime($row2['DEADLINE'])) {
 									echo "<a href=\"#\" title=\"\" style=\"pointer-events: none;\"><i class=\"fas fa-circle\"></i> Bài tập buổi ".$row2['BUOIHOC']."</a>";
 									echo "<label>(Deadline: ".$dead_time." ngày ".$dead_day[2]."/".$dead_day[1]."/".$dead_day[0].")</label>";
 									echo "<label class=\"result_ex\">Trễ Deadline</label>";
								}
								elseif (mysqli_num_rows($query3)==0){
									echo "<a href=\"#\" title=\"\" onclick='do_exercise(\"do_ex".$i."\")'><i class=\"fas fa-circle\"></i> Bài tập buổi ".$row2['BUOIHOC']."</a>";
									echo "<label>(Deadline: ".$dead_time." ngày ".$dead_day[2]."/".$dead_day[1]."/".$dead_day[0].")</label>";
								}
								else{
									$row3 = mysqli_fetch_array($query3);
									echo "<a href=\"#\" title=\"\" style=\"pointer-events: none;\"><i class=\"fas fa-circle\"></i> Bài tập buổi ".$row2['BUOIHOC']."</a>";
									echo "<label>(Deadline: ".$dead_time." ngày ".$dead_day[2]."/".$dead_day[1]."/".$dead_day[0].")</label>";
									if ((int)$row3['ISPASS'] == 1)
									{
										echo "<label class=\"result_ex\"> / Kết quả: Đạt</label>";
									}
									else{
										echo "<label class=\"result_ex\"> / Kết quả: Không đạt</label>";
									}
									echo "<label class=\"result_ex\">Điểm đạt được: ".$row3['DIEM']." </label>";
									
								}

								echo "</form>";
								$i = $i+1;
							}
							echo "</div>";
							echo "</div>";
							$j = $j+1;
					}
				?>
			</div>
			<!-- <div class="_1course">
				<i class="fas fa-book-open iconmini"></i>
				<a href="#" title="" onclick='showex(event, "course1", "listcourse1")'>EL01 <i class="far fa-plus-square showex" id="course1"></i></a>
				<div class="listex" id="listcourse1", style="display: none;">
					<a href="#" title=""></a> <br>
					<a href="#" title=""></a> <br>
					<a href="#" title=""></a> <br>
					<a href="#" title=""></a> <br>s
				</div>
			</div> -->
		</div>
    </main>
    <?php
        include "./includes/footer.php";
    ?> 
</body>
</html>