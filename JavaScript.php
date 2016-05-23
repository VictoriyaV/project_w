<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Сайт о творчестве</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Description" content="Сайт о творчестве">
        <link media="screen" rel="stylesheet" href="styles/main.css">
        <link media="print" rel="stylesheet" href="styles/print.css">
        <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
<script src="js/java.js"></script>
 <script async src="js/main.js"></script>

    </head>
    <body>
        <div id="content">

        <?php include ("include/leftcont.php"); ?>

                <div id="mainannotation">
                    <p>Высокое искусство не только отображает жизнь, оно, участвуя в жизни, ее меняет</p>
                </div>
                <div id="maincontent">

                  <SCRIPT>

function first(form) {
var date = new Date();

var options = {
  year: 'numeric',
  month: 'long',
  day: 'numeric',
  weekday: 'long',
  timezone: 'UTC',
  hour: 'numeric',
  minute: 'numeric',
  second: 'numeric'
};


 form.inputbox.value=( date.toLocaleString("ru", options) ); 
                    }

</SCRIPT>
<p>
 <form name="firstTask">Текущая дата и время: <br>
                        <input size="40" name="inputbox">
                        <button type="button"  onClick="first(this.form)">Дата и время</button>
                        <button type="reset">Очистить</button>
                    </form>
                                 

 <script defer src="js/lr4.js"></script>
          
   

 <select id = "List">
        <option>Пункт 1</option>
        <option>Пункт 2</option>
        <option>Пункт 3</option>
        <option>Пункт 4</option>
        <option>Пункт 5</option>
        <option>Пункт 6</option>
        <option>Пункт 7</option>
    </select>
<SCRIPT>
var select = document.getElementById("List");
select.onchange = function js_event(){
console.log(this.options[this.selectedIndex].innerHTML);
};

</SCRIPT>

<input type="text" onchange="alert(this.value.replace(/\s+/g, ''))">
<p><a href="index.html">Ссылка</a></p>
 <p>
                    а) Полную информацию о текущей дате и времени. Например, "14 мая 2002 года, вторник, 2:53:44pm". <br>
б) Написать скрипт, определяющий, сколько недель осталось до 1 сентября текущего года.<br>
в) Комбинированный список.<br>
в) Комбинированный список.<br>
г) Смена элемента списка.<br>
д) Вывод в строке состояния значения текущего элемента списка.<br>
е) Содержимое поля ввода формы без пробелов.<br>
                    </p>
                </div>

                <?php include ("include/footer.php"); ?>

            </div>
        </div>
    </body>
</html>