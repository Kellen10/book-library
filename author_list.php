
<?php
    require "./config/config.php";


    $stmt = $pdo->query("SELECT * FROM author");

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>author list</title>
    </head>
    <body>
        <?php require_once('./inc/nav.php'); ?>
        This is the author list<br />
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
                </tr>
            <?php } ?>
        </table>
    </body>
</html>