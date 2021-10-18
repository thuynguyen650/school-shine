function choosemusic(e) {

    var audio = document.getElementById('audio');

    var source = document.getElementById('sourceaudio');
    source.src = document.getElementById(e).value;
    audio.load(); //call this to just preload the audio without playing
    audio.play(); //call this to play the song right away

    var i;
    var x = document.getElementsByClassName('btn-music');
    for (i = 0; i < x.length; i++) {
        x[i].style.background = "none";
    }
    document.getElementById(e).style.backgroundColor = "rgb(224, 157, 245)";
};

function choosevideo(b) {
    var video = document.getElementById('Utilities-video');
    var source = document.getElementById('Utilities-video-src');
    source.src = b;
    video.style.display = "block";
    video.load();
    video.play();
}