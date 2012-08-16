<?php
    $dsn = 'mysql:host=localhost;dbname=cdrackexampledb';
    $username = 'root';  //generic login for new db
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>