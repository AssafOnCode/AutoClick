<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];
$type = $_POST['type'];

$photo = "";

// Vérifie si image envoyée
if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0)
{
    // Nom temporaire
    $tmpName = $_FILES['photo']['tmp_name'];

    // Nouveau nom unique
    $photo = time() . "_" . $_FILES['photo']['name'];

    // Destination
    $destination = "../uploads/" . $photo;

    // Déplace l'image
    move_uploaded_file($tmpName, $destination);
}


$bdd = new PDO('mysql:host=localhost;dbname=php_autoclick', 'root', 'root');
$requete = $bdd->prepare('SELECT * FROM users WHERE email = :email');
$requete->execute(['email' => $email]);
$user = $requete->fetch();

if (!isset($user['email']))
    {
        $requete1 = $bdd->prepare('INSERT INTO users (first_name, last_name, number, email, password, type, photo) VALUES (:first_name, :last_name, :number, :email, :password, :type, :photo)');
        $requete1->execute
        ([
            'first_name' => $firstname,
            'last_name' => $lastname,
            'number' => $number,
            'email' => $email,
            'password' => $password,
            'type' => $type,
            'photo' => $photo
        ]);
    } else {
        echo "Cet email est déjà utilisé";
    }

    header('Location: ../views/pages/connexion.php?inscription=1');
    
?>