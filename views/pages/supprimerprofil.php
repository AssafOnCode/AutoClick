<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: connexion.php');
    exit;
}

$photo = $_SESSION['photo'] ?? '';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer mon compte — AutoClick</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/supprimerprofil.css">
</head>
<body class="home-page">

<?php require __DIR__ . '/../includes/partials-navbar-home.php'; ?>

    <main class="supprimer-main">
        <section class="supprimer-panel" aria-labelledby="supprimer-title">
            <div class="supprimer-panel__visual" aria-hidden="true">
                <span class="supprimer-panel__icon-ring">
                    <svg class="supprimer-panel__icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/><path d="M9 6V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"/></svg>
                </span>
            </div>

            <h1 id="supprimer-title" class="supprimer-panel__title">Supprimer mon compte ?</h1>
            <p class="supprimer-panel__lead">Cette action est définitive. Vos informations, favoris et annonces seront supprimés et ne pourront pas être récupérés.</p>

            <p class="supprimer-panel__warning" role="note">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                Action irréversible
            </p>

            <div class="supprimer-panel__actions">
                <form action="../../controllers/supprimerprofil-controller.php" method="post" class="supprimer-panel__form">
                    <button type="submit" class="supprimer-btn supprimer-btn--confirm">Oui, supprimer mon compte</button>
                </form>
                <a href="profil.php" class="supprimer-btn supprimer-btn--cancel">Annuler</a>
            </div>
        </section>
    </main>

<?php require __DIR__ . '/../includes/partials-footer-home.php'; ?>

</body>
</html>
