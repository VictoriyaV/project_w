<div id="leftcontainer">
                <div id="headlogo">
                    <img id="logo" src="img/logo.png" alt="Логотип">
                </div>

                <div id="leftmenu">
                    <ul>
                        <?php
                            $menu = array('index'=>'Главная страница','paint'=>'Техники рисования','useful_links'=>'Полезные ссылки','my_works'=>'Мои работы','resume'=>'Об авторе','javascript'=>'JavaScript',);
                            foreach ($menu as $key => $value) {
                                echo "<li><a href='$key.php'>$value</a></li>";
                            }
                        ?>
                    </ul>
                </div>

                <div id="auth">
                    <?php include 'auth.php'; ?>
                </div>

                <div id="leftdoing">
                    <div id="doingsName" onClick="toggle('blockHide');"><h2>События</h2></div>
                    <div id="blockHide">
                        <?php include 'include/doings_block.php'; ?>
                    </div>
                </div>

            </div>