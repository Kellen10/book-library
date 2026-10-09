<?php
    require('./config/config.php');

    $pk_author = $_GET['pk_author'];

    $stmt = $pdo->query("DELETE FROM author where pk_author = $pk_author");
    header("Location: ./author_list.php"); 
?>