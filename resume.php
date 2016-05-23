<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Обо мне</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link media="screen" rel="stylesheet" href="styles/main.css">
        <link media="print" rel="stylesheet" href="styles/print.css">
        <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
    </head>
    <body>

        <div id="content">
            
            <?php include ("include/leftcont.php"); ?>

            <div id="mainpart">
                <div id="headimages">
                  
                <div id="mainannotation">
                    <p>Творчество — начало, даюшее человеку бессмертие</p>
                </div>
                <div id="maincontent">
                    <h2>Резюме</h2>
                    <p> <img class="me" src="img/me1.jpg" alt="Моя фотография"></p>
        <ol class="about">
            <li>ФИО - Вьюненко Виктория Юрьевна</li>
            <li>Возраст - 19</li>
            <li>Пол - женский</li>
            <li>Телефон - 0994770181, почта - vikav02@mail.ru</li>
            <li>Образование:
                <ul>
                    <li>2002 - 2013 - Белокуракинская СОШ №1</li>
                    <li>с 2013 - ХНЭУ им. Семёна Кузнеца</li>
                </ul>
            </li>
            <li>Знание языков:
                <table>
                    <tr>
                        <th>Язык</th> 
                        <th>Навыки чтения</th> 
                        <th>Навыки письма</th>
                        <th>Навыки разговора</th> 
                    </tr>
                    <tr>
                        <td>Украинский</td>
                        <td>Advanced</td>
                        <td>Advanced</td>
                        <td>Advanced</td>
                    </tr>
                    <tr>
                        <td>Русский</td>
                        <td>Advanced</td>
                        <td>Advanced</td>
                        <td>Advanced</td>
                    </tr>
                    <tr>
                        <td>Английский</td>
                        <td>Intermediate</td>
                        <td>Pre-Intermediate</td>
                        <td>Pre-Intermediate</td>
                    </tr>
                </table>
            </li>
            <li>Профессиональные навыки: операционные системы Windows, Linux; языки программирования C++, C#, Java, R, работа с Mathlab, Photoshop, Компас</li>
            <li>Хобби - рисование</li>
            <li>Семейное положение - не замужем, детей нет</li>
           </ol>
                </div>

                <?php include ("include/footer.php"); ?>

            </div>
        </div>
    </body>
</html>
