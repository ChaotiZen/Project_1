<?php
/**
 * File name: database.php
 * Project : project_start
 * User: ChaotiZen | Trendon Ellis
 * Date: 6/8/2017
 * Using PhpStorm.
 * Notes:
 */

    $dsn = 'mysql:host=localhost;dbname=tech_support';
    $username = 'ts_user';
    $password = 'pa55word';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>