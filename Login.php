<?php

session_start();
            
include_once("db_key.php");
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="Windows-1251"/>
    <title>Авторизация</title>
</head>

<body>
<form action="#" method="post">
    Логин <input type="text" name="name"/></br></br>
    Пароль <input type="password" name="pass"/>
    <input type="submit"/>  
    </form>
<a href="index.php">Регистрация</a>
</body>
</html>

<?php
if (!empty($_POST['pass']) and !empty($_POST['name'])) {
    
		$login = $_POST['name'];
		$password = $_POST['pass'];
		
		$query = "SELECT * FROM user WHERE Login='$login' AND Password='$password'";
		$res = mysqli_query($conn, $query);
		$user = mysqli_fetch_assoc($res);
		
		if (!empty($user)) {
            echo "<H1>Добро пожаловать!</H1>";
            
            die();
        } 
        else {
			echo "<H3>Неверный логин или пароль</H1>";
		}
	}
?>