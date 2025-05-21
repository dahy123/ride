<!DOCTYPE html>
<html lang="fr" data-mci-setup="true">
<div id="in-page-channel-node-id" data-channel-name="in_page_channel_ZJrBvZ"></div>
<script src="chrome-extension://lgmpcpglpngdoalbgeoldeajfclnhafa/inpage.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Crypto</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #6c5ce7;
            --secondary-color: #a29bfe;
            --accent-color: #fd79a8;
            --light-bg: #f8f9fa;
            --dark-text: #2d3436;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: var(--dark-text);
            min-height: 100vh;
            padding-bottom: 3rem;
        }

        .form-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .form-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            text-align: center;
        }

        .form-header h1 {
            margin: 0;
            font-weight: 700;
            font-size: 2rem;
        }

        .form-header p {
            margin-top: 0.5rem;
            opacity: 0.9;
        }

        .section-title {
            color: var(--primary-color);
            border-left: 5px solid var(--accent-color);
            padding-left: 1rem;
            margin: 2rem 0 1.5rem;
        }

        .form-label {
            font-weight: 600;
            color: var(--dark-text);
        }

        .form-control:focus,
        .form-check-input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(108, 92, 231, 0.25);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(108, 92, 231, 0.4);
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .crypto-icon {
            color: var(--primary-color);
            margin-right: 0.5rem;
        }

        .form-floating>.form-control {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .progress-container {
            margin: 2rem 0;
        }

        .progress {
            height: 0.5rem;
            background-color: #e9ecef;
        }

        .progress-bar {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        }

        /* Animation pour les transitions */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Styles pour les options radio et checkbox personnalisées */
        .custom-option {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .custom-option label {
            margin-left: 0.5rem;
            margin-bottom: 0;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-container {
                padding: 1.5rem;
            }

            .form-header {
                padding: 1rem;
            }

            .form-header h1 {
                font-size: 1.5rem;
            }
        }
    </style>
    <style>
        .ms-editor-squiggler {
            display: none !important;
            visibility: hidden !important
        }

        #editor-critique-card-id {
            display: none !important;
            opacity: 0 !important;
            pointer-events: none;
            visibility: hidden !important
        }

        .AsanaMain .TaskRow-taskName,
        .AsanaMain .TaskName-input {
            min-height: 21px !important
        }

        .SpellingErrorV2 {
            background-image: none !important;
            border-bottom: none !important;
            pointer-events: none !important
        }

        .sketchy-text-spelling-error-underline-overlay {
            display: none
        }

        .reposition__StyledWrapperDiv-sc-mjfw5a-0 {
            z-index: 9999999
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 400;
            src: local("Inter-Regular"), url(https://assets.merci-app.com/fonts/Inter-Regular.woff2) format("woff2"), url(https://assets.merci-app.com/fonts/Inter-Regular.woff2) format("woff")
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            src: local("Inter-Medium"), url(https://assets.merci-app.com/fonts/Inter-Medium.woff2) format("woff2"), url(https://assets.merci-app.com/fonts/Inter-Medium.woff) format("woff")
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 600;
            src: local("Inter-SemiBold"), url(https://assets.merci-app.com/fonts/Inter-SemiBold.woff2) format("woff2"), url(https://assets.merci-app.com/fonts/Inter-SemiBold.woff) format("woff")
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 700;
            src: local("Inter-Bold"), url(https://assets.merci-app.com/fonts/Inter-Bold.woff2) format("woff2"), url(https://assets.merci-app.com/fonts/Inter-Bold.woff) format("woff")
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 800;
            src: local("Inter-ExtraBold"), url(https://assets.merci-app.com/fonts/Inter-ExtraBold.woff2) format("woff2"), url(https://assets.merci-app.com/fonts/Inter-ExtraBold.woff) format("woff")
        }

        @font-face {
            font-family: Tropiline;
            font-style: normal;
            font-weight: 700;
            src: local("Tropiline-Bold"), url(https://assets.merci-app.com/fonts/Tropiline-Bold.woff2) format("woff2"), url(https://assets.merci-app.com/fonts/Tropiline-Bold.woff) format("woff")
        }

        .kix-spellcheck-with-explanation-bubble,
        .kix-spell-bubble {
            display: none !important
        }
    </style>
</head>

<body class="mci-c4f7c3b940b2fda375c61f1064b5e7f6" spellcheck="false">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="form-container fade-in">
                    <div class="form-header">
                        <h1><i class="fas fa-coins me-2"></i> Formulaire d'inscription</h1>
                        <p>Rejoignez notre communauté crypto et découvrez de nouvelles opportunités</p>
                    </div>

                    <div class="progress-container">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Progression</span>
                            <span id="progress-text">0%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%" id="progress-bar"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <form action="toRegister.php" method="POST" id="registration-form">
                        <h3 class="section-title">Informations personnelles</h3>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Votre nom" required="" spellcheck="false">
                                    <label for="name"><i class="fas fa-user crypto-icon"></i> Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="surname" name="surname"
                                        placeholder="Votre prénom" required="" spellcheck="false">
                                    <label for="surname"><i class="fas fa-user crypto-icon"></i> Prénom</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="age" name="age"
                                        placeholder="Votre âge" required="" min="18" max="120" spellcheck="false">
                                    <label for="age"><i class="fas fa-birthday-cake crypto-icon"></i> Âge</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Votre adresse" required="" spellcheck="false">
                                    <label for="address"><i class="fas fa-home crypto-icon"></i> Adresse</label>
                                </div>
                            </div>
                        </div>

                        <h3 class="section-title">Connaissances en crypto-monnaie</h3>

                        <div class="mb-4">
                            <label class="form-label d-block"><i class="fab fa-bitcoin crypto-icon"></i> Connaissez-vous
                                la crypto-monnaie?</label>
                            <div class="custom-option">
                                <input class="form-check-input" type="radio" name="crypto_knowledge" id="crypto_yes"
                                    value="yes" required="" spellcheck="false">
                                <label class="form-check-label" for="crypto_yes">Oui</label>
                            </div>
                            <div class="custom-option">
                                <input class="form-check-input" type="radio" name="crypto_knowledge" id="crypto_no"
                                    value="no">
                                <label class="form-check-label" for="crypto_no">Non</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label d-block"><i class="fas fa-wallet crypto-icon"></i> Connaissez-vous
                                un portefeuille électronique?</label>
                            <div class="custom-option">
                                <input class="form-check-input" type="radio" name="wallet_knowledge" id="wallet_yes"
                                    value="yes" required="">
                                <label class="form-check-label" for="wallet_yes">Oui</label>
                            </div>
                            <div class="custom-option">
                                <input class="form-check-input" type="radio" name="wallet_knowledge" id="wallet_no"
                                    value="no" spellcheck="false">
                                <label class="form-check-label" for="wallet_no">Non</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label d-block"><i class="fas fa-laptop crypto-icon"></i> Connaissez-vous
                                le business en ligne?</label>
                            <div class="custom-option">
                                <input class="form-check-input" type="checkbox" name="online_business_knowledge"
                                    id="online_business" value="yes">
                                <label class="form-check-label" for="online_business">Oui</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label d-block"><i class="fas fa-lock crypto-icon"></i> Utilisez-vous un
                                portefeuille décentralisé?</label>
                            <div class="custom-option">
                                <input class="form-check-input" type="radio" name="decentralized_wallet"
                                    id="decentralized_yes" value="yes" required="">
                                <label class="form-check-label" for="decentralized_yes">Oui</label>
                            </div>
                            <div class="custom-option">
                                <input class="form-check-input" type="radio" name="decentralized_wallet"
                                    id="decentralized_no" value="no">
                                <label class="form-check-label" for="decentralized_no">Non</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label d-block"><i class="fas fa-money-bill-wave crypto-icon"></i>
                                Voulez-vous gagner de l'argent avec la crypto?</label>
                            <div class="custom-option">
                                <input class="form-check-input" type="radio" name="want_to_earn" id="earn_yes"
                                    value="yes" required="">
                                <label class="form-check-label" for="earn_yes">Oui</label>
                            </div>
                            <div class="custom-option">
                                <input class="form-check-input" type="radio" name="want_to_earn" id="earn_no" value="no"
                                    spellcheck="false">
                                <label class="form-check-label" for="earn_no">Non</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="interest" class="form-label"><i class="fas fa-star crypto-icon"></i> Quel est
                                votre intérêt pour la crypto?</label>
                            <textarea class="form-control" id="interest" name="interest" rows="4"
                                placeholder="Partagez vos motivations et objectifs concernant les crypto-monnaies..."
                                spellcheck="false" data-mci-spellchecked="true"
                                style="line-height: 24px; word-break: break-word; position: relative; z-index: 0;"></textarea>
                        </div>

                        <div class="d-grid gap-2 col-md-6 mx-auto mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i> S'inscrire
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Script pour mettre à jour la barre de progression
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('registration-form');
            const progressBar = document.getElementById('progress-bar');
            const progressText = document.getElementById('progress-text');
            const requiredInputs = form.querySelectorAll('input[required], textarea[required]');
            const totalRequired = requiredInputs.length;

            function updateProgress() {
                let completed = 0;
                requiredInputs.forEach(input => {
                    if (input.type === 'radio') {
                        // Pour les boutons radio, vérifier si l'un des boutons du même nom est coché
                        const name = input.name;
                        if (document.querySelector(`input[name="${name}"]:checked`)) {
                            completed++;
                        }
                    } else if (input.value.trim() !== '') {
                        completed++;
                    }
                });

                // Éviter de compter deux fois les groupes radio
                const radioGroups = new Set();
                requiredInputs.forEach(input => {
                    if (input.type === 'radio') {
                        radioGroups.add(input.name);
                    }
                });

                const uniqueRequired = totalRequired - requiredInputs.filter(input => input.type === 'radio').length + radioGroups.size;
                const percentage = Math.round((completed / uniqueRequired) * 100);

                progressBar.style.width = percentage + '%';
                progressBar.setAttribute('aria-valuenow', percentage);
                progressText.textContent = percentage + '%';
            }

            // Mettre à jour la progression lors de la saisie
            form.addEventListener('input', updateProgress);

            // Initialiser la progression
            updateProgress();
        });
    </script>
    <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'9433f021b06c3517',t:'MTc0NzgyOTA4NC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
    <iframe height="1" width="1"
        style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>
    <mci-div id="mci-mirror"
        style="white-space: pre-wrap; overflow-wrap: break-word; position: absolute; visibility: hidden; left: 218.5px; top: 1174.17px; direction: ltr; box-sizing: border-box; width: 512px; height: 110px; overflow: hidden; border-width: 1px; border-style: solid; padding: 6px 12px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: 100%; font-size: 16px; font-size-adjust: none; line-height: 24px; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: start; text-transform: none; text-indent: 0px; text-decoration: none solid rgb(33, 37, 41); transform: none; letter-spacing: normal; word-spacing: 0px; tab-size: 8;"></mci-div>
    <div id="mciapp-exclusion-container"></div>
</body>
<div id="tooltip-autocorrection-suggestion"></div><mci-extension data-role="overlay" id="overlay-root"></mci-extension>

</html>