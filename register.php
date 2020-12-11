<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Регистрация</title>

</head>
<body>
<?php require "blocks/header.php" ?>

<div class="container mt-4">
    <?php
    if($_COOKIE['user'] == ''):
    ?>

    <div class="row">
        <div class="col">
            <h1>Форма регистрации</h1>
            <form action="checkform/check2.php" method="post">

                <label for="login"></label><input type="text" class="form-control" name="login" id="login"
                                                  placeholder="Введите логин"><br>
                <label for="name"></label><input type="text" class="form-control" name="name" id="name"
                                                 placeholder="Введите имя"><br>
                <label for="pass"></label><input type="password" class="form-control" name="pass" id="pass"
                                                 placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Зарегистрировать</button>
            </form>
        </div>

        <?php else: ?>
        <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите здесь <a href="/exit.php">здесь</a>.</p>

        <?php endif; ?>

    </div>
</div>
<?php require "blocks/footer.php" ?>

</body>
</html>