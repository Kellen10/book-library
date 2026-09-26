<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
        <body>
    <?php require_once './inc/header.php'; ?>
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