<<<<<<< HEAD
//lấy thông tin 1 tỉnh
fetch("local.json")
	.then(function(resp){
		return resp.json();
	})
	.then(function(data){
		
		console.log(data);
		for (let i=0; i<data.length; i++){
			var x = document.getElementById("province");
			var option = document.createElement("option");
  			option.text = data[i].name;
  			x.add(option);
		}
	})
function changedist(){
	var x = document.getElementById("province");
	var y = document.getElementById("district");
	fetch("local.json")
	.then(function(resp){
		return resp.json();
	})
	.then(function(data){
		refreshdist();
		refreshward();
		for (let i=0; i<data[parseInt(x.selectedIndex)-1].districts.length; i++){
			var option = document.createElement("option");
  			option.text = data[parseInt(x.selectedIndex)-1].districts[i].name;
  			y.add(option);
		}
	})
}
function changeward(){
	var z = document.getElementById("province");
	var x = document.getElementById("district");
	var y = document.getElementById("ward");
	fetch("local.json")
	.then(function(resp){
		return resp.json();
	})
	.then(function(data){
		refreshward();
		for (let i=0; i<data[parseInt(z.selectedIndex)-1].districts[parseInt(x.selectedIndex)-1].wards.length; i++){
			var option = document.createElement("option");
  			option.text = data[parseInt(z.selectedIndex)-1].districts[parseInt(x.selectedIndex)-1].wards[i].name;
  			y.add(option);
		}
	})
}
function refreshdist()
{
	var y = document.getElementById("district");
	for (let i=y.length; i>0; i--){
		y.remove(i);
	}
}

function refreshward()
{
	var y = document.getElementById("ward");
	for (let i=y.length; i>0; i--){
		y.remove(i);
	}
}
function checkBlankFirstName(){
	var z = document.getElementById("inFirstName");
	var x = document.getElementById("first_name_er");
	if (z.value == "")
	{
		z.style.border = "1px solid red";
		x.style.display = "block";
		x.innerHTML = 'Trường này không được để trống';
	}
	else{
		z.style.border = "1px solid #F4F7F9"
		x.style.display = "none";
	}
}
function checkBlankMiddleName(){
	var z = document.getElementById("inMiddleName");
	var x = document.getElementById("middle_name_er");
	if (z.value == "")
	{
		z.style.border = "1px solid red";
		x.style.display = "block";
		x.innerHTML = 'Trường này không được để trống';
	}
	else{
		z.style.border = "1px solid #F4F7F9"
		x.style.display = "none";
	}
}
function checkBlankPhone(){
	var z = document.getElementById("inPhone");
	var x = document.getElementById("phone_er");
	if (z.value == "")
	{
		z.style.border = "1px solid red";
		x.style.display = "block";
		x.innerHTML = 'Trường này không được để trống';
	}
	else{
		z.style.border = "1px solid #F4F7F9"
		x.style.display = "none";
	}
}
function checkBlankEmail(){
	var z = document.getElementById("inEmail");
	var x = document.getElementById("email_er");
	if (z.value == "")
	{
		z.style.border = "1px solid red";
		x.style.display = "block";
		x.innerHTML = 'Trường này không được để trống';
	}
	else{
		z.style.border = "1px solid #F4F7F9"
		x.style.display = "none";
	}
}
function buy()
{
	var x = document.getElementById("inFirstName");
	var y = document.getElementById("inMiddleName");
	var z = document.getElementById("inPhone");
	var a = document.getElementById("province");
	var b = document.getElementById("district");
	var c = document.getElementById("ward");
	if (x.value == "" || y.value == "" || z.value == "")
	{
		alert('Hãy điền các trường bắt buộc');
		return false;
	}
	else if(a.selectedIndex == 0 || c.selectedIndex ==0 || b.selectedIndex ==0)
	{
		alert('Hãy điền đầy đủ địa chỉ');
		return false;
	}
	else{
		alert("Thanh toán thành công");
		window.location.replace("index.html");
	}
}
function typePass(){
	var checkBox = document.getElementById("create_account");
	var pass = document.getElementById("inPass");
	if (checkBox.checked == true){
    	pass.readOnly = false;
  	} else {
     	pass.readOnly = true;
     	pass.value = "";
  }
}

function setup(){
	var x = document.getElementById("course_name_fill");
	var y = document.getElementById("sum");
	var z = document.getElementById("label_period");
	course_name_fill.value = localStorage.getItem("course_name_buy").toUpperCase();
	y.innerHTML = 'Thành tiền: '+ localStorage.getItem("sum");
	if (localStorage.getItem("period") == "none")
	{
		z.innerHTML = '(Thanh toán 1 lần)'
	}
	else
	{
		z.innerHTML = '(Thanh toán theo ' + localStorage.getItem("period")+')';
	}
=======
//lấy thông tin 1 tỉnh
fetch("local.json")
	.then(function(resp){
		return resp.json();
	})
	.then(function(data){
		
		console.log(data);
		for (let i=0; i<data.length; i++){
			var x = document.getElementById("province");
			var option = document.createElement("option");
  			option.text = data[i].name;
  			x.add(option);
		}
	})
function changedist(){
	var x = document.getElementById("province");
	var y = document.getElementById("district");
	fetch("local.json")
	.then(function(resp){
		return resp.json();
	})
	.then(function(data){
		refreshdist();
		refreshward();
		for (let i=0; i<data[parseInt(x.selectedIndex)-1].districts.length; i++){
			var option = document.createElement("option");
  			option.text = data[parseInt(x.selectedIndex)-1].districts[i].name;
  			y.add(option);
		}
	})
}
function changeward(){
	var z = document.getElementById("province");
	var x = document.getElementById("district");
	var y = document.getElementById("ward");
	fetch("local.json")
	.then(function(resp){
		return resp.json();
	})
	.then(function(data){
		refreshward();
		for (let i=0; i<data[parseInt(z.selectedIndex)-1].districts[parseInt(x.selectedIndex)-1].wards.length; i++){
			var option = document.createElement("option");
  			option.text = data[parseInt(z.selectedIndex)-1].districts[parseInt(x.selectedIndex)-1].wards[i].name;
  			y.add(option);
		}
	})
}
function refreshdist()
{
	var y = document.getElementById("district");
	for (let i=y.length; i>0; i--){
		y.remove(i);
	}
}

function refreshward()
{
	var y = document.getElementById("ward");
	for (let i=y.length; i>0; i--){
		y.remove(i);
	}
}
function checkBlankFirstName(){
	var z = document.getElementById("inFirstName");
	var x = document.getElementById("first_name_er");
	if (z.value == "")
	{
		z.style.border = "1px solid red";
		x.style.display = "block";
		x.innerHTML = 'Trường này không được để trống';
	}
	else{
		z.style.border = "1px solid #F4F7F9"
		x.style.display = "none";
	}
}
function checkBlankMiddleName(){
	var z = document.getElementById("inMiddleName");
	var x = document.getElementById("middle_name_er");
	if (z.value == "")
	{
		z.style.border = "1px solid red";
		x.style.display = "block";
		x.innerHTML = 'Trường này không được để trống';
	}
	else{
		z.style.border = "1px solid #F4F7F9"
		x.style.display = "none";
	}
}
function checkBlankPhone(){
	var z = document.getElementById("inPhone");
	var x = document.getElementById("phone_er");
	if (z.value == "")
	{
		z.style.border = "1px solid red";
		x.style.display = "block";
		x.innerHTML = 'Trường này không được để trống';
	}
	else{
		z.style.border = "1px solid #F4F7F9"
		x.style.display = "none";
	}
}
function checkBlankEmail(){
	var z = document.getElementById("inEmail");
	var x = document.getElementById("email_er");
	if (z.value == "")
	{
		z.style.border = "1px solid red";
		x.style.display = "block";
		x.innerHTML = 'Trường này không được để trống';
	}
	else{
		z.style.border = "1px solid #F4F7F9"
		x.style.display = "none";
	}
}
function buy()
{
	var x = document.getElementById("inFirstName");
	var y = document.getElementById("inMiddleName");
	var z = document.getElementById("inPhone");
	var a = document.getElementById("province");
	var b = document.getElementById("district");
	var c = document.getElementById("ward");
	if (x.value == "" || y.value == "" || z.value == "")
	{
		alert('Hãy điền các trường bắt buộc');
		return false;
	}
	else if(a.selectedIndex == 0 || c.selectedIndex ==0 || b.selectedIndex ==0)
	{
		alert('Hãy điền đầy đủ địa chỉ');
		return false;
	}
	else{
		alert("Thanh toán thành công");
		window.location.replace("index.html");
	}
}
function typePass(){
	var checkBox = document.getElementById("create_account");
	var pass = document.getElementById("inPass");
	if (checkBox.checked == true){
    	pass.readOnly = false;
  	} else {
     	pass.readOnly = true;
     	pass.value = "";
  }
}

function setup(){
	var x = document.getElementById("course_name_fill");
	var y = document.getElementById("sum");
	var z = document.getElementById("label_period");
	course_name_fill.value = localStorage.getItem("course_name_buy").toUpperCase();
	y.innerHTML = 'Thành tiền: '+ localStorage.getItem("sum");
	if (localStorage.getItem("period") == "none")
	{
		z.innerHTML = '(Thanh toán 1 lần)'
	}
	else
	{
		z.innerHTML = '(Thanh toán theo ' + localStorage.getItem("period")+')';
	}
>>>>>>> c6632e69e53027cb5ec2ee2ac1be719998a3b802
}