<?php

session_start();
session_destroy();

header('Location: ../views/pages/connexion.php?deconnexion=1');
exit;
?>
