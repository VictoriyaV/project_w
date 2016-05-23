var datetime = document.getElementById("datetime");
datetime.addEventListener("mouseover", datetimeStyles);
datetime.addEventListener("mouseout", datetimeStyles);

function datetimeStyles() {
    document.datetime.classList.toggle('datetime');
}

// Смена даты на время при наведении 2-digit
function myclock()
{
    d = new Date();
    var options = {
        year: 'numeric',
        month: 'numeric',
        day: 'numeric'
    };
    document.datetime.date.value = d.toLocaleDateString("ru", options);
    document.datetime.clock.value = d.toLocaleTimeString();
    setTimeout("myclock();", 500);
}

var i = 0;
var m = null;
var pic = document.getElementById("logo");
// Смена логотипа при наведении
function logoAnim() {

    var url = ['img/logo.png', 'img/logoR.png', 'img/logoS.png', 'img/logoG.png'];
    pic.src = url[i];
    i++;
    if (i > 3)
        i = 0;
    m = setTimeout("logoAnim();", 500);
}

function setPic() {
    pic.src = 'img/logo.png';
}

// Появление и скрытие блока
function Collaps_Exp(header)
{
    var main_block = header.parentNode.getElementsByTagName('div');
    var main;
    for (var i = 0; i < main_block.length; i++)
    {
        if (main_block[i].className === 'blockHide')
        {
            main = main_block[i];
        }
    }
    if (main.style.display === 'none')
    {
        main.style.display = 'block';
    }
    else
    {
        main.style.display = 'none';
    }
}

// Плавное появление и скрытие блока
function toggle(id)
{
    var e = document.getElementById(id);
    var dh = gh(id);
    var elems = e.getElementsByTagName('div');

    if (e.style.display === "none")
    {
        for (var i = 0; i < elems.length; i++) {
            vhe(elems[i], "hidden");
        }

        e.style.height = "1px";
        e.style.display = "block";
        e.style.opacity = 0;
        for (var i = 0; i <= 100; i += 5)
        {
            (function ()
            {
                var pos = i;
                setTimeout(function () {
                    e.style.height = (pos / 100) * dh + "px";
                    e.style.opacity = (pos / 100);
                }, pos * 10);
            }
            )();
        }
        setTimeout(function () {
            for (var i = 0; i < elems.length; i++) {
                elems[i].style.visibility = "visible";
            }
        }, 1000);
        return true;
    }
    else
    {
        var lh = dh - 1 + "px";

        for (var i = 0; i < elems.length; i++) {
            vhe(elems[i], "hidden");
        }

        for (var i = 100; i >= 0; i -= 5)
        {
            (function ()
            {
                var pos = i;
                setTimeout(function ()
                {
                    e.style.height = (pos / 100) * dh + "px";
                    e.style.opacity = (pos / 100);
                    if (pos <= 0)
                    {
                        e.style.display = "none";
                        e.style.height = lh;
                    }
                }, 1000 - (pos * 10));
            }
            )();
        }
        return true;
    }
    return false;
}
function vhe(obj, vh) {
    obj.style.visibility = vh;
}
function gh(id)
{
    var e = document.getElementById(id);
    if (e.style.display === "none")
    {
        e.style.visibility = "hidden";
        e.style.display = "block";
        dh = e.clientHeight || e.offsetHeight + 5; // Высота
        e.style.display = "none";
        e.style.visibility = "visible";
    }
    else
    {
        dh = e.clientHeight || e.offsetHeight + 5; // Высота
    }
    return dh;
}