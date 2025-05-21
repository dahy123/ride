<?php
// src/functions.php

require_once 'database.php';

// Function to fetch registered users from the database
function getRegisteredUsers() {
    $pdo = connectDatabase(); // Utilise connectDatabase() et non dbConnect()
    $stmt = $pdo->query("SELECT * FROM users");
    return $stmt->fetchAll();
}

// Function to register a new user
function registerUser($name, $surname, $age, $address, $crypto_know, $wallet_know, $online_business) {
    $db = dbConnect();
    $query = "INSERT INTO users (nom, prenom, age, adresse, crypto_know, wallet_know, online_business) VALUES (:name, :surname, :age, :address, :crypto_know, :wallet_know, :online_business)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':crypto_know', $crypto_know);
    $stmt->bindParam(':wallet_know', $wallet_know);
    $stmt->bindParam(':online_business', $online_business);
    return $stmt->execute();
}
?>