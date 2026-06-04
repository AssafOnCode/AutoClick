<?php
session_start();

if (isset($_GET['modifprofil']))
{
    echo "Modification réussie !";
}


if (!isset($_SESSION['id_user']))
{
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
    <title>Profil — AutoClick</title>

    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/profil.css">
</head>

<body class="home-page">

<?php require __DIR__ . '/../includes/partials-navbar-home.php'; ?>

<main class="profil-hub-main">

    <section class="profil-hub" aria-labelledby="profil-hub-title">

        <h1 id="profil-hub-title" class="profil-hub__title">
            Actions du compte
        </h1>

        <p class="profil-hub__lead">
            Modifiez vos informations, supprimez votre compte ou fermez votre session.
        </p>



        <div class="profil-photo">

            <?php

      

            if (!empty($photo))
            {
                ?>

                <img
                    src="../../uploads/<?php echo $photo; ?>"
                    alt="Photo de profil"
                    width="150"
                >

                <?php
            }
            else
            {
                ?>

                <img
                    src="../../assets/default.png"
                    alt="Photo par défaut"
                    width="150"
                >

                <?php
            }

            ?>

        </div>



        <ul class="profil-hub__list">

            <li>
                <a
                    href="modifierprofil.php"
                    class="profil-btn profil-btn--danger"
                >
                    Modifier mon profil
                </a>
            </li>

            <li>
                <a
                    href="supprimerprofil.php"
                    class="profil-btn profil-btn--primary"
                >
                    Supprimer mon compte
                </a>
            </li>

            <li>
                <a
                    href="deconnexion.php"
                    class="profil-btn profil-btn--ghost"
                >
                    Se déconnecter
                </a>
            </li>

        </ul>

    </section>

</main>

<?php require __DIR__ . '/../includes/partials-footer-home.php'; ?>

</body>
</html>