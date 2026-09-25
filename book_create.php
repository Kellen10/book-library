<?php
    require "./config/config.php";
    // this code will be for if im entering book
    // $stmt = $pdo->query("SELECT * FROM author");
    // $authors = $stmt-> fetchAll(PDO::FETCH_ASSOC)
?>
        <?php require_once('./inc/nav.php'); ?>

<form action="./book_create_do.php" method="post">

    <label>Author name:</label>

    <input type="text" name="name">

    <button type="submit">Submit</button>

</form>