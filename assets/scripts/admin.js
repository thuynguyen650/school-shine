var edit_type;
function opentab(a) {
    var tab = document.getElementById(a);
    var i;
    var x = document.getElementsByClassName('name-tab');
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tab.style.display = "block";
}
function addkh(){
	document.getElementById('info_add_kh').style.display = 'block';
	document.getElementById('info_edit_kh').style.display = 'none';
	document.getElementById('info_del_kh').style.display = 'none';
}
function editkh(){
	document.getElementById('info_add_kh').style.display = 'none';
	document.getElementById('info_edit_kh').style.display = 'block';
	document.getElementById('info_del_kh').style.display = 'none';
	
}
function delkh(){
	document.getElementById('info_add_kh').style.display = 'none';
	document.getElementById('info_edit_kh').style.display = 'none';
	document.getElementById('info_del_kh').style.display = 'block';
}
function add_gv(){
	document.getElementById('info_add_gv').style.display = 'block';
	document.getElementById('info_del_gv').style.display = 'none';
}
function delete_gv(){
	document.getElementById('info_add_gv').style.display = 'none';
	document.getElementById('info_del_gv').style.display = 'block';
}
function del_gv_func(){
	var sel_gv = document.getElementById('sel_del_gv');
	var checkBox = document.getElementById("confirm_del_gv");
	if (sel_gv.selectedIndex == 0){
		alert('Chưa chọn giảng viên');
	}
	else if (checkBox.checked == false) {
		alert('Bạn phải đồng ý xác nhận xóa');
	}
	else{
		const xhr = new XMLHttpRequest();
		xhr.onload = function(){
			
			if (this.responseText == 0){
				alert('Không thể xóa giảng viên này vì giảng viên đã hoặc đang dạy ít nhất một lớp học.');
			}
			else if (this.responseText == 1){
				alert('Xóa giảng viên thành công');
				window.location.href = "admin.php";
			}
			else{
				alert('Đã xảy ra lỗi');
			}
		}
		xhr.open("POST","del_gv.php");
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send("magv="+sel_gv.options[sel_gv.selectedIndex].text.split(' - ')[0]);
	}
}
function add_gv_func(){
	var username = document.getElementById('username_gv');
	var pass = document.getElementById('pass_gv');
	var name = document.getElementById('name_gv');
	var email = document.getElementById('email_gv');
	var phone = document.getElementById('phone_gv');
	var dob = document.getElementById('dob_gv');
	var addr = document.getElementById('addr_gv');
	var gender = document.getElementById('sel_gender_gv');
	if (username.value=='' || pass.value=='' || name.value ==''||
		email.value == ''||phone.value==''||dob.value==''||addr.value=='')
	{
		alert('Các trường không được để trống');
	}
	else{
		const xhr = new XMLHttpRequest();
		xhr.onload = function(){
			
			if (this.responseText == 0){
				alert('Username đã tồn tại');
			}
			else if (this.responseText == 1){
				alert('Thêm giảng viên thành công');
				window.location.href = "admin.php";
			}
			else{
				alert('Đã xảy ra lỗi');
			}
		}
		xhr.open("POST","add_gv.php");
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send("username="+username.value+"&pass="+pass.value+"&name="+name.value+"&email="+email.value+"&phone="+
			phone.value+"&gender="+gender.options[gender.selectedIndex].text+
			"&dob="+dob.value+"&addr="+addr.value+"&loai=1");
	}
}
function del(){
	var makh = document.getElementById('sel_del');
	var checkBox = document.getElementById("confirm");
	if (makh.selectedIndex == 0){
		alert('Chưa chọn khóa học');
	}
	else if (checkBox.checked == false){
		alert('Bạn chưa xác nhận xóa');
	}
	else{
		var ma = makh.options[makh.selectedIndex].text.split(' - ')[0];
		const xhr = new XMLHttpRequest();
		xhr.onload = function(){
			
			if (this.responseText == 0){
				alert('Khóa học đã có người tham gia');
			}
			else if (this.responseText == 1){
				alert('Xóa thành công');
				window.location.href = "admin.php";
			}
			else{
				alert('Đã xảy ra lỗi');
			}
		}
		xhr.open("POST","del_kh.php");
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send("makh="+ma);
	}
	

}
function edit(){
	var makh = document.getElementById('sel_edit');
	var name = document.getElementById('ed_name_course');
	var gia = document.getElementById('ed_gia');
	var gv = document.getElementById('ed_sel_gv');
	var skill = document.getElementById('ed_sel_skill');
	var type = document.getElementById('ed_sel_type');
	var ngaybd = document.getElementById('ed_ngaybd');
	var ngaykt = document.getElementById('ed_ngaykt');
	var gia = document.getElementById('ed_gia');
	var pay = document.getElementById('ed_sel_pay');
	var ca = document.getElementById('ed_sel_ca');
	var thu = document.getElementById('ed_sel_thu');
	var sta = document.getElementById('ed_sel_sta');
	var mota = document.getElementById('ed_mota');
	if (edit_type == 1){
		if (makh.selectedIndex==0){
			alert('Chưa chọn khóa học');
		}
		else if (name.value=='' || gia.value==''){
			alert('Thieu thong tin');
		}
		else{
			const xhr = new XMLHttpRequest();
			xhr.onload = function(){
				alert(this.responseText);
			}
			xhr.open("POST","start_edit_kh.php");
			xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xhr.send("makh="+makh.options[makh.selectedIndex].text.split(' - ')[0]+"&name="+name.value+"&gia="+gia.value+"&gv="+gv.options[gv.selectedIndex].text.split(' - ')[0]+
				"&skill="+skill.options[skill.selectedIndex].text+"&type="+type.selectedIndex+"&ngaybd="+ngaybd.value+"&ngaykt="+ngaykt.value+"&gia="+
				gia.value+"&pay="+pay.selectedIndex+"&ca="+ca.options[ca.selectedIndex].text.split(': ')[0].split(' ')[1]+"&thu="+thu.options[thu.selectedIndex].text.split(' ')[1]+
				"&sta="+sta.selectedIndex+"&mota="+mota.value+"&edittype="+edit_type);
		}
	}
	else{
		const xhr = new XMLHttpRequest();
		xhr.onload = function(){
			alert(this.responseText);
		}
		xhr.open("POST","start_edit_kh.php");
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send("makh="+makh.options[makh.selectedIndex].text.split(' - ')[0]+
				"&sta="+sta.selectedIndex+"&edittype="+edit_type);
	}
}
function edit_sel_course(){
	var select = document.getElementById('sel_edit');
	if (select.selectedIndex != 0){
		var makh = select.options[select.selectedIndex].text.split(' - ')[0];
		const xhr = new XMLHttpRequest();
		xhr.onload = function(){
			var data = this.responseText.split(' | ');
			if (this.responseText.split(' - ')[0]== 0){
				var x = document.getElementsByClassName('nonrestrict');
				var i;
				for (i = 0; i < x.length; i++) {
 					x[i].style.display = "block";
				}
				var x = document.getElementsByClassName('restrict');
				var i;
				for (i = 0; i < x.length; i++) {
 					x[i].style.display = "none";
				}
				var listSta = document.getElementById('ed_sel_sta');
				listSta.selectedIndex = parseInt(this.responseText.split(' - ')[1]);
				edit_type = 0;
			}
			else if (this.responseText == 2){
				alert('Loi truy xuat du lieu');
			}
			else{
				edit_type = 1;
				var x = document.getElementsByClassName('nonrestrict');
				var i;
				for (i = 0; i < x.length; i++) {
 					x[i].style.display = "block";
				}
				var x = document.getElementsByClassName('restrict');
				var i;
				for (i = 0; i < x.length; i++) {
 					x[i].style.display = "block";
				}
				document.getElementById('ed_name_course').value = data[1];
				var listGV = document.getElementById('ed_sel_gv');
				for(var i = 0; i < listGV.length; i++) {
   					if(listGV[i].text.split(' - ')[0] == data[0])
       				{
       					listGV.selectedIndex = i;
       					break;
       				}
 				}
 				var listSkill = document.getElementById('ed_sel_skill');
				for(var i = 0; i < listSkill.length; i++) {
   					if(listSkill[i].text == data[2])
       				{
       					listSkill.selectedIndex = i;
       					break;
       				}
 				}
 				var listType = document.getElementById('ed_sel_type');
				for(var i = 0; i < listType.length; i++) {
   					if(i == data[11])
       				{
       					listType.selectedIndex = i;
       					break;
       				}
 				}
 				document.getElementById('ed_ngaybd').value = data[8];
 				document.getElementById('ed_ngaykt').value = data[9];
 				document.getElementById('ed_gia').value = data[4];
 				var listPay = document.getElementById('ed_sel_pay');
				for(var i = 0; i < listPay.length; i++) {
   					if(i == data[5])
       				{
       					listPay.selectedIndex = i;
       					break;
       				}
 				}
 				var listCa = document.getElementById('ed_sel_ca');
				for(var i = 0; i < listCa.length; i++) {
   					if(listCa[i].text.split(': ')[0].split(' ')[1] == data[6])
       				{
       					listCa.selectedIndex = i;
       					break;
       				}
 				}
 				var listThu = document.getElementById('ed_sel_thu');
				for(var i = 0; i < listThu.length; i++) {
   					if(listThu[i].text.split(' ')[1] == data[7])
       				{
       					listThu.selectedIndex = i;
       					break;
       				}
 				}
 				var listSta = document.getElementById('ed_sel_sta');
				for(var i = 0; i < listSta.length; i++) {
   					if(i == data[10])
       				{
       					listSta.selectedIndex = i;
       					break;
       				}
 				}
 				document.getElementById('ed_mota').value = data[3];
			}
		}
		xhr.open("POST","edit_kh.php");
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send("makh="+makh);
	}
}
function check_suit_makh(){
	if (document.getElementById('code-new-course').value == ''){
		alert('Hãy điền thông tin mã khóa học.')
	}
	else{
		const xhr = new XMLHttpRequest();

		xhr.onload = function(){
			if (this.responseText == '1'){
				document.getElementById('is_suit_makh').style.display = 'inline-block';
				document.getElementById('is_suit_makh').style.color = 'green';
				document.getElementById('is_suit_makh').innerHTML= 'Có thể sử dụng mã khóa học này';
			}
			else{
				document.getElementById('is_suit_makh').style.display = 'inline-block';
				document.getElementById('is_suit_makh').style.color = 'red';
				document.getElementById('is_suit_makh').innerHTML= 'Mã khóa học này đã được sử dụng';
			}
		}
		xhr.open("POST","check_suit_makh.php");
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send("makh="+document.getElementById('code-new-course').value);
	}
	
	
}
function check_suit_gv(){
	var listGV = document.getElementById('sel_gv');
	var listCa = document.getElementById('sel_ca');
	var listThu = document.getElementById('sel_thu');
	if (listGV.selectedIndex==0)
	{
		alert('Hãy chọn giảng viên.');
	}
	else if (listThu.selectedIndex==0 || listCa.selectedIndex==0)
	{
		alert('Hãy điền thông tin về thứ dạy và ca');
	}
	else{
		var gv = listGV.options[listGV.selectedIndex].text.split(' - ')[0];
		var ca = listCa.options[listCa.selectedIndex].text.split(': ')[0].split(' ')[1];

		
		var thu = listThu.options[listThu.selectedIndex].text.split(' ')[1];
		const xhr = new XMLHttpRequest();

		xhr.onload = function(){
			
			if (this.responseText == '1'){
				document.getElementById('is_suit_gv').style.display = 'inline-block';
				document.getElementById('is_suit_gv').style.color = 'green';
				document.getElementById('is_suit_gv').innerHTML= 'Giảng viên có thể dạy';
			}
			else{
				document.getElementById('is_suit_gv').style.display = 'inline-block';
				document.getElementById('is_suit_gv').style.color = 'red';
				document.getElementById('is_suit_gv').innerHTML= 'Giảng viên đã có lớp học khác ở thời gian này';
			}
		}
		xhr.open("POST","check_suit_gv.php");
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send("magv="+gv+"&ca="+ca+"&thu="+thu);
	} 
	
}
function add(){
	var fillFull = 1;
	var maKH = document.getElementById('code-new-course').value;
	if (maKH=='')
	{
		fillFull = 0;
	}
	var tenKH = document.getElementById('name-new-course').value;
	if (tenKH=='')
	{
		fillFull = 0;
	}
	var list_loaiKH = document.getElementsByName("type-course");
	var loaiKH='';
	for(var i = 0; i < list_loaiKH.length; i++) {
   		if(list_loaiKH[i].checked)
       	loaiKH = String(i);
 	}
 	if (loaiKH=='')
	{
		fillFull = 0;
	}
 	var list_loaiSkill = document.getElementsByName("skill");
	var loaiSkill='';

	for(var i = 0; i < list_loaiSkill.length; i++) {
   		if(list_loaiSkill[i].checked)
       	loaiSkill = list_loaiSkill[i].value;
 	}
 	if (loaiSkill=='')
	{
		fillFull = 0;
	}
 	var listGV = document.getElementById('sel_gv');
	var gv = listGV.options[listGV.selectedIndex].text.split(' - ')[0];
	if (listGV.selectedIndex==0)
	{
		fillFull = 0;
	}
	var listCa = document.getElementById('sel_ca');
	var ca = listCa.options[listCa.selectedIndex].text.split(': ')[0].split(' ')[1];
	if (listCa.selectedIndex==0)
	{
		fillFull = 0;
	}
	var listThu = document.getElementById('sel_thu');
	var thu = listThu.options[listThu.selectedIndex].text.split(' ')[1];
	if (listThu.selectedIndex==0)
	{
		fillFull = 0;
	}
	var ngayBD = document.getElementById('ngaybd').value;
	if (ngayBD=='')
	{
		fillFull = 0;
	}
	var ngayKT = document.getElementById('ngaykt').value;
	if (ngayKT=='')
	{
		fillFull = 0;
	}
	var gia = document.getElementById('gia').value;
	if (gia=='')
	{
		fillFull = 0;
	}
	var list_LoaiThanhToan = document.getElementsByName("pay");
	var loaiThanhToan='';

	for(var i = 0; i < list_LoaiThanhToan.length; i++) {
   		if(list_LoaiThanhToan[i].checked)
       	loaiThanhToan = String(i);
 	}
 	if (loaiThanhToan=='')
	{
		fillFull = 0;
	}
 	var moTa = document.getElementById('mota').value;
 	if (moTa=='')
	{
		fillFull = 0;
	}
 	//alert(maKH + '-' + tenKH + '-'+loaiKH+'-'+loaiSkill+'-'+gv+'-'+ca+'-'+thu+'-'+ngayBD+'-'+ngayKT+'-'+gia+'-'+loaiThanhToan+'-'+moTa);
 	if (fillFull==0)
 	{
 		alert('Hãy điền đầy đủ thông tin');
 	}
 	else{
 		const xhr = new XMLHttpRequest();

		xhr.onload = function(){

			if (this.responseText == 1){
				alert('Thêm khóa học thành công.');
				window.location.href = "admin.php";
			}
			else if (this.responseText == 0){
				alert('Thêm khóa học thất bại, hãy kiểm tra lại thông tin.');
			}
			else{
				alert('Lỗi truy xuất dữ liệu.');
			}

			
		}
		xhr.open("POST","add_kh.php");
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send("makh="+maKH+"&tenkh="+tenKH+"&loaikh="+loaiKH+"&loaiskill="+loaiSkill+"&gv="+gv+"&ca="+ca+"&thu="+thu+"&ngaybd="+ngayBD+"&ngaykt="+ngayKT+"&gia="+gia+"&loaitt="+loaiThanhToan+"&mota="+moTa);
 	}
	
}