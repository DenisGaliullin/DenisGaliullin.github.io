<?php

session_start();
            
include_once("db_key.php");
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="Windows-1251"/>
    <title>�����������</title>
</head>

<body>
<form action="#" method="post">
    ����� <input type="text" name="name"/></br></br>
    ������ <input type="password" name="pass"/>
    <input type="submit"/>  
    </form>
<a href="index.php">�����������</a>
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
            echo "<H1>����� ����������!</H1>";
            
            die();
        } 
        else {
			echo "<H3>�������� ����� ��� ������</H1>";
		}
	}
?>