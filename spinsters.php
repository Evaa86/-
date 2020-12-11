<?php require "blocks/header.php" ?>

<?php
$mysql = new mysqli('localhost', 'root', 'root', 'request-db');

$result = $mysql->query("SELECT * FROM request");
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
    </tr>

    <?php
}
?>
</table>
<?php require "blocks/footer.php" ?>


