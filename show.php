<?php
// show.php

require_once 'src/database.php';
require_once 'src/functions.php';

// Fetch registered users from the database
$users = getRegisteredUsers();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Inscrits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<?php include 'src/templates/header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Liste des Utilisateurs Inscrits</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Âge</th>
                <th>Adresse</th>
                <th>Connaissance Crypto</th>
                <th>Portefeuille Électronique</th>
                <th>Business en Ligne</th>
                <th>Portefeuille Décentralisé</th>
                <th>Gagner</th>
                <th>Intérêt</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['nom']); ?></td>
                    <td><?php echo htmlspecialchars($user['prenom']); ?></td>
                    <td><?php echo htmlspecialchars($user['age']); ?></td>
                    <td><?php echo htmlspecialchars($user['adresse']); ?></td>
                    <td><?php echo htmlspecialchars($user['crypto_know']); ?></td>
                    <td><?php echo htmlspecialchars($user['wallet_know']); ?></td>
                    <td><?php echo htmlspecialchars($user['online_business']); ?></td>
                    <td><?php echo htmlspecialchars($user['decentralized_wallet']); ?></td>
                    <td><?php echo htmlspecialchars($user['want_to_earn']); ?></td>
                    <td><?php echo htmlspecialchars($user['interest']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center">
        <a class="btn btn-primary" href="export/export.php">Exporter vers Excel</a>
    </div>
</div>

<?php include 'src/templates/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>