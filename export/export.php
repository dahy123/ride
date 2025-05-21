<?php
// export.php

require_once '../src/database.php';
require_once '../src/functions.php';

// Fetch registered users from the database
$users = getRegisteredUsers();

// Set headers for the CSV file
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="registered_users.csv"');

// Open output stream
$output = fopen('php://output', 'w');

// Write the header row
fputcsv($output, ['Nom', 'Prénom', 'Âge', 'Adresse', 'Connaissance Crypto', 'Portefeuille Électronique', 'Business en Ligne', 'Portefeuille Décentralisé', 'Gagner', 'Intérêt']);

// Write user data
foreach ($users as $user) {
    fputcsv($output, [
        $user['nom'],
        $user['prenom'],
        $user['age'],
        $user['adresse'],
        $user['crypto_know'],
        $user['wallet_know'],
        $user['online_business'],
        $user['decentralized_wallet'],
        $user['want_to_earn'],
        $user['interest']
    ]);
}

// Close output stream
fclose($output);
exit;