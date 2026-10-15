<?php
    require('./config/config.php');

    $pk_author = $_GET['pk_author'];
    $stmt = $pdo->query("SELECT ts_deleted FROM author WHERE pk_author = $pk_author");
    $ts_deleted = $stmt->fetchColumn();

    if ($ts_deleted == null):
        $stmt = $pdo->query("UPDATE author SET ts_deleted=current_timestamp() WHERE pk_author = $pk_author");
        header("Location: ./author_delete_done.php?pk_author=$pk_author"); 
    else:
        $stmt = $pdo->query("UPDATE author SET ts_deleted=null WHERE pk_author = $pk_author");
        header("Location: ./author_list.php");
    endif;
?>