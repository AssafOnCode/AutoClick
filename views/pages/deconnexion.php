<?php
session_start();

$photo = $_SESSION['photo'] ?? '';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion — AutoClick</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/deconnexion.css">
</head>
<body class="home-page">

<?php require __DIR__ . '/../includes/partials-navbar-home.php'; ?>

    <main class="deconnexion-main">
        <section class="deconnexion-panel" aria-labelledby="deconnexion-title">
            <div class="deconnexion-panel__visual" aria-hidden="true">
                <span class="deconnexion-panel__icon-ring">
                    <svg class="deconnexion-panel__icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                </span>
            </div>
            <h1 id="deconnexion-title" class="deconnexion-panel__title">Se déconnecter ?</h1>
            <p class="deconnexion-panel__lead">Vous quitterez votre session AutoClick. Pour retrouver vos favoris et votre profil, il faudra vous reconnecter.</p>

            <div class="deconnexion-panel__actions">
                <form action="../../controllers/deconnexion-controller.php" method="post" class="deconnexion-panel__form">
                    <button type="submit" class="deconnexion-btn deconnexion-btn--confirm">Oui, me déconnecter</button>
                </form>
                <a href="profil.php" class="deconnexion-btn deconnexion-btn--cancel">Non, rester connecté</a>
            </div>
        </section>
    </main>

<?php require __DIR__ . '/../includes/partials-footer-home.php'; ?>

</body>
</html>
