var name;
function questionval(n)
{
	name = n;
	var x = document.getElementById("question_val");
	var w = document.getElementById("question_buoihoc");
	var g = document.getElementById("question_time");
	var h = document.getElementById("question_deadline");
	var l = document.getElementById("question_min");
	if (w.value == ""){
		alert('Hãy nhập số buổi');
	}
	else if(w.value.includes('.') || w.value.includes(','))
	{
		alert('Số buổi phải là số nguyên');
	}
	else if (parseInt(w.value) < 0)
	{
		alert('Số buổi không được nhỏ hơn 0');
	}
	else if (x.value == ""){
		alert('Hãy nhập số lượng câu hỏi');
	}
	else if(x.value.includes('.') || x.value.includes(','))
	{
		alert('Số câu hỏi phải là số nguyên');
	}
	else if (parseInt(x.value) < 1)
	{
		alert('Số lượng câu hỏi không được nhỏ hơn 1');
	}
	else if (g.value == ""){
		alert('Hãy nhập thời gian làm bài');
	}
	else if(g.value.includes('.') || g.value.includes(','))
	{
		alert('Thời gian làm bài phải là số nguyên');
	}
	else if (parseInt(g.value) < 5)
	{
		alert('Thời gian làm bài tối thiểu 5 phút');
	}
	else if (h.value == ""){
		alert('Hãy nhập deadline');
	}
	else if (l.value == ""){
		alert('Hãy nhập điểm tối thiểu');
	}
	else if (parseInt(l.value) < 1)
	{
		alert('Điểm tối thiểu là 1');
	}
	else if (parseInt(l.value) > parseInt(x.value))
	{
		alert('Điểm tối thiểu không được lớn hơn số câu hỏi.');
	}
	else{
		var k = document.getElementsByClassName("question");
		if (k.length == 0){
			var y = parseInt(x.value);
			var j = 0;
			for (let i=0; i<y; i++){
				var form = document.createElement("form");
				form.classList.add("question");
				var fieldset = document.createElement("fieldset");
				fieldset.classList.add("field");
				form.appendChild(fieldset);
				var legend = document.createElement("legend");
				var text = document.createTextNode("Câu " + (i+1).toString());
				legend.appendChild(text);
				fieldset.appendChild(legend);
				// đặt legend
				var label = document.createElement("label");
				text = document.createTextNode("Nội dung câu hỏi: ");
				label.appendChild(text);
				fieldset.appendChild(label);
				var textarea = document.createElement("textarea");
				textarea.rows = "5";
				textarea.cols = "40";
				textarea.name = "Text1";
				textarea.classList.add("ans_area");
				textarea.classList.add("noidung");
				fieldset.appendChild(textarea);
				fieldset.appendChild(textarea);
				//Nội dung câu hỏi
				var textarea1 = document.createElement("textarea");
				textarea1.rows = "2";
				textarea1.cols = "40";
				textarea1.name = "Text1";
				textarea1.classList.add("ans_area");
				textarea1.classList.add("dung");
				label = document.createElement("label");
				text = document.createTextNode("Đáp án đúng: ");
				label.appendChild(text);
				fieldset.appendChild(label);
				fieldset.appendChild(textarea1);
				//Đáp án đúng
				textarea1 = document.createElement("textarea");
				textarea1.rows = "2";
				textarea1.cols = "40";
				textarea1.name = "Text1";
				textarea1.classList.add("ans_area");
				textarea1.classList.add("sai1");
				label = document.createElement("label");
				text = document.createTextNode("Đáp án sai 1: ");
				label.appendChild(text);
				fieldset.appendChild(label);
				fieldset.appendChild(textarea1);
				//Đáp án nhiễu 1
				textarea1 = document.createElement("textarea");
				textarea1.rows = "2";
				textarea1.cols = "40";
				textarea1.name = "Text1";
				textarea1.classList.add("ans_area");
				textarea1.classList.add("sai2");
				label = document.createElement("label");
				text = document.createTextNode("Đáp án sai 2: ");
				label.appendChild(text);
				fieldset.appendChild(label);
				fieldset.appendChild(textarea1);
				//Đáp án nhiễu 2
				textarea1 = document.createElement("textarea");
				textarea1.rows = "2";
				textarea1.cols = "40";
				textarea1.name = "Text1";
				textarea1.classList.add("ans_area");
				textarea1.classList.add("sai3");
				label = document.createElement("label");
				text = document.createTextNode("Đáp án sai 3: ");
				label.appendChild(text);
				fieldset.appendChild(label);
				fieldset.appendChild(textarea1);
				//Đáp án nhiễu 3
				var element = document.getElementById("homework");
	   			element.appendChild(form);
			}
			anchor = document.createElement("a");
			text = document.createTextNode("Hoàn tất");
			anchor.appendChild(text);
			anchor.href = "#";
			anchor.classList.add("bt_blue");
			anchor.classList.add("done");
			anchor.setAttribute("onclick", "done_create_ex()");
			var element = document.getElementById("homework");
	   		element.appendChild(anchor);
		}
		else{
			//Trường hợp thêm câu hỏi
			if (x.value > k.length){
				var y = parseInt(x.value);
				var j = 0;
				var e = document.getElementsByClassName("done");
				e[0].parentNode.removeChild(e[0]);
				for (let i=k.length; i<y; i++){
					var form = document.createElement("form");
					form.classList.add("question");
					var fieldset = document.createElement("fieldset");
					fieldset.classList.add("field");
					form.appendChild(fieldset);
					var legend = document.createElement("legend");
					var text = document.createTextNode("Câu " + (i+1).toString());
					legend.appendChild(text);
					fieldset.appendChild(legend);
					// đặt legend
					var label = document.createElement("label");
					text = document.createTextNode("Nội dung câu hỏi: ");
					label.appendChild(text);
					fieldset.appendChild(label);
					var textarea = document.createElement("textarea");
					textarea.rows = "5";
					textarea.cols = "40";
					textarea.name = "Text1";
					textarea.classList.add("ans_area");
					textarea.classList.add("noidung");
					fieldset.appendChild(textarea);
					fieldset.appendChild(textarea);
					//Nội dung câu hỏi
					var textarea1 = document.createElement("textarea");
					textarea1.rows = "2";
					textarea1.cols = "40";
					textarea1.name = "Text1";
					textarea1.classList.add("ans_area");
					textarea1.classList.add("dung");
					label = document.createElement("label");
					text = document.createTextNode("Đáp án đúng: ");
					label.appendChild(text);
					fieldset.appendChild(label);
					fieldset.appendChild(textarea1);
					//Đáp án đúng
					textarea1 = document.createElement("textarea");
					textarea1.rows = "2";
					textarea1.cols = "40";
					textarea1.name = "Text1";
					textarea1.classList.add("ans_area");
					textarea1.classList.add("sai1");
					label = document.createElement("label");
					text = document.createTextNode("Đáp án sai 1: ");
					label.appendChild(text);
					fieldset.appendChild(label);
					fieldset.appendChild(textarea1);
					//Đáp án nhiễu 1
					textarea1 = document.createElement("textarea");
					textarea1.rows = "2";
					textarea1.cols = "40";
					textarea1.name = "Text1";
					textarea1.classList.add("ans_area");
					textarea1.classList.add("sai2");
					label = document.createElement("label");
					text = document.createTextNode("Đáp án sai 2: ");
					label.appendChild(text);
					fieldset.appendChild(label);
					fieldset.appendChild(textarea1);
					//Đáp án nhiễu 2
					textarea1 = document.createElement("textarea");
					textarea1.rows = "2";
					textarea1.cols = "40";
					textarea1.name = "Text1";
					textarea1.classList.add("ans_area");
					textarea1.classList.add("sai3");
					label = document.createElement("label");
					text = document.createTextNode("Đáp án sai 3: ");
					label.appendChild(text);
					fieldset.appendChild(label);
					fieldset.appendChild(textarea1);
					//Đáp án nhiễu 3
					var element = document.getElementById("homework");
		   			element.appendChild(form);
				}
				anchor = document.createElement("a");
				text = document.createTextNode("Hoàn tất");
				anchor.appendChild(text);
				anchor.href = "#";
				anchor.classList.add("bt_blue");
				anchor.classList.add("done");
				anchor.setAttribute("onclick", "done_create_ex()");
				var element = document.getElementById("homework");
		   		element.appendChild(anchor);
			}
			if (x.value < k.length){
				//Trường hợp muốn bỏ bớt câu hỏi
				for (let i=k.length-1; i>=parseInt(x.value); i--){
					k[i].parentNode.removeChild(k[i]);
				}
			}
			
		}
	}
	return false;
}
function done_create_ex(){
	var x = document.getElementsByClassName("ans_area");
	const xhr = new XMLHttpRequest();
	var i;
	for (i=0; i<x.length; i++){
		if (x[i].value == ''){
			alert('sai');
			break;
		}
	}
	if (i==x.length){
		
		var f = document.getElementById("question_buoihoc");
		var g = document.getElementById("question_time");
		var h = document.getElementById("question_deadline");
		var l = document.getElementById("question_min");
		xhr.onload = function(){
			window.location.href = "#";
			create_quest();
			//alert(this.responseText);
		}
		xhr.open("POST","addexercise.php");
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send("makh="+name+"&buoi="+f.value+"&tg="+g.value+"&dl="+h.value+"&min="+l.value);
	}
	
}
//Tạo bài tập
function create_quest(){
	var f = document.getElementById("question_buoihoc");
	
	var mabt = document.getElementById("mabt");
	const xhr1 = new XMLHttpRequest();
	xhr1.onload = function(){
		window.location.href = "#";
		var mabt = document.getElementById("mabt");
		mabt.value = this.responseText.toString();
		create_info_true();
	}
	xhr1.open("POST","addquestion.php");
	xhr1.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhr1.send("makh="+name+"&buoi="+f.value+"&needmabt=yes");
	
	
}
//lấy mã bài tập và tạo bài tập
function create_info_true(){
	window.location.href = "#";
	var m = document.getElementsByClassName("noidung");
	var b = document.getElementsByClassName("dung");
	var c = document.getElementsByClassName("sai1");
	var d = document.getElementsByClassName("sai2");
	var e = document.getElementsByClassName("sai3");
	var mabt = document.getElementById("mabt");
	for (let n=0; n<m.length; n++){
		const xhr2 = new XMLHttpRequest();
		xhr2.onload = function(){
			window.location.href = "#";
			
		}
		xhr2.open("POST","addquestion.php");
		xhr2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr2.send("nd="+m[n].value+"&needmabt="+mabt.value+"&dung="+b[n].value+"&sai1="+c[n].value+"&sai2="+d[n].value+"&sai3="+e[n].value);
	}
	alert("Đã tạo thành công");
	window.location.href = "teacher.php";
}
//Tạo nội dung câu hỏi và đáp án đúng