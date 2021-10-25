var question = [];
var answer = [];
var len = document.getElementsByClassName("questionbox").length;
answer.length = len;
question.length = len;

function cl(t,e,x,y){
	e.preventDefault();
	myArr = t.split("-");
	var k2 = document.getElementsByClassName(myArr[1]);
	var spl = y.split("nd");
	//alert(document.getElementById("nd"+spl[1]).textContent.split(": ")[1]+k2[0].textContent.split(". ")[1]);
	question[parseInt(spl[1])-1] = document.getElementById("nd"+spl[1]).textContent.split(": ")[1];
	answer[parseInt(spl[1])-1] = k2[0].textContent.split(". ")[1];
	var k = document.getElementsByClassName(myArr[0]);
	for (let i=0; i<k.length; i++){
		k[i].style.backgroundColor = "white";
		k[i].addEventListener("mouseover", function() {
    		this.style.backgroundColor = "#FFB20E";
    		this.style.color = "white";
  		});
  		k[i].addEventListener("mouseout", function() {
    		this.style.backgroundColor = "white";
    		this.style.color = "#666666";
    		
  		});
  		k[i].style.color = "#666666";
	}
	var k1 = document.getElementsByClassName(myArr[1]);
	k1[0].addEventListener("mouseover", function() {
    	this.style.backgroundColor = "red";
    	this.style.color = "white";
  	});
  	k1[0].addEventListener("mouseout", function() {
    	this.style.backgroundColor = "red";
    	this.style.color = "white";
  	});
}
function submit_ex(x,y,e,m){
	var score = 0;
	var len = document.getElementsByClassName("questionbox").length;
	e.preventDefault();
	if (question.length < len)
	{
		alert('Chưa làm hết.');
	}
	else
	{
		p = document.createElement("p");
		text = document.createTextNode("Số điểm của bạn: ")
		p.appendChild(text);
		z = document.createElement("progress");
		z.classList.add("grade");
		z.id = "grade";
		z.value = "0";
		var count = 0;
		z.max = len;
		var d =  document.getElementById("dohomework");
		d.appendChild(p);
		d.appendChild(z);
		var f =  document.createElement("label");
		f.classList.add('txt_grade');
		f.id = "txt_grade";
		d.appendChild(f);

		for (let n=0; n<question.length; n++){
			const xhr2 = new XMLHttpRequest();
			xhr2.onload = function(){
				document.getElementById('dapan'+(n+1).toString()).style.display = 'block';
				document.getElementById('dapan'+(n+1).toString()).innerHTML = 'Đáp án: '+ this.responseText.split("-")[1];
				if (this.responseText.split("-")[0]=='1'){
					count = count +1;
					score = score +1;
					z.value = score.toString();
					document.getElementById('txt_grade').innerHTML = score + "/" +len;
				}
				else{
					count = count +1;
					z.value = score.toString();
					document.getElementById('txt_grade').innerHTML = score + "/" +len;
				}
				if (count == question.length){
					var myobj = document.getElementById("done_ex");
					const xhr3 = new XMLHttpRequest();
					xhr3.onload = function(){
						alert(this.responseText);
					}
					xhr3.open("POST","saverecord.php");
					xhr3.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					xhr3.send("makh="+x+"&buoi="+y+"&caudung="+score+"&mabt="+m);
					myobj.remove();
				}
			}
			xhr2.open("POST","grade.php");
			xhr2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xhr2.send("makh="+x+"&buoi="+y+"&cauhoi="+question[n]+"&tl="+answer[n]);
			
		}
	}
}

