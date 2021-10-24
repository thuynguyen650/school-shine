function teacher_setup(a){
	var x = document.getElementById("info");
	var p = document.createElement("p");
	var i = document.createElement("i");
	i.classList.add("fas");
	i.classList.add("fa-book");
	i.classList.add("icon");
	var br = document.createElement("br");
	p.appendChild(i);
	p.appendChild(br);
	var span = document.createElement("span");
	var text = document.createTextNode("Thông tin sơ lược");
	span.appendChild(text);
	p.appendChild(span);
	br = document.createElement("br");
	p.appendChild(br);
	//Tiêu đề
	var if_field = ["Tên: ", "Email: ", "SĐT: ", "Địa chỉ: "];
	for (let j=0; j<a.length; j++){
		var label = document.createElement("label");
		label.classList.add("if_label");
		text = document.createTextNode(if_field[j] + a[j]);
		label.appendChild(text);
		p.appendChild(label);
		br = document.createElement("br");
		p.appendChild(br);
	}
	//Thêm các thông tin cơ bản
	var anchor = document.createElement("a");
	anchor.classList.add("bt_blue");
	anchor.href = "#";
	i = document.createElement("i");
	i.classList.add("fas");
	i.classList.add("fa-pen");
	anchor.appendChild(i);
	text = document.createTextNode(" Chỉnh sửa thông tin");
	anchor.appendChild(text);
	anchor.setAttribute("onclick", "edinfo(event);");
	p.appendChild(anchor);
	x.appendChild(p);
	//alert(a+b+c+d);
	// var x = document.getElementById("course");
	// for (let j=0; j<10; j++){
	// 	var div = document.createElement("div");
	// 	div.classList.add("_1course");
	// 	var i = document.createElement("i");
	// 	i.classList.add("fas");
	// 	i.classList.add("fa-book-open");
	// 	i.classList.add("iconmini");
	// 	div.appendChild(i);
	// 	var anchor = document.createElement("a");
	// 	anchor.href = "mngcourse.php";
	// 	text = document.createTextNode("EL10"+j);
	// 	anchor.appendChild(text);
	// 	div.appendChild(anchor);
	// 	x.appendChild(div);
	// }
}
function edinfo(e){
	e.preventDefault();
	var x = document.getElementById("editif");
	if (x.style.display == 'none')
	{
		x.style.display = "block";
	}
	else
	{
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