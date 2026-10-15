<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
        <title>Successful</title>
    </head>
    <body>
        <?php require_once('./inc/header.php'); ?>
        <?php require_once('./inc/nav.php'); ?>
        <p>Author removed successfully <p/>
        <p>Undo? <p/>
        <a href="./author_delete_do.php?pk_author=<?= $_GET['pk_author'] ?>">Yes</a>
        <a href="./author_list.php">No</a>
        <?php require './inc/footer.php'; ?>
    </body>
</html>