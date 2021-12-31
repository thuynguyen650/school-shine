<?php
	if (strcmp($_COOKIE['username'], '') == 0)
	{
		header("Location: http://localhost/school-shine/block.php");
		exit();
	}
	else{
		include "connect.php";
		$sql2 = "SELECT * FROM TAIKHOAN where TENDANGNHAP =". '\'' .$_COOKIE['username']. '\'';
		$query2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_array($query2);
		if (strcmp($row2['Loai'], '1') == 0)
		{
			header("Location: http://localhost/school-shine/block.php");
			exit();
		}
		//mysqli_close($conn);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		Thanh toán khóa học
	</title>
	<link rel="stylesheet" href="assets/css/buycourse.css">
	<link rel="stylesheet" type="text/css" href="FontAwesome/css/all.css">
	<script src="assets/scripts/buycourse.js" type="text/javascript" charset="utf-8" async defer></script>
</head> 
<?php
    include "./includes/head.php";
?> 
<body onload="setup()">
	<?php
        include "./includes/header.php";
    ?>
	<main>
	<div class="panel">
		<div class="checkout_title">
			<p>Thanh toán khoá học</p>
		</div>
	</div>
	<div class="bill_details">
		<div class="suggest_tip">
			<?php 
			echo "<p>Học viên: ".$row2['HOTEN']."</p>";
			 ?>
			
		</div>
		<div class="suggest_tip">
			<p><i class="fas fa-percent buy"></i> Bạn có mã giảm giá? <a href="" title="" class="click_login">Bấm vào đây để áp dụng ngay</a></p>
		</div>
		<div class="info">
			<div class="detail">
				<label class="label_detail">Thông tin thanh toán</label><br> <br>
				<em>Trường (*) là các trường bắt buộc</em><br> <br>
				<div class="full">
					<input type="text" name="" class="in_full" placeholder="Tên khoá học" id="course_name_fill" readonly>
					<br> <br>
				</div>
				<div class="half">
					<label class="detail_field">Họ <label class="notnull">*</label> <br>
					</label>
					<?php 
						echo "<input type=\"text\" name=\"\" class=\"in_half\" id=\"inFirstName\" value=\"".explode(" ",$row2['HOTEN'])[0]."\" oninput =\"checkBlankFirstName();\">";
					?>
					
					<br>
					<label class="error" id="first_name_er">Lỗi ở đây</label>
					<br>
					
				</div>
				<div class="half">
					<label class="detail_field">Tên <label class="notnull">*</label> <br>
					</label>
					<?php 
						echo "<input type=\"text\" name=\"\" class=\"in_half\" id=\"inMiddleName\" value=\"".explode(" ",$row2['HOTEN'],2)[1]."\" oninput =\"checkBlankMiddleName();\">";
					?>
					
					<br>
						<label class="error" id="middle_name_er">Lỗi ở đây</label>
					<br>
					<br>
				</div>
				<div class="full">
					<label class="detail_field">Tên công ty/Trường học <br>
					</label>
					<input type="text" name=""  class="in_full">
					<br> <br> <br>
				</div>
				<div class="half">
					<label class="detail_field">Địa chỉ email <label class="notnull">*</label> <br>
					</label>
					<?php 
						echo "<input type=\"email\" name=\"\" class=\"in_half\" value=\"".$row2['EMAIL']."\" id=\"inEmail\" oninput=\"checkBlankEmail();\"><br>";
					?>
					
					<label class="error" id="email_er">Lỗi ở đây</label>
					<br> 
				</div>
				<div class="half">
					<label class="detail_field">Số điện thoại <label class="notnull">*</label> <br>
					</label>
					<?php 
						echo "<input type=\"number\" name=\"\" class=\"in_half\" value=\"".$row2['SDT']."\" id=\"inPhone\" oninput=\"checkBlankPhone();\">";
					?>
					
					<br>
					<label class="error" id="phone_er">Lỗi ở đây</label>
					<br> <br> 
				</div>
				
				<div class="half">
					<label class="detail_field">Tỉnh / Thành phố<label class="notnull">*</label> <br>
					</label>
					<select name="calc_shipping_provinces" required="" class="in_half" id="province" onchange="changedist();">
					<option value="">Tỉnh / Thành phố</option>
					</select>
					<br>
					<label class="error province_er">Lỗi ở đây</label>
					<br> <br>
				</div>
				<div class="half">
					<label class="detail_field">Quận / Huyện <label class="notnull">*</label> <br>
					</label>
					<select name="calc_shipping_district" required="" class="in_half" id="district" onchange="changeward();">
				 	<option value="">Quận / Huyện</option>
					</select>
					<br>
					<label class="error district_er">Lỗi ở đây</label>
					<br> <br>
				</div>
				<div class="half">
					<label class="detail_field">Xã<label class="notnull">*</label> <br>
					</label>
					<select name="calc_shipping_ward" required="" class="in_half" id="ward">
					<option value="">Xã</option>
					</select>
					<br>
					<label class="error ward_er">Lỗi ở đây</label>
					<br> <br>
				</div>
				<div class="half">
					<label class="detail_field">Số nhà<br>
					</label>
					<input type="text" name="" class="in_half">
					<br> <br> <br>
				</div>
			
			</div>
			<div class="addition_info">
				<label class="label_detail">Thông tin bổ sung</label><br><br>
				<div class="full">
					<label class="detail_field"> Ghi chú đơn hàng<br>
					</label>
					<input type="text" name="" class="in_full note" placeholder="Ghi nhận các yêu cầu, thắc mắc của bạn về khóa học."> 
					<br> <br>
					<label class="label_detail sum" id="sum">Thành tiền: 250.000đ</label><br><br>
					<em class="label_period" id="label_period">Thanh toán 1 lần</em><br><br>
				</div>

			</div>
		</div>
		<div class="payment">
			<ul>
				<li>
					<input type="radio" id="visa" name="payment_method" class="payment" value="visa">
  					<label for="visa">Thẻ Visa/Master Card <img src="assets/img/visa.png" alt=""></label><br>
				</li>
				<li>
					<input type="radio" id="bank" name="payment_method" class="payment" value="bank">
 					<label for="bank">Tài khoản ngân hàng nội địa <img src="assets/img/bank.png" alt=""></label><br>
				</li>
				<li>
					<input type="radio" id="momo" name="payment_method" class="payment" value="momo">
 					<label for="momo">Ví momo  <img src="assets/img/momo.png" alt=""></label><br>
				</li>
			</ul>
			<div>
				<?php 
					echo "<form name=\"frmBuycourse\" class=\"frmBuycourse\" action=\"buy.php\" method=\"post\" id=\"buy\">
						<input type=\"text\" name=\"makh\" id=\"makh\" value= \"\" readonly>
						<input type=\"text\" name=\"mahv\" value=\"".$row2['MATK']."\" readonly>
						</form>";
				?>
				
				
				<a href="#" title="" onclick="buy(event);">Thanh toán ngay</a>
			</div>
			
		</div>
	</div>
	</main>
	<?php
        include "./includes/footer.php";
    ?> 
</body>
</html>