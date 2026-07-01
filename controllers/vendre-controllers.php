<?php
session_start();

$id_user= $_SESSION['id_user'];

$title = $_POST['title'];
$type = $_POST['type'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$years = $_POST['years'];
$fuel = $_POST['fuel'];
$gearbox = $_POST['gearbox'];
$mileage = $_POST['mileage'];
$seats = $_POST['seats'];
$doors = $_POST['doors'];
$location = $_POST['location'];
$price = $_POST['price'];
$description = $_POST['description'];
$horsepower = $_POST['horsepower'];
$plaque = $_POST['plaque'];

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
$requete = $bdd->prepare('INSERT INTO offers (type_vehicle, title, brand, model, year, fuel, gearbox, mileage, location, photo, seats, doors, price, horsepower, plaque, descriptions, id_user) VALUES (:type_vehicle, :title, :brand, :model, :years, :fuel, :gearbox, :mileage, :location, :photo, :seats, :doors, :price, :horsepower, :plaque, :description, :id_user)');
        $requete->execute
        ([
            'type_vehicle' => $type,
            'title' => $title,
            'brand' => $brand,
            'model' => $model,
            'years' => $years,
            'fuel' => $fuel,
            'gearbox' => $gearbox,
            'mileage' => $mileage,
            'location' => $location,
            'photo' => $photo,
            'seats' => $seats,
            'doors' => $doors,
            'price' => $price,
            'horsepower' => $horsepower,
            'plaque' => $plaque,
            'description' => $description,
            'id_user' => $id_user
        ]);
?>