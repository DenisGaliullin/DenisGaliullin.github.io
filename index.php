<?php

session_start();
include_once("db_key.php");
?>



<html lang="ru">

<head>
    <meta charset="windows1251"/>
    <title>�����������</title>
</head>

<body>
<form action="test.php" method="post">
    ����� <input type="text" name="name"/> </br></br>
    ������ <input type="password" name="pass"/>
    <input type="submit"/>
    </form>
<a href="Login.php">�����������</a>
</body>

</html>
<?php
if (isset($_SESSION['flash'])) {
		echo $_SESSION['flash'];
		unset($_SESSION['flash']);
	}
?>