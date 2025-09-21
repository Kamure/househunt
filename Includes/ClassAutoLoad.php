<?php
require_once 'config.php'; // Load configuration first

// Register the autoloader for Includes/ only
spl_autoload_register(function ($className) {
    $filePath = __DIR__ . '/' . $className . '.php';
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});
?>