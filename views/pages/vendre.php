<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="auth-card">
            <h1>vendre</h1>
            <p class="auth-subtitle"></p>

            <form class="auth-form" action="../../controllers/vendre-controller.php" method="POST" enctype="multipart/form-data" autocomplete="on">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstname">titre</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Jean" required>
                    </div>
                <div class="form-group">
                    <label for="type">Type : </label>
                    <select id="type" name="type" required>
                        <option value="" disabled selected>Choisir…</option>
                        <option value="pro">Voiture</option>
                        <option value="particulier">Moto</option>
                        <option value="particulier">Utilitaire</option>
                    </select>
                   <label for="marque">Marque :</label>
                   <select id="marque" name="marque" required>
                    <option value="" disabled selected>Choisir une marque...</option>
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

                    <div class="form-group">
                        <label for="lastname">Model</label>
                        <input type="text" name="model" placeholder="model" required>
                    </div>

                    <div class="form-group">
                        <label for="lastname">Année</label>
                        <input type="text" name="annee" placeholder="Année" required>
                    </div>

                    <select id="type" name="type" required>
                        <option value="" disabled selected>Choisir…</option>
                        <option value="pro">Voiture</option>
                        <option value="particulier">Moto</option>
                        <option value="particulier">Utilitaire</option>
                    </select>

    

                 
                <div class="form-group">
                    <label for="image">Photo</label>
                    <input type="file" id="photo" name="photo" accept="image/*" required>
                </div>
                <input class="auth-submit" type="submit" value="S'inscrire">
            </form>
</body>
</html>



