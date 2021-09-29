<<<<<<< HEAD
//setup các thanh kéo phần đánh giá khóa học của file paid_courses.html
function changeTutorial(){
	var slider = document.getElementById("tutorial");
	var output = document.getElementById("val_tutorial");
	output.innerHTML = slider.value + "%";
	var color = 'linear-gradient(90deg, #1EAACE ' + slider.value + '%, white ' + slider.value +'%)'
	slider.style.background = color;
	recount();
}
function changeTraining(){
	var slider = document.getElementById("training");
	var output = document.getElementById("val_training");
	output.innerHTML = slider.value + "%";
	var color = 'linear-gradient(90deg, #1DBB90 ' + slider.value + '%, white ' + slider.value +'%)'
	slider.style.background = color;
	recount();
}
function changeTeacher(){
	var slider = document.getElementById("teacher");
	var output = document.getElementById("val_teacher");
	output.innerHTML = slider.value + "%";
	var color = 'linear-gradient(90deg, #FFB20E ' + slider.value + '%, white ' + slider.value +'%)'
	slider.style.background = color;
	recount();
}
function changePrice(){
	var slider = document.getElementById("price");
	var output = document.getElementById("val_price");
	output.innerHTML = slider.value + "%";
	var color = 'linear-gradient(90deg, #1EAACE ' + slider.value + '%, white ' + slider.value +'%)'
	slider.style.background = color;
	recount();
}
//setup các thanh kéo phần đánh giá khóa học của file paid_courses.html


//Tính % trung bình đánh giá khóa học của file paid_courses.html
function recount(){
	var slider1 = document.getElementById("tutorial");
	var slider2 = document.getElementById("training");
	var slider3 = document.getElementById("teacher");
	var slider4 = document.getElementById("price");
	var output = document.getElementById("percent");
	output.innerHTML = parseInt((parseInt(slider1.value) + parseInt(slider2.value) + parseInt(slider3.value) + parseInt(slider4.value))/4) + '%';
}
//Tính % trung bình đánh giá khóa học của file paid_courses.html


//Set kĩ năng file paid_courses.html (thẻ h3)
function setUp(){
	var x = document.getElementById("field_name");
	x.innerHTML = localStorage.getItem("fieldName");
}
function setWriting(){
	localStorage.setItem("fieldName", "Writing Skill");
	return true;
}
function setReading(){
	localStorage.setItem("fieldName", "Reading Skill");
	return true;
}
function setSpeaking(){
	localStorage.setItem("fieldName", "Speaking Skill");
	return true;
}
function setListening(){
	localStorage.setItem("fieldName", "Listening Skill");
	return true;
}
function setFull(){
	localStorage.setItem("fieldName", "Full Skill");
	return true;
}
function buyCourse(x,y,z){
	localStorage.setItem("course_name_buy", x.toString());
	localStorage.setItem("sum", y.toString());
	localStorage.setItem("period", z.toString());
}
//Set kĩ năng file paid_courses.html (thẻ h3)
function setheight(){
	var x = document.getElementsByClassName("_1newcourse");
	for (let i=0; i<x.length; i++){
		x[i].style.height = x[1].clientWidth;
	}
=======
//setup các thanh kéo phần đánh giá khóa học của file paid_courses.html
function changeTutorial(){
	var slider = document.getElementById("tutorial");
	var output = document.getElementById("val_tutorial");
	output.innerHTML = slider.value + "%";
	var color = 'linear-gradient(90deg, #1EAACE ' + slider.value + '%, white ' + slider.value +'%)'
	slider.style.background = color;
	recount();
}
function changeTraining(){
	var slider = document.getElementById("training");
	var output = document.getElementById("val_training");
	output.innerHTML = slider.value + "%";
	var color = 'linear-gradient(90deg, #1DBB90 ' + slider.value + '%, white ' + slider.value +'%)'
	slider.style.background = color;
	recount();
}
function changeTeacher(){
	var slider = document.getElementById("teacher");
	var output = document.getElementById("val_teacher");
	output.innerHTML = slider.value + "%";
	var color = 'linear-gradient(90deg, #FFB20E ' + slider.value + '%, white ' + slider.value +'%)'
	slider.style.background = color;
	recount();
}
function changePrice(){
	var slider = document.getElementById("price");
	var output = document.getElementById("val_price");
	output.innerHTML = slider.value + "%";
	var color = 'linear-gradient(90deg, #1EAACE ' + slider.value + '%, white ' + slider.value +'%)'
	slider.style.background = color;
	recount();
}
//setup các thanh kéo phần đánh giá khóa học của file paid_courses.html


//Tính % trung bình đánh giá khóa học của file paid_courses.html
function recount(){
	var slider1 = document.getElementById("tutorial");
	var slider2 = document.getElementById("training");
	var slider3 = document.getElementById("teacher");
	var slider4 = document.getElementById("price");
	var output = document.getElementById("percent");
	output.innerHTML = parseInt((parseInt(slider1.value) + parseInt(slider2.value) + parseInt(slider3.value) + parseInt(slider4.value))/4) + '%';
}
//Tính % trung bình đánh giá khóa học của file paid_courses.html


//Set kĩ năng file paid_courses.html (thẻ h3)
function setUp(){
	var x = document.getElementById("field_name");
	x.innerHTML = localStorage.getItem("fieldName");
}
function setWriting(){
	localStorage.setItem("fieldName", "Writing Skill");
	return true;
}
function setReading(){
	localStorage.setItem("fieldName", "Reading Skill");
	return true;
}
function setSpeaking(){
	localStorage.setItem("fieldName", "Speaking Skill");
	return true;
}
function setListening(){
	localStorage.setItem("fieldName", "Listening Skill");
	return true;
}
function setFull(){
	localStorage.setItem("fieldName", "Full Skill");
	return true;
}
function buyCourse(x,y,z){
	localStorage.setItem("course_name_buy", x.toString());
	localStorage.setItem("sum", y.toString());
	localStorage.setItem("period", z.toString());
}
//Set kĩ năng file paid_courses.html (thẻ h3)
function setheight(){
	var x = document.getElementsByClassName("_1newcourse");
	for (let i=0; i<x.length; i++){
		x[i].style.height = x[1].clientWidth;
	}
>>>>>>> c6632e69e53027cb5ec2ee2ac1be719998a3b802
}