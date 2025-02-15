<?php 
$host='127.0.0.1';
$db='test1';
$user='root';
$password='';

$conn=new mysqli($host,$user,$password,$db);
if ($conn-> connect_error)
{die("Не удалось соединиться" . $conn->connect_error);} 
?>