<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];
$type = $_POST['type'];

$bdd = new PDO('mysql:host=localhost;dbname=php_autoclick', 'root', 'root');
$requete = $bdd->prepare('SELECT * FROM users WHERE email = :email');
$requete->execute(['email' => $email]);
$user = $requete->fetch();

if (!isset($user['email']))
    {
        $requete1 = $bdd->prepare('INSERT INTO users (first_name, last_name, number, email, password, type) VALUES (:first_name, :last_name, :number, :email, :password, :type)');
        $requete1->execute
        ([
            'first_name' => $firstname,
            'last_name' => $lastname,
            'number' => $number,
            'email' => $email,
            'password' => $password,
            'type' => $type
        ]);
    } else {
        echo "Cet email est déjà utilisé";
    }

    header('Location: ../views/pages/connexion.php?inscription=1');
    
?>