function opentab(a) {
    var tab = document.getElementById(a);
    var i;
    var x = document.getElementsByClassName('name-tab');
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tab.style.display = "block";
}