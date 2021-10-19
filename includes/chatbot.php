<div id="chatbot-container">
    <ul id="chatbot-list--btn">
        <li>
            <a href="tel:0355864179" class="chatbot-btn--hover btnPhone">
                <i class="fa fa-phone"></i>
                <p>Gọi ngay 0355864179 </p>
            </a>
            
        </li>
        <li>
            <a class="chatbot-btn--hover" onclick="openForm()">
                <i class="far fa-envelope"></i>
                <p>Liên hệ qua mail</p>
            </a>
            
        </li>
        <li>
            <a href="http://m.me/habangcd/" target="_blank" class="chatbot-btn--hover">
                <i class="fab fa-facebook-messenger"></i>
                <p>Chat qua facebook Messenger</p>
            </a>
        </li>
        <li>
            <a onclick="openChatbotbtn()" class="btnexit-hover"><i class="fas fa-times"></i></a>
        </li>
    </ul>

    <div class="chatbot-wrap" id="chatbot-btn" onclick="closeChatbotbtn()">
        <div class="chatbot-overlay">
            <a class="chatbot-showbtn">
                <i class="chatbot-slide fa fa-phone"></i>
                <i class="chatbot-slide fab fa-facebook-messenger"></i>
                <i class="chatbot-slide far fa-envelope"></i>
            </a>
        </div>
    </div>
</div>

<div id="chatbot-form" class="modal-contact">
    <div class="contact-form-wrapper" style="margin: auto; width: 80%;">
        <a class="chatbot-closeform" onclick="closeForm()">&times;</a>
        <div class="contact-form">
            <div class="grid wide">
                <h1>Liên Hệ Trung Tâm</h1>
                <p class='contact-desc'>Mọi thông tin liên lạc của bạn sẽ được bảo mật. School Shine luôn mong muốn nhận được những phản hồi từ các bạn!</p>
                <form action="">
                    <div class="contact-form-row">
                        <input type="text" class="contact-input" name="contact-name" id="contact-name" placeholder="Name*">
                        <input type="email" class="contact-input" name="contact-email" id="contact-email" placeholder="E-mail*">
                        <select name="contact-subject" id="contact-subject" class="contact-input">
                            <option value="">Than phiền</option>
                            <option value="">Khen ngợi</option>
                            <option value="">Tư vấn/ Đăng ký khóa học</option>
                            <option value="">Tuyển dụng</option>
                        </select>
                    </div>
                        
                    <div class="contact-form-row">
                        <textarea class="contact-input" name="contact-message" id="contact-message" cols="30" rows="6" placeholder="Message"></textarea>
                    </div>

                    <div class="contact-form-submit">
                        <button class="btn btn--primary btn--medium">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
        </div>
                
    </div>
</div>

<script>

    function closeChatbotbtn() {
        document.getElementById("chatbot-btn").style.display = "none";
        document.getElementById("chatbot-list--btn").style.display = "block";
    }
    function openChatbotbtn() {
        document.getElementById("chatbot-btn").style.display = "block";
        document.getElementById("chatbot-list--btn").style.display = "none";
    }
    function openForm() {
        document.getElementById("chatbot-list--btn").style.display = "none";
        document.getElementById("chatbot-form").style.display = "block";
    }
    function closeForm() {
        document.getElementById("chatbot-list--btn").style.display = "block";
        document.getElementById("chatbot-form").style.display = "none";
    }

    var modalform = document.getElementById("chatbot-form");
    window.onclick = function(event) {
        if (event.target == modalform) {
        modalform.style.display = "none";
        document.getElementById("chatbot-list--btn").style.display = "block";
        }
    }       
</script>

<script>
    var chatbotIndex = 0;
    showChatbotbtn();
    
    function showChatbotbtn() {
    var i;
    var chatbotbtn = document.getElementsByClassName("chatbot-slide");
    
    for (i = 0; i < chatbotbtn.length; i++) {
        chatbotbtn[i].style.display = "none";  
    }
    chatbotIndex++;
    if (chatbotIndex > chatbotbtn.length) {chatbotIndex = 1}    
    
    chatbotbtn[chatbotIndex-1].style.display = "block";  
    
    setTimeout(showChatbotbtn, 2000);
    }
</script>