//Hiển thị các khóa học theo skill được tìm kiếm
function showAll(e){
	e.preventDefault();
	var x = document.getElementsByClassName("_1newcourse");
	for (let i=0; i<x.length; i++){
		// x[i].style.width = "350px";
		// x[i].style.height = "350px";
		x[i].style.display = "block";
	}
	return false;
}
function showCommunication(e){
	e.preventDefault();
	disableAll();
	var x = document.getElementsByClassName("Communication");
	for (let i=0; i<x.length; i++){
      	x[i].style.display = "block";
		
	}
	return false;
}
function showWriting(e){
	e.preventDefault();
	disableAll();
	var x = document.getElementsByClassName("Writing");
	for (let i=0; i<x.length; i++){
      	x[i].style.display = "block";
		
	}
	return false;
}
function showReading(e){
	e.preventDefault();
	disableAll();
	var x = document.getElementsByClassName("Reading");
	for (let i=0; i<x.length; i++){
		x[i].style.display = "block";
	}
	return false;
}
function showListening(e){
	e.preventDefault();
	disableAll();
	var x = document.getElementsByClassName("Listening");
	for (let i=0; i<x.length; i++){
		x[i].style.display = "block";
	}
	return false;
}
function showSpeaking(e){
	e.preventDefault();
	disableAll();
	var x = document.getElementsByClassName("Speaking");
	for (let i=0; i<x.length; i++){
		x[i].style.display = "block";
	}
	return false;
}
function showFull(e){
	e.preventDefault();
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
//Ẩn tất cả khóa học