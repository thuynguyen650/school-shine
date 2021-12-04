<?php
    include "./includes/head.php";
?>

<body class="forget-page">
    <div id="step1" class="form-forgetpass">
        <form action="#" method="POST" class="form-wrap" id="form-forgetpass1">
            <h2>Quên mật khẩu</h2>
            <div class="form-box">
                <label for="email" class="label-pass">Nhập địa chỉ email</label>
                <input id="email" name="email" type="email" placeholder="Enter Email">
                <span class="form-message"></span>
            </div>
            <div class="form-submit">
                <!-- <input type="submit" value="Gửi" onclick="step1()"> -->
                <a href="#" class="forget-submit" onclick="step1()">Gửi</a>
            </div>
        </form>
    </div>

    <div id="step2" class="form-forgetpass form-forgetpass1">
        <form action="#" method="POST" class="form-wrap" id="form-forgetpass2">
            <h2>Quên mật khẩu</h2>
            <div class="form-box">
                <label for="otp" class="label-pass" >Nhập mã OTP</label>
                <input id="otp" name="otp" type="number" placeholder="Điền mã OTP">
                <span class="form-message"></span>
            </div>
            <div class="form-submit">
                <!-- <input type="submit" value="Gửi"> -->
                <a href="#" class="forget-submit" onclick="step2()">Gửi</a>
            </div>
        </form>
    </div>

    <div id="step3" class="form-forgetpass form-forgetpass1">
        <form action="#" method="POST" class="form-wrap" id="form-forgetpass3">
            <h2>Cập nhật mật khẩu</h2>
            <div class="form-box">
                <label for="pass-new" class="label-pass" >Nhập mật khẩu mới</label>
                <input id="pass-new" name="pass-new" type="password" placeholder="">
                <span class="form-message"></span>
            </div>
            <div class="form-box">
                <label for="pass-new-confirm" class="label-pass" >Nhập lại mật khẩu</label>
                <input id="pass-new-confirm" name="pass-new-confirm" type="password" placeholder="">
                <span class="form-message"></span>
            </div>
            <div class="form-submit">
                <!-- <input type="submit" value="Gửi"> -->
                <a href="login.php" class="forget-submit" onclick="step2()">Cập nhật</a>
            </div>
        </form>
    </div>

    <script src="assets/scripts/valiform.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
      // Mong muốn của chúng ta
            Validator({
                form: '#form-forgetpass1',
                formGroupSelector: '.form-box',
                errorSelector: '.form-message',
                rules: [
                Validator.isEmail('#email')
                ],
                onSubmit: function (data) {
                // Call API
                console.log(data);
                }
            });


            Validator({
                form: '#form-forgetpass2',
                formGroupSelector: '.form-box',
                errorSelector: '.form-message',
                rules: [
                    Validator.isRequired('#otp', 'Vui lòng nhập mã otp'),
                ],
                onSubmit: function (data) {
                // Call API
                console.log(data);
                }
            });

            Validator({
                form: '#form-forgetpass3',
                formGroupSelector: '.form-box',
                errorSelector: '.form-message',
                rules: [
                    Validator.isRequired('#pass-new', 'Vui lòng nhập mật khẩu mới'),
                    Validator.minLength('#pass-new', 6),
                    Validator.isRequired('#pass-new-confirm', 'Vui lòng nhập lại mật khẩu'),
                    Validator.isConfirmed('#pass-new-confirm', function () {
                        return document.querySelector('#form-forgetpass3 #pass-new').value;
                    }, 'Mật khẩu nhập lại không chính xác')
                ],
                onSubmit: function (data) {
                // Call API
                console.log(data);
                }
            });
        });
    </script>
    
    <script>
        function step1() {
            document.getElementById("step1").style.display = "none";
            document.getElementById("step2").style.display = "flex";
        }
        function step2() {
            document.getElementById("step2").style.display = "none";
            document.getElementById("step3").style.display = "flex";
        }
    </script>
</body>