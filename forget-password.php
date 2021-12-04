<?php
    include "./includes/head.php";
?>

<body class="forget-page">
    <div id="step1" class="form-forgetpass">
        <form action="#" method="POST" class="form-wrap">
            <h2>Quên mật khẩu</h2>
            <div class="form-box">
                <label for="email" class="label-pass">Nhập địa chỉ email</label>
                <input id="email" type="email" placeholder="Enter Email">
            </div>
            <div class="form-submit">
                <!-- <input type="submit" value="Gửi" onclick="step1()"> -->
                <a href="#" class="forget-submit" onclick="step1()">Gửi</a>
            </div>
        </form>
    </div>

    <div id="step2" class="form-forgetpass form-forgetpass1">
        <form action="#" method="POST" class="form-wrap">
            <h2>Quên mật khẩu</h2>
            <div class="form-box">
                <label for="otp" class="label-pass" >Nhập mã OTP</label>
                <input id="otp" type="number" placeholder="Điền mã OTP">
            </div>
            <div class="form-submit">
                <!-- <input type="submit" value="Gửi"> -->
                <a href="#" class="forget-submit" onclick="step2()">Gửi</a>
            </div>
        </form>
    </div>

    <div id="step3" class="form-forgetpass form-forgetpass1">
        <form action="#" method="POST" class="form-wrap">
            <h2>Cập nhật mật khẩu</h2>
            <div class="form-box">
                <label for="pass-new" class="label-pass" >Nhập mật khẩu mới</label>
                <input id="pass-new" type="text" placeholder="">
            </div>
            <div class="form-box">
                <label for="pass-new" class="label-pass" >Nhập lại mật khẩu</label>
                <input id="pass-new" type="text" placeholder="">
            </div>
            <div class="form-submit">
                <!-- <input type="submit" value="Gửi"> -->
                <a href="login.php" class="forget-submit" onclick="step2()">Cập nhật</a>
            </div>
        </form>
    </div>

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