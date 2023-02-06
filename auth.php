<?php
$login=filter_var(trim($_POST['username']),
FILTER_SANITIZE_STRING);
$password=filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

$password=md5($password."gashdodhqi12923");

$mysql = new mysqli('localhost','root','','fruitbox');

$result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login'AND `password`='$password'");

$user=$result->fetch_assoc();
if(count($user)==0){
    echo"Asa utilizator nu este gasit";
    exit();
}
setcookie('user',$user['username'],time()+3600,"/");

$mysql->close();

header('Location:http://localhost/web/home.php');
?>