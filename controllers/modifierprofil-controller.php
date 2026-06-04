<?php

session_start();
$id_user = $_SESSION['id_user'];

//formulaire modifier profil
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];



$bdd = new PDO('mysql:host=localhost;dbname=php_autoclick', 'root', 'root');
$requete = $bdd->prepare("SELECT * FROM users WHERE email = :email AND id_user != :id_user");
$requete->execute(['email' => $email,'id_user' => $id_user]);
$res = $requete->fetch();

if (! isset($res['email'])) {
    $requeteupdate = $bdd->prepare("UPDATE users 
    SET first_name = :first_name,
        last_name = :last_name,
        number = :number,
        email = :email,
        password = :password
    WHERE id_user = :id_user ");

$requeteupdate->execute(['first_name' => $firstname,'last_name' => $lastname,'number' => $number,'email' => $email,'password' => $password,'id_user' => $id_user]);
$_SESSION['first_name'] = $firstname;
$_SESSION['last_name'] = $lastname;
$_SESSION['number'] = $number;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
header('Location: ../views/pages/profil.php?modifprofil=1');
} else {
    echo "Cet email est déjà utilisé.";
}

?>