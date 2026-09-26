<?php
    require('./config/config.php');

    $name = $_GET['name'];

    echo $name;
    $stmt = $pdo->query("INSERT INTO author (name, accolades, country) VALUES ('$name', '".$_GET['accolades']."', '".$_GET['country']."');");
    header("Location: ./author_create_done.php"); 
?>