<?php
// src/database.php

$host = '127.0.0.1'; // Database host
$dbname = 'ride'; // Database name
$username = 'root'; // Database username
$password = '1234'; // Database password

function connectDatabase() {
    global $host, $dbname, $username, $password;
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}

function createUsersTable() {
    $pdo = connectDatabase();
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(100) NOT NULL,
        prenom VARCHAR(100) NOT NULL,
        age INT NOT NULL,
        adresse VARCHAR(255) NOT NULL,
        crypto_know ENUM('yes', 'no') NOT NULL,
        wallet_know ENUM('yes', 'no') NOT NULL,
        online_business ENUM('yes', 'no') NOT NULL,
        decentralized_wallet ENUM('yes', 'no') NOT NULL,
        want_to_earn ENUM('yes', 'no') NOT NULL,
        interest TEXT
    )";
    $pdo->exec($sql);
}

// Call the function to create the table if it doesn't exist
createUsersTable();
?>