<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/connexion.css">
</head>

<body class="auth-page">

<?php
if (isset($_GET['inscription'])) {
    echo 'vous etes inscrit';
}
?>

    <div class="auth-layout">
        <header class="auth-brand">
            <img class="auth-logo-img" src="../../assets/autoclicklogophp.png" alt="AutoClick">
            <p class="auth-brand-tagline">Vente de véhicules — accédez à votre espace</p>
        </header>

        <main class="auth-card">
            <h1>Connexion</h1>
            <p class="auth-subtitle">Entrez vos identifiants pour continuer.</p>

            <form class="auth-form" action="../../controllers/connexion-controller.php" method="POST" autocomplete="on">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="vous@exemple.com" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>
                <input class="auth-submit" type="submit" value="Se connecter">
            </form>

            <p class="auth-footer">Pas encore de compte ? <a href="inscription.php">Créer un compte</a></p>
        </main>
    </div>

</body>
</html>
