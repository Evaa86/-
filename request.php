<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Формирование заявки</title>
</head>
<body>
<?php require "blocks/header.php" ?>

<div class="container mt-5">
    <h3>Заявка</h3>
    <form action="requestform.php" method="post">

        <p>id заявки:</p>
        <p><label>
                <input type="text" name="id_request" />
            </label></p>
        <p>Стоимость:</p>
        <p><label>
                <input type="text" name="cost" />
            </label></p>


        <button type="submit" name="send" class="btn btn-success">Сформировать отчет</button>

    </form>
</div>

<?php require "blocks/footer.php" ?>
</body>
</html>
