<?php include"./includes/head.php" ?>

<div class="main_login">
    <div class="container-login" id="container">
        <div class="row" style="padding: 30px 0px;">
            <div class="col l-6 m-6 c-0">
                    <div class="overlay-panel">
                        <a href="./home.php" class="tablet-logo title" style="display: flex; color: var(--white-color);">
                            <div style="margin-top: 15px; margin-right: 4px; font-size: 10rem;">S</div>
                            <div >
                                <div>chool</div>
                                <div style="margin-top: 18px;">hine🌥</div>
                            </div>  
                        </a>
                        <p class="form-des">Laying tomorrow’s foundation</p>
                        <a class="form-forgot form-acc" href="./login.php">Bạn đã có tài khoản?</a>
                    </div>
                </div>
            <div class="col l-6 m-6 c-12">
                <form class="form" action="#" id="register">
                    <h1 class="form-title title-login">Đăng kí tài khoản</h1>
                    <div class="form-group-login">
                        <input class="input" type="text" id="reg_stu_usr" placeholder="Nhập user">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group-login">
                        <input class="input" type="email" id="reg_stu_email" placeholder="Nhâp email" />
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group-login">
                        <input class="input" type="password" id="reg_stu_pass" placeholder="Nhập password" />
                        <span class="form-message"></span>
                    </div>
                    <a class="btn btn-login btn--green" style="width:100%;
                    padding: 9px; margin-top: 5px;" href="#" onclick="register_stu()">Đăng kí</a>
                    <h2 style="margin:20px 0; color: red;">Hoặc có thể đăng nhập với</h2>
                    <div class="social-container">
                        <a href="#" class="fb social-btn">
                            <i class="fa fa-facebook fa-fw"></i> Đăng nhập với Facebook
                        </a>
                        <a href="#" class="twitter social-btn">
                            <i class="fa fa-twitter fa-fw"></i> Đăng nhập với Twitter
                        </a>
                        <a href="#" class="google social-btn"><i class="fa fa-google fa-fw">
                            </i> Đăng nhập với Google+
                        </a>
                    </div>
                 </form>
            </div>
        </div>
    </div>
    <script src="assets/scripts/admin.js"></script>
    <script src="assets/scripts/valiform.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
      // Mong muốn của chúng ta
            Validator({
                form: '#register',
                formGroupSelector: '.form-group-login',
                errorSelector: '.form-message',
                rules: [
                Validator.isRequired('#reg_stu_usr', 'Vui lòng nhập tên tài khoản'),
                Validator.isEmail('#reg_stu_email'),
                Validator.minLength('#reg_stu_pass', 6),
                
                ],
                onSubmit: function (data) {
                // Call API
                console.log(data);
                }
            });
        });
    </script>
</div>
