<div id="auth">
    <?php
    session_start();
    $connect = mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db('phpbase');

    if (isset($_POST["enter"])) {
        $e_login = $_POST['e_login'];
        $e_password = md5($_POST['e_password']);

        $query = mysql_query("SELECT * FROM users WHERE login='$e_login'");
        $user_data = mysql_fetch_array($query);

        if($user_data['password'] == $e_password) {
            // echo "Вы ввошли в систему";
            // session_start();
            $_SESSION["name"] = $e_login;
        }
        else {
            echo "Неверный логин или пароль ";
        }
    }

    if (isset($_POST["logout"])) {
        unset($_SESSION['name']); // разрегистрировали переменную
        session_destroy(); // разрушаем сессию
    }
    ?>

    <?php
    if (isset($_SESSION["name"])) {
        // echo "Вы ввошли как $e_login";
        echo 'Вы ввошли как '.$_SESSION["name"]."<br>";
        echo '<form method="post" action="">
        <input type="submit" name="logout" value="Выйти"></input>
        </form>';
        if ($_SESSION["name"]=='admin') 
            echo '<a href="admin/control_news.php">Панель администратора</a>';
        
    }
    else {
    echo '
    <form method="post" action="">
        <input type="text" name="e_login" placeholder="Login" required /><br>
        <input type="password" name="e_password" placeholder="Password" required/><br>
        <input type="submit" name="enter" value="Ввойти"/>
    </form>
    или <a href="register.php">Зарегистрироваться</a>';
}
?>

</div>

