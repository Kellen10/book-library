
<?php
    echo "Hello world";

    $pdo = new PDO(
        "mysql:host=localhost;dbname=library;charset=utf8mb4",
        "library_admin",
        "admin1"
    );

    $stmt = $pdo->query("SELECT * FROM author");

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
?>