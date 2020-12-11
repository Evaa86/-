<?php require "blocks/header.php" ?>

<?php
$id_request = filter_var(trim($_POST['id_request']), FILTER_SANITIZE_STRING);
$cost = filter_var(trim($_POST['cost']), FILTER_SANITIZE_STRING);



$conn = new mysqli('localhost', 'root', 'root', 'request-db');

$result = $conn->query("SELECT * FROM request WHERE id = '$id_request'");
?>
<table>
<?php
while ($row = $result->fetch_assoc()) {
    ?>

    <tr>
        <td class="col">
            <?php
            echo $row["id"]
            ?>
        </td>
        <td class="col">
            <?php
            echo $row["name"]
            ?>
        </td>
        <td class="col">
            <?php
            echo $row["phone"]
            ?>
        </td>
        <td class="col">
            <?php
            echo $row["email"]
            ?>
        </td>
        <td class="col">
            <?php
            echo $row["year"]
            ?>
        </td>
        <td class="col">
            <?php
            echo $row["country"]
            ?>
        </td>
        <td class="col">
            <?php
            echo $row["mark"]
            ?>
        </td>
        <td class="col">
            <?php
            echo $cost
            ?>
        </td>
    </tr>

    <?php
}
?>
</table>

<?php

$sql = "INSERT INTO `formrequest` (`cost`, `id_request`)
VALUES ('$cost', '$id_request')";

$conn->close();
?>
<a href="/" class="btn btn-primary my-2">Вернуться на главную</a>


