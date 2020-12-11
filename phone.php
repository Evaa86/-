<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Обработка заявки</title>
</head>
<body>

<?php require "blocks/header.php" ?>
<div class="container mt-5">
    <div class="row">

        <div class="col">
            <h3>Назначение вида работ</h3>
            <form action="checkform/checkwork.php" method="post">

                <p>Вид работы:</p>
                <p><label>
                        <input type="text" name="work"/>
                    </label></p>
                <p>Стоимость:</p>
                <p><label>
                        <input type="text" name="cost"/>
                    </label></p>


                <button type="submit" name="send" class="btn btn-success">Отправить</button>

            </form>
        </div>
        <a href="/spinsters.php" class="btn btn-primary my-2">Список заявок</a>
    </div>
</div>

<?php require "blocks/footer.php" ?>

</body>
</html>
