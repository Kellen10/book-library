<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
        <title>Add Author</title>
    </head>
        <body>
            <?php require_once './inc/header.php'; ?>
            <?php require_once('./inc/nav.php'); ?>
            <form action="./author_create_do.php" method="get">
                <label>Name:</label>
                <input type="text" name="name" required>

                <label>Accolades:</label>
                <input name="accolades">

                <label>Country:</label>
                <input type="text" name="country" required>

                <button type="submit">Add Author</button>
            </form>
            <?php require_once './inc/footer.php'; ?>
        </body>
</html>
