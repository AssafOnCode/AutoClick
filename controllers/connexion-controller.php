<?php

$email = $_POST['email'];
$password = $_POST['password'];


$bdd = new PDO('mysql:host=localhost;dbname=php_autoclick', 'root', 'root');
$requete = $bdd->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
$requete->execute(['email' => $email ,'password' => $password]);
$user = $requete->fetch();

if(isset($user['email']) && isset($user['password']))
    {
        session_start();
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['number'] = $user['number'];
        $_SESSION['type'] = $user['type'];
        $_SESSION['id'] = $user['id_user'];
        $_SESSION['photo'] = $user['photo'];
        
       header('Location: ../views/pages/home.php');
       
    } else {
        echo "Email ou mot de passe incorrect";
    }

?>