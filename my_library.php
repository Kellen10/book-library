<?php
    require "./config/config.php";


    $stmt = $pdo->query("SELECT * FROM author");

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?><!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
        <title>author list</title>
    </head>
    <body>
        <?php require_once('./inc/header.php'); ?>
        <?php require_once('./inc/nav.php'); ?>
        This is the author list<br />
        <a href="./author_create.php">Add</a>
        <table border=1>
            <tr>
                <td>pk</td>
                <td>name</td>
                <td>accolades</td>
                <td>country</td>
            </tr>
            <?php foreach ($rows as $row) { ?>
                <tr>
                    <td><?= $row['pk_author'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['accolades'] ?></td>
                    <td><?= $row['country'] ?></td>
                    <td>detail</td>
                    <td>edit</td>
                    <td>delete</td>
                </tr>
            <?php } ?>
        </table>
        <?php require './inc/footer.php'; ?>
    </body>
</html>
