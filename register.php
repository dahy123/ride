<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Formulaire d'inscription</h1>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="surname">Prénom:</label>
                <input type="text" class="form-control" id="surname" name="surname" required>
            </div>

            <div class="form-group">
                <label for="age">Âge:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>

            <div class="form-group">
                <label for="address">Adresse:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <h2>Informations sur la crypto-monnaie</h2>
            <div class="form-group">
                <label>Connaissez-vous la crypto-monnaie?</label><br>
                <input type="checkbox" name="crypto_knowledge" value="yes"> Oui
                <input type="checkbox" name="crypto_knowledge" value="no"> Non
            </div>

            <div class="form-group">
                <label>Connaissez-vous un portefeuille électronique?</label><br>
                <input type="checkbox" name="wallet_knowledge" value="yes"> Oui
                <input type="checkbox" name="wallet_knowledge" value="no"> Non
            </div>

            <div class="form-group">
                <label>Connaissez-vous le business en ligne?</label><br>
                <input type="checkbox" name="online_business_knowledge" value="yes"> Oui
                <input type="checkbox" name="online_business_knowledge" value="no"> Non
            </div>

            <div class="form-group">
                <label>Connaissez-vous un portefeuille décentralisé?</label><br>
                <input type="checkbox" name="decentralized_wallet_knowledge" value="yes"> Oui
                <input type="checkbox" name="decentralized_wallet_knowledge" value="no"> Non
            </div>

            <div class="form-group">
                <label>Voulez-vous gagner de l'argent?</label><br>
                <input type="radio" name="earn_interest" value="earn"> Gagner
                <input type="radio" name="earn_interest" value="interest"> Avoir des intérêts
            </div>

            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>

    <?php include 'src/templates/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>