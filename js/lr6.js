var date = new Date();

$(window).load(function () {
    var format_date = date.format("dd.mm.yyyy");
    var copyright = document.getElementById("copyright");
    copyright.innerHTML = format_date;
});

$('#copyright').mouseover(function () {
    window.inter = setInterval(function () {
        var date = new Date();
        var format_date = date.format("hh:mm:ss");
        var copyright = document.getElementById("copyright");
        copyright.innerHTML = format_date;
    }, 100);
});

$('#copyright').mouseout(function () {
    var date = new Date();
    var format_date = date.format("dd.mm.yyyy");
    var copyright = document.getElementById("copyright");
    copyright.innerHTML = format_date;
    clearInterval(window.inter);
});

$('#blockHide').slideDown();

$('#doingsName').click(function () {
    $('#blockHide').slideToggle("slow");
});

$('#headlogo').click(function () {
    window.open("http://learn.javascript.ru/", "learn.javascript.ru", "width=800,height=600");
});

var i = 0;
var pic = document.getElementById("logo");
$('#logo').mouseover(function () {
    window.inter = setInterval(function () {
        var url = ['img/logo.png', 'img/logoR.png', 'img/logoS.png', 'img/logoG.png'];
        pic.src = url[i];
        i++;
        if (i > 3)
            i = 0;
    }, 500);
});

$('#logo').mouseout(function () {
    clearInterval(window.inter);
});