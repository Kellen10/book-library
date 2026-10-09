<?php
    require "./config/config.php";
    // this code will be for if im entering book
    // $stmt = $pdo->query("SELECT * FROM author");
    // $authors = $stmt-> fetchAll(PDO::FETCH_ASSOC)
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
        <title>Book Create</title>
    </head>
    <body>
        <?php require_once('./inc/header.php'); ?>
        <?php require_once('./inc/nav.php'); ?>
        <form action="./book_create_do.php" method="post">
            <label>Author name:</label>
            <input type="text" name="name">
            <button type="submit">Submit</button>
        </form>

        <?php require './inc/footer.php'; ?>
    </body>
</html>
