<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendre un véhicule — AutoClick</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/profil.css">
    <link rel="stylesheet" href="../css/vendre.css">
</head>
<body class="home-page">

<?php require __DIR__ . '/../includes/partials-navbar-home.php'; ?>

    <main class="vendre-main">
        <section class="profil-panel vendre-panel" aria-labelledby="vendre-title">
            <header class="profil-panel__intro">
                <p class="vendre-badge">Mise en vente</p>
                <h1 id="vendre-title" class="profil-panel__title">Vendre mon véhicule</h1>
                <p class="profil-panel__lead">Décrivez votre véhicule en détail pour publier une annonce claire et attractive.</p>
            </header>

            <form class="profil-form vendre-form" action="../../controllers/vendre-controller.php" method="POST" enctype="multipart/form-data" autocomplete="on">

                <h2 class="vendre-section">Informations principales</h2>
                <div class="form-row">
                    <div class="form-group">
                        <label for="titre">Titre de l’annonce</label>
                        <input type="text" id="titre" name="titre" placeholder="BMW M3 Competition" required>
                    </div>
                    <div class="form-group">
                        <label for="plaque">Plaque d’immatriculation</label>
                        <input type="text" id="plaque" name="plaque" placeholder="EV-752-DT" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="type">Type de véhicule</label>
                        <select id="type" name="type" required>
                            <option value="" disabled selected>Choisir…</option>
                            <option value="voiture">Voiture</option>
                            <option value="moto">Moto</option>
                            <option value="utilitaire">Utilitaire</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="marque">Marque</label>
                        <select id="marque" name="marque" required>
                            <option value="" disabled selected>Choisir une marque…</option>
                            <option value="aprilia">Aprilia</option>
                            <option value="audi">Audi</option>
                            <option value="benelli">Benelli</option>
                            <option value="bmw">BMW</option>
                            <option value="byd">BYD</option>
                            <option value="cfmoto">CFMOTO</option>
                            <option value="citroen">Citroën</option>
                            <option value="cupra">Cupra</option>
                            <option value="dacia">Dacia</option>
                            <option value="ducati">Ducati</option>
                            <option value="ds">DS</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="harley-davidson">Harley-Davidson</option>
                            <option value="honda">Honda</option>
                            <option value="husqvarna">Husqvarna</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="indian">Indian Motorcycle</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="jeep">Jeep</option>
                            <option value="kawasaki">Kawasaki</option>
                            <option value="kia">Kia</option>
                            <option value="ktm">KTM</option>
                            <option value="land-rover">Land Rover</option>
                            <option value="lexus">Lexus</option>
                            <option value="mazda">Mazda</option>
                            <option value="mercedes">Mercedes-Benz</option>
                            <option value="mini">MINI</option>
                            <option value="mitsubishi">Mitsubishi</option>
                            <option value="moto-guzzi">Moto Guzzi</option>
                            <option value="mv-agusta">MV Agusta</option>
                            <option value="nissan">Nissan</option>
                            <option value="opel">Opel</option>
                            <option value="peugeot">Peugeot</option>
                            <option value="porsche">Porsche</option>
                            <option value="renault">Renault</option>
                            <option value="seat">SEAT</option>
                            <option value="skoda">Škoda</option>
                            <option value="smart">Smart</option>
                            <option value="suzuki">Suzuki</option>
                            <option value="tesla">Tesla</option>
                            <option value="toyota">Toyota</option>
                            <option value="triumph">Triumph</option>
                            <option value="volkswagen">Volkswagen</option>
                            <option value="volvo">Volvo</option>
                            <option value="yamaha">Yamaha</option>
                            <option value="zero">Zero Motorcycles</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="model">Modèle</label>
                        <input type="text" id="model" name="model" placeholder="M3 Competition" required>
                    </div>
                    <div class="form-group">
                        <label for="annee">Année</label>
                        <input type="text" id="annee" name="annee" placeholder="2022" required>
                    </div>
                </div>

                <h2 class="vendre-section">Caractéristiques techniques</h2>
                <div class="form-row">
                    <div class="form-group">
                        <label for="energy">Énergie</label>
                        <select id="energy" name="energy" required>
                            <option value="" disabled selected>Choisir…</option>
                            <option value="essence">Essence</option>
                            <option value="diesel">Diesel</option>
                            <option value="electrique">Électrique</option>
                            <option value="hybride">Hybride</option>
                            <option value="hybride rechargeable">Hybride rechargeable</option>
                            <option value="hydrogène">Hydrogène</option>
                            <option value="gpl">GPL</option>
                            <option value="gaz naturel">Gaz naturel</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="boite_de_vitesse">Boîte de vitesse</label>
                        <select id="boite_de_vitesse" name="boite_de_vitesse" required>
                            <option value="" disabled selected>Choisir…</option>
                            <option value="manuelle">Manuelle</option>
                            <option value="automatique">Automatique</option>
                            <option value="semi-automatique">Semi-automatique</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="kilometrage">Kilométrage</label>
                        <input type="text" id="kilometrage" name="kilometrage" placeholder="45 000 km" required>
                    </div>
                    <div class="form-group">
                        <label for="puissance_din">Puissance DIN</label>
                        <input type="text" id="puissance_din" name="puissance_din" placeholder="500 ch" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="sieges">Sièges</label>
                        <input type="text" id="sieges" name="sieges" placeholder="5 places" required>
                    </div>
                    <div class="form-group">
                        <label for="portes">Portes</label>
                        <input type="text" id="portes" name="portes" placeholder="5 portes" required>
                    </div>
                </div>

                <h2 class="vendre-section">Annonce & prix</h2>
                <div class="form-row">
                    <div class="form-group">
                        <label for="location">Localisation</label>
                        <input type="text" id="location" name="location" placeholder="Paris" required>
                    </div>
                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input type="text" id="prix" name="prix" placeholder="10 000 €" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="5" placeholder="Une voiture de sport BMW, moteur V8 4.0 litres, 500 chevaux, design élégant…" required></textarea>
                </div>

                <div class="form-group">
                    <label for="photos">Photos</label>
                    <input type="file" id="photos" name="photos" accept="image/*" required>
                    <p class="form-hint">Ajoutez une photo nette de votre véhicule pour attirer plus d’acheteurs.</p>
                </div>

                <div class="profil-actions">
                    <button type="submit" class="profil-submit">Publier l’annonce</button>
                    <a class="profil-link-home" href="home.php">← Retour à l’accueil</a>
                </div>
            </form>
        </section>
    </main>

<?php require __DIR__ . '/../includes/partials-footer-home.php'; ?>

</body>
</html>
