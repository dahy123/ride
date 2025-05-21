<?php
// src/functions.php

function getRegisteredUsers() {
    // Assuming a database connection is established in database.php
    global $db;

    $query = "SELECT * FROM users"; // Adjust the query based on your database structure
    $result = $db->query($query);

    if ($result) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

// Add more utility functions as needed
?>