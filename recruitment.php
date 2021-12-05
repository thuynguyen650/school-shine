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
                        <h1>Thông tin tuyển dụng</h1>
                    </div>

                    <div class="page-breadcrumb">
                        <a class="page-banner-item" href="./home.php">Trang chủ</a>
                            <i class="page-banner-icon fas fa-arrow-right"></i>

                            <a class="page-banner-item" href="./recruitment.php">Tuyển dụng</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content white">
            <div class="grid wide">
                <div class="blog-list-wrapper">
                    <div class="row">
                        <div class="col l-8-5">
                            <ul class="blog-list new-blog-list">
                            <?php
                                    include "connect.php";
                                    $sql = "SELECT * FROM blog WHERE topic=3";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        echo "
                                        <li class='recruitment-item'>
                                        <div class='recruitment-img'>
                                            <img src='./assets/img/recruitment.jpg' alt=''>
                                        </div>
    
                                        <div class='recruitment-detail'>
                                            <a class='recruitment-title' href=''>".$row['title']."</a>
                                            <p class='recruitment-desc'>
                                                ".substr($row['content'], 0, 90)."...
                                            </p>
                                        </div>
                                    </li>
                                        ";
                                    }
                                ?>
                            </ul>
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