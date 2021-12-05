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
                        <h1>Cảm nhận học viên</h1>
                    </div>

                    <div class="page-breadcrumb">
                    <a class="page-banner-item" href="./home.php">Trang chủ</a>
                            <i class="page-banner-icon fas fa-arrow-right"></i>

                            <a class="page-banner-item" href="./blog-list.php">Blog</a>
                            <i class="page-banner-icon fas fa-arrow-right"></i>

                            <a class="page-banner-item" href="./cam-nhan.php">Cảm nhận học viên</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content white">
            <div class="grid wide">
                <div class="blog-list-wrapper">
                    <div class="row">
                        <div class="col l-8-5">
                            <ul class="blog-list">
                            <?php
                                    include "connect.php";
                                    $sql = "SELECT * FROM blog WHERE topic=2";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        echo "
                                        <li class='blog-item'>
                                        <a href=''>
                                            <h1 class='blog-item-title'>".$row['title']."</h1>
                                        </a>
                                        <img src='./assets/img/blog-giangvien.jpg' alt='blog-giang-vien'>
                                        <ul class='blog-item-info'>
                                            <li>
                                                <a href=''>".$row['time']."</a>
                                            </li>
                                            
                                            <li>
                                                <a href=''>".$row['author']."</a>
                                            </li>
                                            <li>
                                                <i class='far fa-eye'></i>
                                                <span>146</span>
                                                <i class='far fa-comments'></i>
                                                <span>1</span>
                                                <i class='far fa-heart'></i>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                        <p class='blog-item-desc'>
                                        ".substr($row['content'], 0, 250)."...
                                        </p>
                                        <a href='./blog.php' class='btn btn--medium btn--primary blog-list-btn'>READ MORE</a>
                                    </li>
                                        ";
                                    }
                                ?>
                            </ul>

                            <div class="blog-pagination">
                                <ul>
                                    <li><a href="">
                                        <i class="fas fa-chevron-left"></i>
                                    </a></li>
                                    <li><a href="">
                                        1
                                    </a></li>
                                    <li><a href="">
                                        2
                                    </a></li>
                                    <li><a href="">
                                        3
                                    </a></li>
                                    <li><a href="">
                                        <i class="fas fa-chevron-right"></i>
                                    </a></li>
                                </ul>
                            </div>
                        </div>

                        <?php
                            include "./includes/aside.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- nút ontop -->
        <?php
            include "./includes/btntop.php";
        ?>

        <!-- chatbox -->
        <?php
            include "./includes/chatbot.php";
        ?>
    </main>
</body>

<?php
    include "./includes/footer.php";
?>