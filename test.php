<?php
session_start();
if (!empty($_POST)) {
	include_once("db_key.php");
$name=$_POST['name'];
$pass=$_POST['pass'];
$query = "INSERT INTO users (Login,Password,Rights) VALUES ('$name','$pass',1)";
$conn->query ($query);	
    
		$_SESSION['flash'] = '<H3>Регистрация успешна</H3>';
		header('Location: index.php');
		die();
	}


?>