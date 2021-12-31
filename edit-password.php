<?php
    include "./includes/head.php";
?>

<?php
        include "./includes/header.php";
?>
<body>
    <main>
        <div class="page-banner-wrap">
            <div class="grid wide">
                <div class="page-banner">
                    <div class="page-title">
                        <h1>Thay đổi mật khẩu</h1>
                    </div>

                    <!-- <div class="page-breadcrumb">
                            <a class="page-banner-item" href="">Trang chủ</a>
                            <i class="page-banner-icon fas fa-arrow-right"></i>

                            <a class="page-banner-item" href="">Thay đổi mật khẩu</a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-12 m-12">
                        <form class="form form-user" id="form-user">
                            <div class="form-group-user">
                                <label class="form-user-label">Nhập mật khẩu hiện tại</label>
                                <input class="input" type="password" id="change_old" placeholder="" />
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group-user">
                                <label class="form-user-label">Nhập mật khẩu mới</label>
                                <input class="input" type="password" id="change_new" placeholder="" />
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group-user">
                                <label class="form-user-label">Nhập lại mật khẩu mới</label>
                                <input class="input" type="password" id="change_confirm" placeholder="" />
                                <span class="form-message"></span>
                            </div>
                            <a class="btn btn--medium btn--green" onclick="changePass(event)" style="width:100%; margin-top:10px; font-size: 20px; padding-bottom: 40px;" href="#">Lưu mật khẩu</a>
                        </form> 
                    </div>

                </div>
            </div>
        </div>
    </main>
    <script src="assets/scripts/admin.js"></script>
    <script src="assets/scripts/valiform.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
      // Mong muốn của chúng ta
            Validator({
                form: '#form-user',
                formGroupSelector: '.form-group-user',
                errorSelector: '.form-message',
                rules: [
                Validator.isRequired('#change_old', 'Vui lòng nhập mật khẩu hiện tại của bạn'),
                Validator.minLength('#change_new', 6),
                Validator.isRequired('#change_confirm', 'Vui lòng nhập lại mật khẩu'),
                Validator.isConfirmed('#change_confirm', function () {
                    return document.querySelector('#form-user #change_new').value;
                }, 'Mật khẩu nhập lại không chính xác')
                
                ],
                onSubmit: function (data) {
                // Call API
                console.log(data);
                }
            });
        });
    </script>
</body>

<!-- nút ontop -->
<?php
    include "./includes/btntop.php";
?>

<!-- chatbox -->
<?php
    include "./includes/chatbot.php";
?>

<?php
    include "./includes/footer.php"
?>