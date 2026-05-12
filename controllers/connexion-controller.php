<?php

$email = $_POST['email'];
$password = $_POST['password'];


$bdd = new PDO('mysql:host=localhost;dbname=php_autoclick', 'root', 'root');
$requete = $bdd->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
$requete->execute(['email' => $email ,'password' => $password]);
$user = $requete->fetch();

if(isset($user['email']) && isset($user['password']))
    {
       header('Location: ../views/pages/home.php');
    } else {
        echo "Email ou mot de passe incorrect";
    }

?>