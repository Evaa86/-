<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Главная страница</title>
</head>
<body>
<?php require "blocks/header.php" ?>

<div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Описание</h1>
        <p class="lead text-muted">Техническое обслуживание станков
            Описание предметной области
            Ваше предприятие занимается ремонтом станков и другого промышленного оборудования. Вашей задачей является отслеживание финансовой стороны деятельности предприятия.
            Клиентами Вашей компании являются промышленные предприятия, оснащенные различным сложным оборудованием. В случае поломок оборудования они обращаются к Вам.
            Ремонтные работы в Вашей компании организованы следующим образом: все станки проклассифицированы по странам-производителям, годам выпуска и маркам. Все виды ремонта отличаются названием, продолжительностью в днях, стоимостью. Исходя из этих данных, по каждому факту ремонта Вы фиксируете вид станка и дату начала ремонта.</p>

    </div>
</div>
<div class="container mt-5">
    <div class="d-flex flex-wrap">
        <?php
        for ($i = 0; $i < 3; $i++):

            ?>
            <div class="card mb-4 shadow-sm">
                <img src="img/<?php echo($i + 12) ?>.jpg" class="img-thumbnail">

                <div class="card-body">
                    <p class="card-text">Service</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        </div>
                    </div>
                </div>
            </div>

        <?php endfor; ?>
    </div>
</div>
</div>
<?php require "blocks/footer.php" ?>
</body>
</html>
