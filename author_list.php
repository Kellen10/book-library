
<?php
    echo "Hello world";

    require "config.php";


    $stmt = $pdo->query("SELECT * FROM author");

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
?>