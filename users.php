<?php
$first_name=filter_var(trim($_POST['nume']),
FILTER_SANITIZE_STRING);
$last_name=filter_var(trim($_POST['pre']),
FILTER_SANITIZE_STRING);
$gmail=filter_var(trim($_POST['emailul']),
FILTER_SANITIZE_STRING);
$phone=filter_var(trim($_POST['telefon']),
FILTER_SANITIZE_STRING);
$login=filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$password=filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

$password=md5($password."gashdodhqi12923");

$mysql = new mysqli('localhost','root','','fruitbox');

$mysql->query("INSERT INTO  `users`(`first_name`,`last_name`,`login`,`password`,`gmail`,`phone`)
            VALUES('$first_name','$last_name','$login','$password','$gmail','$phone')");
$mysql->close();

header('Location:http://localhost/Logan%20and%20register1/formular.html');

?>