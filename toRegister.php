<?php
require_once 'src/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['name'];
    $prenom = $_POST['surname'];
    $age = $_POST['age'];
    $adresse = $_POST['address'];
    $crypto_know = $_POST['crypto_knowledge'];
    $wallet_know = $_POST['wallet_knowledge'];
    $online_business = isset($_POST['online_business_knowledge']) ? 'yes' : 'no';
    $decentralized_wallet = isset($_POST['decentralized_wallet']) ? 'yes' : 'no';
    $want_to_earn = isset($_POST['want_to_earn']) ? 'yes' : 'no';
    $interest = isset($_POST['interest']) ? $_POST['interest'] : '';

    $pdo = connectDatabase();
    $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, age, adresse, crypto_know, wallet_know, online_business, decentralized_wallet, want_to_earn, interest) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nom, $prenom, $age, $adresse, $crypto_know, $wallet_know, $online_business, $decentralized_wallet, $want_to_earn, $interest]);

    header('Location: notify.php');
    exit();
}
?>