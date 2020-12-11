<?php
$users = '';
setcookie('user', $users['name'], time() - 3600, "/");
header('location: /');
