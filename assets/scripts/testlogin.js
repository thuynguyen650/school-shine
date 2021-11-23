function check_login(){
	var username = document.getElementById('username');
	var password = document.getElementById('password');
	const xhr = new XMLHttpRequest();

	xhr.onload = function(){
		if (this.responseText == '0'){
			alert('Sai tên đăng nhập hoặc mật khẩu');
		}
		else{
			if (this.responseText.split("-")[1] == '1')
			{
				document.getElementById('login').submit();
			}
			else if (this.responseText.split("-")[1] == '2'){
				document.getElementById('login').action = "admin.php";
				document.getElementById('login').submit();
			}
			else{
				document.getElementById('login').action = "student.php";
				document.getElementById('login').submit();
			}
		}
	}
	xhr.open("POST","testdataveri.php");
	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhr.send("username="+username.value+"&password="+password.value);
	//Post data
	// var ajax = new XMLHttpRequest();
	// var method = "GET";
	// var url = "testdataveri.php";
	// var asynchronous = true;
	// ajax.open(method, url, asynchronous);
	// ajax.send();
	// ajax.onreadystatechange = function(){
	// 	if (this.readyState == 4 && this.status == 200){
	// 		alert(this.responseText);
	// 	}
	// }
	//document.getElementById('login').submit();
}