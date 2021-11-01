<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/utilities.css">
        <meta charset="utf-8">
        <meta charset="UTF-8">
        <title>SCHOOL SHINE</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

    </head>
    <?php
    include "./includes/head.php";
?>
    <body>
    <?php
        include "./includes/header.php";
    ?>
    <main>
    <!-- Background -->
    <div class="d-flex flex-column justify-content-center w-100 h-100">
    <!-- Music -->
    <div class="utilities-title"> <strong>Music</strong> </div>
    
    <div id="music">
    <audio id="audio" controls>
    <source id="sourceaudio" src="">
    </audio>
    <div id="playlist">
    <ul>
        <li><button class="btn-music" id="one" value="source/At My Worst.mp3" onclick="choosemusic('one')">At My Worst</button></li>
        <li><button class="btn-music" id="two" value="source/Circles.mp3" onclick="choosemusic('two')">Memories</button> </li>
        <li><button class="btn-music" id="three" value="source/Girls Like You.mp3" onclick="choosemusic('three')">Girls Like You</button>  </li>
        <li><button class="btn-music" id="four" value="source/I Don't Care.mp3" onclick="choosemusic('four')">Someone You Loved</button> </li>
        <li><button class="btn-music" id="five" value="source/I'm A Mess.mp3" onclick="choosemusic('five')">Oh my way</button> </li>
        <li><button class="btn-music" id="six" value="source/If I Can't Have You.mp3" onclick="choosemusic('six')">I'm A Mess</button> </li>
        <li><button class="btn-music" id="serven" value="source/Memories.mp3" onclick="choosemusic('serven')">Circles</button> </li>
        <li><button class="btn-music" id="eight"value="source/On My Way.mp3" onclick="choosemusic('eight')">I Don't Care</button> </li>
        <li><button class="btn-music" id="nine"value="source/Someone You Loved.mp3" onclick="choosemusic('nine')">If I Can't Have You</button> </li>
        <li><button class="btn-music" id="ten"value="source/Without Me.mp3" onclick="choosemusic('ten')">Without Me</button> </li>
    </ul>
    </div>
    <div class="clear"></div>
    </div>

    <div id="video">
    <div class="utilities-title"> <strong>Video</strong> </div>
    <div id="list-video">
    <div>
            <a href="#Utilities-video" onclick="choosevideo('video/video1.mp4')">
                <img src="assets/img/_3.PNG" alt="">
                <h3>90 Từ vựng tiếng anh thông dụng</h3>
            </a>
        </div>
        <div>
            <a href="#Utilities-video" onclick="choosevideo('video/video2.mp4')">
                <img src="assets/img/Capture_4.PNG" alt="">
                <h3>Cách tập trung 100% vào học tập và làm việc</h3>
            </a>
        </div>
        <div>
            <a href="#Utilities-video" onclick="choosevideo('video/video3.mp4')">
                <img src="assets/img/Capture_1.PNG" alt="">
                <h3>Cách tự học tiếng anh mỗi ngày để lên trình</h3>
            </a>
        </div>
        <div>
            <a href="#Utilities-video" onclick="choosevideo('video/video4.mp4')">
                <img src="assets/img/Capture.PNG" alt="">
                <h3>Tiếng anh giao tiếp cho người mới bắt đầu</h3>
            </a>
        </div>
    </div>
    <video id="Utilities-video" controls>
        <source id="Utilities-video-src" src="video/video2.mp4">
    </video>
    </div>

    <div id="game">
    <div class="utilities-title"> <strong>Game</strong> </div>
    <div id="list-game">
        <div>
        <a href="game/game_1/game_1.html" >
                <img src="assets/img/game_1.PNG" alt="">
                <h3>UP-tO-GAME</h3>
            </a>
        </div>
        <div>
        <a href="game/game_2" >
                <img src="assets/img/game_2.PNG" alt="">
                <h3>HESTRIX</h3>
            </a>
        </div>
        <div>
        <a href="game/game_3/">
                <img src="assets/img/game_3.PNG" alt="">
                <h3>jISNAW</h3>
            </a>
        </div>
    </div>
    </div>
    </div>
    </main>
    <?php
            include "./includes/btntop.php";
        ?>
       
    </main>
    

    <?php
        include "./includes/footer.php";
    ?>
    </body>
    <script src="assets/scripts/utilities.js"></script>
</html>