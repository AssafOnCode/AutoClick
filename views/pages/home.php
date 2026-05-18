<?php
session_start();
$first_name = $_SESSION['first_name'] ?? '';
$last_name = $_SESSION['last_name'] ?? '';
$number = $_SESSION['number'] ?? '';
$email = $_SESSION['email'] ?? '';
$password = $_SESSION['password'] ?? '';
$type = $_SESSION['type'] ?? '';
$photo = $_SESSION['photo'] ?? '';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoClick — Achat & vente de véhicules</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body class="home-page">

<?php require __DIR__ . '/../includes/partials-navbar-home.php'; ?>

    <main>
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero__card">
                <div class="hero__bg-image" aria-hidden="true">
                    <img src="../../assets/firstautoclick.jpg" alt="" width="1600" height="900" loading="eager" decoding="async">
                </div>
                <div class="hero__overlay" aria-hidden="true"></div>
                <div class="hero__bg-pattern" aria-hidden="true"></div>
                <div class="hero__content">
                    <p class="hero__badge">Concession & particuliers</p>
                    <h1 id="hero-title">Trouvez la voiture qui vous correspond</h1>
                    <p class="hero__lead">Occasions certifiées, neufs, électriques et solutions de location — tout AutoClick pour acheter, vendre ou louer en toute confiance.</p>
                    <form class="hero-search" action="vehiculesoccasions.php" method="get" role="search" aria-label="Rechercher un véhicule">
                        <div class="hero-search__row">
                            <div class="hero-search__field hero-search__field--query">
                                <label class="sr-only" for="hero-search-q">Marque, modèle ou mots-clés</label>
                                <span class="hero-search__icon" aria-hidden="true">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.35-4.35"/></svg>
                                </span>
                                <input type="search" id="hero-search-q" name="q" placeholder="Marque, modèle, mots-clés…" autocomplete="off" enterkeyhint="search">
                            </div>
                            <div class="hero-search__field hero-search__field--select">
                                <label class="sr-only" for="hero-search-scope">Type d’offre</label>
                                <select id="hero-search-scope" name="scope">
                                    <option value="" selected>Toutes les offres</option>
                                    <option value="occasion">Véhicules d’occasion</option>
                                    <option value="neuf">Véhicules neufs</option>
                                    <option value="electrique">Électrique & hybride</option>
                                    <option value="location">Location</option>
                                </select>
                            </div>
                            <button type="submit" class="hero-search__submit">Rechercher</button>
                        </div>
                    </form>
                    <div class="hero__ctas">
                        <a class="btn btn--primary" href="vehiculesoccasions.php">Voir les annonces</a>
                        <a class="btn btn--ghost" href="vendre.php">Estimer mon véhicule</a>
                    </div>
                    <div class="hero__stats">
                        <div class="hero__stat">
                            <strong>2 500+</strong>
                            <span>véhicules disponibles</span>
                        </div>
                        <div class="hero__stat">
                            <strong>98 %</strong>
                            <span>clients satisfaits</span>
                        </div>
                        <div class="hero__stat">
                            <strong>48 h</strong>
                            <span>réponse moyenne</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services" aria-labelledby="services-title">
            <h2 id="services-title" class="services__title">Nos univers</h2>
            <p class="services__subtitle">Explorez nos offres : de l’occasion au 100 % électrique, en passant par la reprise et la location courte ou longue durée.</p>

            <div class="services__grid">
                <a class="service-card" id="occasion" href="vehiculesoccasions.php">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                    </div>
                    <h2>Véhicules d’occasion</h2>
                    <p>Berlines, SUV, citadines — stock contrôlé, historique transparent et garanties adaptées.</p>
                    <span class="service-card__link">Parcourir les occasions <span class="service-card__arrow" aria-hidden="true">→</span></span>
                </a>

                <a class="service-card service-card--new" id="neufs" href="vehiculesneufs.php">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><path d="m3.27 6.96 8.73 5.05 8.73-5.05"/><path d="M12 22.08V12"/></svg>
                    </div>
                    <h2>Véhicules neufs</h2>
                    <p>Configurations sur mesure, aides à la reprise et livraison dans notre réseau partenaire.</p>
                    <span class="service-card__link">Configurer un neuf <span class="service-card__arrow" aria-hidden="true">→</span></span>
                </a>

                <a class="service-card service-card--electric" id="electrique" href="electique.php">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    </div>
                    <h2>Passer à l’électrique</h2>
                    <p>Hybrides rechargeables, 100 % électriques : autonomie, bornes et aides à l’achat expliquées simplement.</p>
                    <span class="service-card__link">Découvrir l’électrique <span class="service-card__arrow" aria-hidden="true">→</span></span>
                </a>

                <a class="service-card service-card--sell" id="vendre" href="vendre.php">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.82 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><path d="M7 7h.01"/></svg>
                    </div>
                    <h2>Vendre mon véhicule</h2>
                    <p>Estimation en ligne, reprise express ou mise en vente sur la plateforme — vous choisissez.</p>
                    <span class="service-card__link">Lancer une estimation <span class="service-card__arrow" aria-hidden="true">→</span></span>
                </a>

                <a class="service-card service-card--rent" id="location" href="location.php">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="7.5" cy="15.5" r="3.5"/><path d="m21 2-9.6 9.6"/><path d="m15.5 7.5 3 3L22 7l-3-3"/></svg>
                    </div>
                    <h2>Location de véhicules</h2>
                    <p>LLD, LOA ou courte durée : solutions pros et particuliers avec kilométrage flexible.</p>
                    <span class="service-card__link">Voir les offres location <span class="service-card__arrow" aria-hidden="true">→</span></span>
                </a>

                <a class="service-card" id="favoris" href="favoris.php">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m19 21-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"/></svg>
                    </div>
                    <h2>Mes favoris</h2>
                    <p>Retrouvez les annonces sauvegardées et comparez vos coups de cœur en un clin d’œil.</p>
                    <span class="service-card__link">Ouvrir mes favoris <span class="service-card__arrow" aria-hidden="true">→</span></span>
                </a>
            </div>
        </section>
    </main>

<?php require __DIR__ . '/../includes/partials-footer-home.php'; ?>
</body>
</html>
