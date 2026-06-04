<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    header('Location: connexion.php');
    exit;
}

$firstname = $_SESSION['first_name'] ?? '';
$lastname  = $_SESSION['last_name'] ?? '';
$number    = $_SESSION['number'] ?? '';
$email     = $_SESSION['email'] ?? '';
$photo     = $_SESSION['photo'] ?? '';

$h = static function ($s) {
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
};
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier mon profil — AutoClick</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/profil.css">
</head>
<body class="home-page">

<?php require __DIR__ . '/../includes/partials-navbar-home.php'; ?>

    <main class="profil-main">
        <section class="profil-panel" aria-labelledby="modifier-title">
            <header class="profil-panel__intro">
                <h1 id="modifier-title" class="profil-panel__title">Modifier mon profil</h1>
                <p class="profil-panel__lead">Mettez à jour vos informations personnelles puis enregistrez.</p>
            </header>

            <form class="profil-form" action="../../controllers/modifierprofil-controller.php" method="POST" autocomplete="on">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstname">Prénom</label>
                        <input type="text" id="firstname" name="firstname" value="<?php echo $h($firstname); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Nom</label>
                        <input type="text" id="lastname" name="lastname" value="<?php echo $h($lastname); ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="number">Téléphone</label>
                    <input type="tel" id="number" name="number" value="<?php echo $h($number); ?>" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" value="<?php echo $h($email); ?>" required autocomplete="email">
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" value="" placeholder="Nouveau mot de passe" required autocomplete="new-password">
                    <p class="form-hint">Saisissez votre mot de passe pour confirmer l’enregistrement.</p>
                </div>

                <div class="profil-actions">
                    <button type="submit" class="profil-submit">Enregistrer les modifications</button>
                    <a class="profil-link-home" href="profil.php">← Retour au profil</a>
                </div>
            </form>
        </section>
    </main>

<?php require __DIR__ . '/../includes/partials-footer-home.php'; ?>

</body>
</html>
