<?php include "./includes/head.php" ?>

<div class="main_login">
    <div class="container-login" id="container">
        <div class="row" style="padding: 30px 0px;">
            <div class="col l-6 m-6 c-12">
                <form class="form" action="teacher.php" id="login">
                    <h1 class="form-title title-login">Đăng nhập</h1>

                    <input class="input" type="email" id="username" placeholder="Nhập tài khoản" />
                    <input class="input" type="password" id="password" placeholder="Nhập mật khẩu" />
                    <a class="form-forgot"href="forget-password.php">Quên mật khẩu?</a>
                    <a class="btn btn-login btn--green" style="width:100%;
                    padding: 9px;" href="#" onclick="check_login()">Đăng nhập</a>
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
            <div class="col l-6 m-6 c-0">
                <div class="overlay-panel overlay-right">
                    <a href="./home.php" class="tablet-logo title" style="display: flex; color: var(--white-color);">
                        <div style="margin-top: 15px; margin-right: 4px; font-size: 10rem;">S</div>
                        <div >
                            <div>chool</div>
                            <div style="margin-top: 18px;">hine🌥</div>
                        </div>  
                    </a>
                    <p class="form-des">Laying tomorrow’s foundation</p>
                    <a class="form-forgot form-acc" href="./register.php">Bạn chưa có tài khoản?</a>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/scripts/testlogin.js" type="text/javascript" charset="utf-8" async defer></script>
</div>
