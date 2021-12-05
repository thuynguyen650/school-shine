//enable animation header
setTimeout(function(){
    document.querySelector('.header').classList.remove('preload')
},500);

const mobileMenu = document.querySelectorAll('.mobile-menu')
const mobileNav = document.querySelector('.mobile-nav')

const mobileNavItems = document.querySelectorAll('.mobile-nav-item--has-children')
const header = document.querySelector('header')

// mobile nav onclick handle 
for(let mobileNavItem of mobileNavItems) {
    const _this = mobileNavItem
    mobileNavItem.onclick = function() {
        _this.style.height = _this.style.height === '180px' ? '32px' : '180px'
        _this.querySelector('.sub-nav-list').style.display =  _this.querySelector('.sub-nav-list').style.display === 'block' ? 'none' : 'block'
        _this.querySelector('.nav-icon--down').style.display =  _this.querySelector('.nav-icon--down').style.display === 'none' ? 'block' : 'none'
        _this.querySelector('.nav-icon--up').style.display =  _this.querySelector('.nav-icon--up').style.display === 'block' ? 'none' : 'block'
    }
}

mobileMenu.onclick = () => {
    mobileNav.classList.toggle('show')   
    header.style.height = header.offsetHeight === 150 ? '360px' : '150px' 
}

// sticky header 
window.addEventListener("scroll", function() {
    document.querySelector("header").classList.toggle("sticky", window.scrollY > 0)
})

//tìm kiếm lịch khai giảng
const timeInput = document.querySelector(".time-input")
const thang12 = document.querySelector(".lich-thang-12")
const thang1 = document.querySelector(".lich-thang-1")
const basics = document.getElementsByClassName("basic")
const pres = document.getElementsByClassName("pre")
const levelAs = document.getElementsByClassName("levelA")
const levelBs = document.getElementsByClassName("levelB")
const luyende = document.getElementsByClassName("luyende")
const levelInput = document.querySelector(".level-input")
function timLich(e) {
    if(timeInput.options[timeInput.selectedIndex].value === "12") {
        thang1.style.display="none"
        thang12.style.display="block"
    } else {
        thang12.style.display="none"
        thang1.style.display="block"
    }

    switch(levelInput.options[levelInput.selectedIndex].value) {
        case "1":
            for(let key in pres) {
                console.log(pres[key])
                pres[key].style.display = "none"
            }
            for(let key in basics) {
                basics[key].style.display = "block"
            }
            for(let key in levelAs) {
                levelAs[key].style.display = "none"
            }
            for(let key in levelBs) {
                levelBs[key].style.display = "none"
            }
            for(let key in luyende) {
                luyende[key].style.display = "none"
            }
        // case "2":
    }
}

//đăng ký tư vấn
$("#submit-tuvan").click(function() {
    const sdtTuvan = $("#phone-tuvan").val()
    const nameTuvan = $("#name-tuvan").val()
	if(sdtTuvan==='' || nameTuvan==='') {
		alert('Bạn vui lòng điền đầy đủ thông tin để được tư vấn sớm nhất nhé!')
	} else {
		$.ajax({
			type: "POST",
			url: "add_tuvan.php",
			data: $("#form-tuvan").serialize(),
			success: function(response) {
				console.log(response)
			}
		})
		$("#consult-popup").css("display", "block")
		$(".overlay").css("display", "block")
		setTimeout(() => {
			$("#consult-popup").css("display", "none")
			$(".overlay").css("display", "none")
		}, 3000)
		$("#form-tuvan")[0].reset()
	}
})


//gửi form liên hệ
$(".btn-contact").click(() => {
    const contactName = $("#contact-name").val()
    const contactEmail = $("#contact-email").val()
    const contactSubject = $("#contact-subject").val()
    const contactMessage = $("#contact-message").val()
    if(contactName==='' || contactEmail==='' || contactMessage==='') {
        alert("Bạn vui lòng điền đầy đủ thông tin nhé!")
    } else {
        $.ajax({
            type: "POST",
            url: "add_contact.php",
            data: $("#form-contact").serialize(),
            success: function(res) {
                console.log(res)
            }
        })
        $("#contact-popup").css("display", "block")
		$(".overlay").css("display", "block")
		setTimeout(() => {
			$("#contact-popup").css("display", "none")
			$(".overlay").css("display", "none")
		}, 3000)
		$("#form-contact")[0].reset()
    }
})

function addBlog() {
	console.log('Add')
}