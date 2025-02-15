<?php

session_start();
include_once("db_key.php");
?>



<html lang="ru">

<head>
    <meta charset="windows1251"/>
    <title>Регистрация</title>
</head>

<body>
<form action="test.php" method="post">
    Логин <input type="text" name="name"/> </br></br>
    Пароль <input type="password" name="pass"/>
    <input type="submit"/>
    </form>
<a href="Login.php">Авторизация</a>
</body>

</html>
<?php
if (isset($_SESSION['flash'])) {
		echo $_SESSION['flash'];
		unset($_SESSION['flash']);
	}
?>