<?php
// CHATGPT
// Ce fichier est utilisé pour établir une connexion à la base de données MySQL



$host = 'localhost';         // ou l'adresse IP du serveur
$dbname = 'php_autoclick';  // remplace par le nom de ta base de données
$user = 'root';            // ton nom d'utilisateur MySQL
$pasword = 'root';        // ton mot de passe MySQL

try {
    // Création de la connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);

    // Configuration des erreurs PDO pour qu'elles lèvent des exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    // En cas d’erreur, affichage du message
    echo "Erreur de connexion : " . $e->getMessage();
}

?>
