function student_setup(a){
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
	x.appendChild(p);
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


}