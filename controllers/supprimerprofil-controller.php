<?php

session_start();

$id_user = $_SESSION['id_user'];

$bdd = new PDO('mysql:host=localhost;dbname=php_autoclick', 'root', 'root');

$requete = $bdd->prepare('DELETE FROM users WHERE id_user = :id_user');
$requete->execute(['id_user' => $id_user]);

session_destroy();

header('Location: ../views/pages/inscription.php?succes=1');
exit;

?>
