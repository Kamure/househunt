<?php
require_once 'config.php';

try {
    $dsn = "mysql:host={$conf['db_host']};dbname={$conf['db_name']};charset=utf8";
    $pdo = new PDO($dsn, $conf['db_user'], $conf['db_pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>