<?php

session_start();

$id = $_SESSION['id'];

$bdd = new PDO('mysql:host=localhost;dbname=php_autoclick', 'root', 'root');

$requete = "DELETE FROM users WHERE id_user = $id;";
$bdd->query($requete);

session_destroy();

header('Location: ../views/pages/inscription.php?succes=1');
exit;

?>
