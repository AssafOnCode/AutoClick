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
        $_SESSION['email'] = $res['email'];
        $_SESSION['password'] = $res['password'];
        $_SESSION['first_name'] = $res['first_name'];
        $_SESSION['last_name'] = $res['last_name'];
        $_SESSION['number'] = $res['number'];
        $_SESSION['type'] = $res['type'];
        $_SESSION['id'] = $res['id'];

       header('Location: ../views/pages/home.php');
       
    } else {
        echo "Email ou mot de passe incorrect";
    }

?>