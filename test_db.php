<?php
require_once 'includes/db_connect.php';
try {
    $pdo = new PDO("mysql:host=localhost;dbname=skillswap", "root", "sandip@123");
    $stmt = $pdo->query("SHOW TABLES LIKE 'users'");
    if ($stmt->fetch()) {
        echo "Users table exists!";
    } else {
        echo "Users table does not exist!";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}