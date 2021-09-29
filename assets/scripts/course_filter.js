<<<<<<< HEAD
//Hiển thị các khóa học theo skill được tìm kiếm
function showAll(){
	var x = document.getElementsByClassName("_1newcourse");
	for (let i=0; i<x.length; i++){
		// x[i].style.width = "350px";
		// x[i].style.height = "350px";
		x[i].style.display = "block";
	}
	return false;
}

function showWriting(){
	disableAll();
	var x = document.getElementsByClassName("Writing");
	for (let i=0; i<x.length; i++){
      	x[i].style.display = "block";
		
	}
	return false;
}
function showReading(){
	disableAll();
	var x = document.getElementsByClassName("Reading");
	for (let i=0; i<x.length; i++){
		x[i].style.display = "block";
	}
	return false;
}
function showListening(){
	disableAll();
	var x = document.getElementsByClassName("Listening");
	for (let i=0; i<x.length; i++){
		x[i].style.display = "block";
	}
	return false;
}
function showSpeaking(){
	disableAll();
	var x = document.getElementsByClassName("Speaking");
	for (let i=0; i<x.length; i++){
		x[i].style.display = "block";
	}
	return false;
}
function showFull(){
	disableAll();
	var x = document.getElementsByClassName("Full");
	for (let i=0; i<x.length; i++){
		x[i].style.display = "block";
	}
	return false;
}
//Hiển thị các khóa học theo skill được tìm kiếm

//Ẩn tất cả khóa học
//Cách lọc hóa học: Ẩn tất cả các khóa học
//Sau đó hiện các khóa học theo yêu cầu lọc
//Lí do: Ẩn hết để không bị các ô trống thừa.
function disableAll()
{
	var x = document.getElementsByClassName("_1newcourse");
	for (let i=0; i<x.length; i++){
		x[i].style.display = "none";
	}
	
}
=======
//Hiển thị các khóa học theo skill được tìm kiếm
function showAll(){
	var x = document.getElementsByClassName("_1newcourse");
	for (let i=0; i<x.length; i++){
		// x[i].style.width = "350px";
		// x[i].style.height = "350px";
		x[i].style.display = "block";
	}
	return false;
}

function showWriting(){
	disableAll();
	var x = document.getElementsByClassName("Writing");
	for (let i=0; i<x.length; i++){
      	x[i].style.display = "block";
		
	}
	return false;
}
function showReading(){
	disableAll();
	var x = document.getElementsByClassName("Reading");
	for (let i=0; i<x.length; i++){
		x[i].style.display = "block";
	}
	return false;
}
function showListening(){
	disableAll();
	var x = document.getElementsByClassName("Listening");
	for (let i=0; i<x.length; i++){
		x[i].style.display = "block";
	}
	return false;
}
function showSpeaking(){
	disableAll();
	var x = document.getElementsByClassName("Speaking");
	for (let i=0; i<x.length; i++){
		x[i].style.display = "block";
	}
	return false;
}
function showFull(){
	disableAll();
	var x = document.getElementsByClassName("Full");
	for (let i=0; i<x.length; i++){
		x[i].style.display = "block";
	}
	return false;
}
//Hiển thị các khóa học theo skill được tìm kiếm

//Ẩn tất cả khóa học
//Cách lọc hóa học: Ẩn tất cả các khóa học
//Sau đó hiện các khóa học theo yêu cầu lọc
//Lí do: Ẩn hết để không bị các ô trống thừa.
function disableAll()
{
	var x = document.getElementsByClassName("_1newcourse");
	for (let i=0; i<x.length; i++){
		x[i].style.display = "none";
	}
	
}
>>>>>>> c6632e69e53027cb5ec2ee2ac1be719998a3b802
//Ẩn tất cả khóa học