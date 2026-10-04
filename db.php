<?php
    $dsn = 'mysql:host=localhost;dbname=itsuki;charset=utf8mb4';
    try {
        $db = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
        error_log($e->getMessage()); 
        http_response_code(500);
        exit('Something went wrong.');
    };
?>