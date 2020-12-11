<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


$pass = md5($pass."sklkds123");
$mysql = new mysqli('localhost', 'root', 'root', 'request-db');

$result = $mysql->query("SELECT * FROM users WHERE login = '$login' AND pass = '$pass'");

    $users = $result->fetch_assoc();

if(count($users) == 0){
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $users['name'], time() + 3600, "/");
setcookie('role', $users['role'], time() + 3600, "/");

$mysql->close();

header('location: /');


