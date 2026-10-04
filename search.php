<?php
    session_start();
    require "db.php";
    $stmt = $db->prepare('SELECT id, name FROM news WHERE name LIKE :q');
    $stmt->execute(['q' => '%' . ($_GET['new'] ?? '') . '%']);
    header('Content-Type: application/json');
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>