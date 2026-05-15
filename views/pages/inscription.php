<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/inscription.css">
</head>
<body class="auth-page auth-page--register">

    <div class="auth-layout">
        <header class="auth-brand">
            <a class="auth-brand-link" href="connexion.php" aria-label="Retour à la connexion">
                <img class="auth-logo-img" src="../../assets/autoclicklogophp.png" alt="AutoClick">
            </a>
            <p class="auth-brand-tagline">Vente de véhicules — créez votre compte</p>
        </header>

        <main class="auth-card">
            <h1>Inscription</h1>
            <p class="auth-subtitle">Remplissez le formulaire pour créer votre compte.</p>

            <form class="auth-form" action="../../controllers/inscription-controller.php" method="POST" enctype="multipart/form-data" autocomplete="on">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstname">Prénom</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Jean" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Nom</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Dupont" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="number">Téléphone</label>
                    <input type="tel" id="number" name="number" placeholder="+33 6 12 34 56 78" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="vous@exemple.com" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="8 caractères minimum" required minlength="8">
                </div>
                <div class="form-group">
                    <label for="type">Type de compte</label>
                    <select id="type" name="type" required>
                        <option value="" disabled selected>Choisir…</option>
                        <option value="pro">Professionnel</option>
                        <option value="particulier">Particulier</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Photo</label>
                    <input type="file" id="photo" name="photo" accept="image/*" required>
                </div>
                <input class="auth-submit" type="submit" value="S'inscrire">
            </form>
            
            <p class="auth-footer">Déjà inscrit ? <a href="connexion.php">Se connecter</a></p>
        </main>
    </div>

</body>
</html>
