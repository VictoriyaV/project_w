function first(form) {
    var DT = new Date,
            Ye = DT.getFullYear(),
            Mo = DT.getMonth(),
            Da = DT.getDate(),
            Cd = new Date(Ye, Mo, Da).getTime();
    Mo = (Da < 13) ? Mo : (Mo + 1);
    if (Mo === 12) {
        Mo = 0;
        Ye++;
    }
    while (new Date(Ye, Mo, 13).getDay() !== 5)
    {
        Mo++;
        if (Mo === 12) {
            Mo = 0;
            Ye++;
        }
    }
    var Fd = new Date(Ye, Mo, 13).getTime();
    var R = Math.ceil((Fd - Cd) / 8.64e7); // 8.64e7 - число милисекунд в году
    var nm = 'января-февраля-марта-апреля-мая-июня-июля-августа-сентября-октября-ноября-декабря'.split('-');
    form.inputbox.value = 'До ближайшей пятницы 13 ' + nm [Mo] + ' ' + Ye + ' г. - ' + R + ' дн.';
}

function second() {
    var DT = new Date,
                    Ye = DT.getFullYear(),
                    Mo = DT.getMonth(),
                    Da = DT.getDate(),
                    Cd = new Date(Ye, Mo, Da).getTime();
            Ye = (Da < 23 && Mo < 7) ? Ye : Ye + 1;
            var Fd = new Date(Ye, 7, 23).getTime();
            var R = Math.ceil((Fd - Cd) / 8.64e7); // 8.64e7 - число милисекунд в году
            return R;
}