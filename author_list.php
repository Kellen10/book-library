<?php
    require "./config/config.php";


    $stmt = $pdo->query("SELECT * FROM author WHERE ts_deleted IS null");

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(isset($_GET['action'])) $action = $_GET['action'];
    if(isset($_GET['status'])) $status = $_GET['status'];
    if(isset($_GET['msg'])) $msg = $_GET['msg'];

?><!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
        <title>author list</title>
    </head>
    <body>
        <?php require_once('./inc/header.php'); ?>
        <?php require_once('./inc/nav.php'); ?>
        <h1>This is the author list</h1>

        <?php if(isset($_GET['action'])) { ?>
            <div class="<?= $status?>">
                <?= $msg ?>

                <?php if($action == 'delete') {?>
                    <p>Undo?<p/>
                    <a href="./author_delete_do.php?pk_author=<?= $_GET['pk_author'] ?>">Yes</a>
                    <a href="./author_list.php">No</a>
                <?php } ?>
            </div>        
        <?php } ?>
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
                    <td><a href="./author_delete_do.php?pk_author=<?= $row['pk_author'] ?>">Delete</a> </td>
                </tr>
            <?php } ?>
        </table>
        <?php require './inc/footer.php'; ?>
    </body>
</html>
