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
                        <form class="form form-user">
                            <label class="form-user-label">Nhập mật khẩu hiện tại</label>
                            <input class="input" type="password" id="change_old" placeholder="" />
                            <label class="form-user-label">Nhập mật khẩu mới</label>
                            <input class="input" type="password" id="change_new" placeholder="" />
                            <label class="form-user-label">Nhập lại mật khẩu mới</label>
                            <input class="input" type="password" id="change_confirm" placeholder="" />
                            <a class="btn btn--medium btn--green" onclick="changePass()" style="width:100%; margin-top:10px; font-size: 20px; padding-bottom: 40px;" href="#">Lưu mật khẩu</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <script src="assets/scripts/admin.js"></script>
</body>

<?php
    include "./includes/btntop.php"
?>

<?php
    include "./includes/footer.php"
?>