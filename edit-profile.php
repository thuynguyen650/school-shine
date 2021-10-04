<?php
    include "./includes/head.php";
?>


<body>
    <?php
            include "./includes/header.php";
    ?>

    <main>
        <div class="page-banner-wrap">
            <div class="grid wide">
                <div class="page-banner">
                    <div class="page-title">
                        <h1>Chỉnh sửa thông tin</h1>
                    </div>

                    <!-- <div class="page-breadcrumb">
                            <a class="page-banner-item" href="">Trang chủ</a>
                            <i class="page-banner-icon fas fa-arrow-right"></i>

                            <a class="page-banner-item" href="">Chỉnh sửa thông tin</a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-12 m-12">
                        <form class="form form-user">
                            <label class="form-user-label">Họ tên</label>
                            <input class="input" type="text" placeholder="Nhập họ tên" />
                            <label class="form-user-label">Email</label>
                            <input class="input" type="email" placeholder="Nhập email" />
                            <label class="form-user-label">Số điện thoại</label>
                            <input class="input" type="text" placeholder="Nhập số điện thoại" />
                            <label class="form-user-label">Nghề nghiệp</label>
                            <select class="input"name="job">
                                <option value="hocsinh">Học sinh</option>
                                <option value="sinhvien">Sinh viên</option>
                                <option value="khac">Khác</option>
                            </select>
                            <label class="form-user-label">Châm ngôn của bạn</label>
                            <textarea class="input" name="w3review" rows="4" cols="100"></textarea>

                            <a class="btn btn--small btn--green" style="width:100%; margin-top:10px;" href="#">Cập nhập</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>

    
</body>

<?php
    include "./includes/btntop.php"
?>

<?php
    include "./includes/footer.php"
?>