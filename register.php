<html>
  <head>
    <title>Регистрация</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link media="screen" rel="stylesheet" href="styles/main.css">
        <link media="print" rel="stylesheet" href="styles/print.css">
        <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
  </head>
  <body>
  
<?php
    $connect = mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db('phpbase');

    if (isset($_POST["submit"])) {
        $username = $_POST['username'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $r_password = $_POST['r_password'];
        if ($password==$r_password) {
            echo "Учетная запись создана";
            $password = md5($password);
            $query = mysql_query("INSERT INTO users VALUES ('','$username','$login','$password')") or die (mysql_error());
        }
        else {
            echo "Пароли должны совпадать";
        }
    }
?>

<div id="register">
<form method="post" action="register.php">
    <input type="text" name="username" placeholder="Username" required /><br>
    <input type="text" name="login" placeholder="Login" required/><br>
    <input type="password" name="password" placeholder="Password" required/><br>
    <input type="password" name="r_password" placeholder="Repeat password" required/><br>
    <input type="submit" name="submit" value="Зарегистрироваться"/><br>
</form>
<form action="index.php" method="get">
        <input type="submit" name="Home" value="Главная страница"><br></p>
    </form>
</div>

</body>
</html>

