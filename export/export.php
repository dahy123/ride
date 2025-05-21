<?php
require_once '../src/database.php';
require_once '../src/functions.php';
require '../vendor/autoload.php'; // Charge PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Récupère les utilisateurs
$users = getRegisteredUsers();

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// En-têtes
$headers = ['Nom', 'Prénom', 'Âge', 'Adresse', 'Connaissance Crypto', 'Portefeuille Électronique', 'Business en Ligne', 'Portefeuille Décentralisé', 'Gagner', 'Intérêt'];
$sheet->fromArray($headers, NULL, 'A1');

// Données
$row = 2;
foreach ($users as $user) {
    $sheet->fromArray([
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
    ], NULL, 'A' . $row);
    $row++;
}

// Téléchargement du fichier XLSX
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="registered_users.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
?>