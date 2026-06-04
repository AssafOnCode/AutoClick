<?php

$email = $_POST['email'];
$password = $_POST['password'];


$bdd = new PDO('mysql:host=localhost;dbname=php_autoclick', 'root', 'root');
$requete = $bdd->prepare('SELECT * FROM users WHERE email = :email');
$requete->execute(['email' => $email]);
$user = $requete->fetch();


if ($user && password_verify($password, $user['password'])) 
    {
        session_start();
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['number'] = $user['number'];
        $_SESSION['type'] = $user['type'];
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['photo'] = $user['photo'];
        
       header('Location: ../views/pages/home.php');
       
    } else {
        echo "Email ou mot de passe incorrect";
    }

?>