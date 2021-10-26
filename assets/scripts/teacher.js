
function edinfo(e){
	e.preventDefault();
	var x = document.getElementById("editif");
	if (x.style.display == 'none')
	{
		document.getElementById("edbtn").innerHTML = "<i class=\"fas fa-pen\"></i> Đóng cửa sổ cập nhật";
		x.style.display = "block";
	}
	else
	{
		document.getElementById("edbtn").innerHTML = "<i class=\"fas fa-pen\"></i> Chỉnh sửa thông tin";
		x.style.display = "none";
	}
	
}
function done_edit(e){
	e.preventDefault();
	var x =document.getElementsByClassName('in_half');
	for (let i=0; i<x.length; i++){
		if (x[i].value == ''){
			alert('Tất cả các trường không được để trống.');
			return;
		}

	}
	document.getElementById('edinfo').submit();
}
function entercourse(b){
	document.getElementById(b).submit();
}
function enterstudent(s){
	document.getElementById(s).submit();
}
function create_ex(){
	document.getElementById('create_ex').submit();
}
function do_exercise(a){
	document.getElementById(a).submit();
}