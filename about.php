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

    <title>Заявка</title>
</head>
<body>

<?php require "blocks/header.php" ?>
<div class="container mt-5">
    <h3>Заявка</h3>
    <form action="checkform/check.php" method="post">

        <p>Ваше название:</p>
            <p><label>
                    <input type="text" name="name" />
                </label></p>
        <p>Ваш email:</p>
            <p><label>
                    <input type="email" name="email">
                </label></p>
        <p>Введите Ваш номер телефона в формате +7(123)4567890:</p>
        <p><label>
                <input name="tel" type="tel" pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" value="+7">
            </label></p>
        <p>Страна производителя:</p>
        <p><label>
                <input type="text" name="country"/>
            </label></p>
        <p>Марка рабочего станка:</p>
        <p><label>
                <input type="text" name="mark"/>
            </label></p>
        <p>Год выпуска:</p>
        <p><label>
                <input type="text" name="year"/>
            </label></p>

        <button type="submit" name="send" class="btn btn-success">Отправить</button>

    </form>
</div>


<?php require "blocks/footer.php" ?>

</body>
</html>
