<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoClick — Achat & vente de véhicules</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body class="home-page">

    <header class="site-header">
        <div class="site-header__inner">
            <a class="site-logo" href="home.php" aria-label="AutoClick — accueil">
                <img src="../../assets/autoclicklogophp.png" alt="">
                <span class="site-logo__name">Auto<span>Click</span></span>
            </a>

            <button type="button" class="nav-toggle" id="navToggle" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="mainNav">
                <span></span><span></span><span></span>
            </button>

            <nav class="main-nav" id="mainNav" aria-label="Navigation principale">
                <ul class="main-nav__list">
                    <li>
                        <a href="vehiculesoccasions.php">
                            <svg class="main-nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 17h2l1-4h8l1 4h2M8 17v2a1 1 0 001 1h6a1 1 0 001-1v-2M4 11l2-5h12l2 5"/><circle cx="7" cy="17" r="1.5"/><circle cx="17" cy="17" r="1.5"/></svg>
                            Occasions
                        </a>
                    </li>
                    <li>
                        <a href="vehiculesneufs.php">
                            <svg class="main-nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                            Véhicules neufs
                        </a>
                    </li>
                    <li>
                        <a href="electique.php">
                            <svg class="main-nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                            Passer à l’électrique
                        </a>
                    </li>
                    <li>
                        <a href="vendre.php">
                            <svg class="main-nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 1v3M6.34 4.93l2.12 2.12M4 12H1M6.34 19.07l2.12-2.12M12 20v3M17.66 19.07l-2.12-2.12M23 12h-3M17.66 4.93l-2.12 2.12"/><circle cx="12" cy="12" r="4"/></svg>
                            Vendre un véhicule
                        </a>
                    </li>
                    <li>
                        <a href="location.php">
                            <svg class="main-nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M7 8h10M7 12h6"/></svg>
                            Location
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="header-actions">
                <a class="btn-favorites" href="favoris.php" title="Mes favoris" aria-label="Mes favoris">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
                </a>
                <a class="profile-block" href="profil.php" aria-label="Mon profil">
                    <span class="profile-block__avatar" aria-hidden="true">AC</span>
                    <span class="profile-block__text">
                        <span class="profile-block__label">Profil</span>
                        <span class="profile-block__name">Mon compte</span>
                    </span>
                </a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero__card">
                <div class="hero__bg-pattern" aria-hidden="true"></div>
                <div class="hero__content">
                    <p class="hero__badge">Concession & particuliers</p>
                    <h1 id="hero-title">Trouvez la voiture qui vous correspond</h1>
                    <p class="hero__lead">Occasions certifiées, neufs, électriques et solutions de location — tout AutoClick pour acheter, vendre ou louer en toute confiance.</p>
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
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17h2l1-4h8l1 4h2M8 17v2a1 1 0 001 1h6a1 1 0 001-1v-2M4 11l2-5h12l2 5"/><circle cx="7" cy="17" r="1.5"/><circle cx="17" cy="17" r="1.5"/></svg>
                    </div>
                    <h2>Véhicules d’occasion</h2>
                    <p>Berlines, SUV, citadines — stock contrôlé, historique transparent et garanties adaptées.</p>
                    <span class="service-card__link">Parcourir les occasions <span class="service-card__arrow" aria-hidden="true">→</span></span>
                </a>

                <a class="service-card service-card--new" id="neufs" href="vehiculesneufs.php">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
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
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v3M6.34 4.93l2.12 2.12M4 12H1M6.34 19.07l2.12-2.12M12 20v3M17.66 19.07l-2.12-2.12M23 12h-3M17.66 4.93l-2.12 2.12"/><circle cx="12" cy="12" r="4"/></svg>
                    </div>
                    <h2>Vendre mon véhicule</h2>
                    <p>Estimation en ligne, reprise express ou mise en vente sur la plateforme — vous choisissez.</p>
                    <span class="service-card__link">Lancer une estimation <span class="service-card__arrow" aria-hidden="true">→</span></span>
                </a>

                <a class="service-card service-card--rent" id="location" href="location.php">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M7 8h10M7 12h6"/></svg>
                    </div>
                    <h2>Location de véhicules</h2>
                    <p>LLD, LOA ou courte durée : solutions pros et particuliers avec kilométrage flexible.</p>
                    <span class="service-card__link">Voir les offres location <span class="service-card__arrow" aria-hidden="true">→</span></span>
                </a>

                <a class="service-card" id="favoris" href="favoris.php">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
                    </div>
                    <h2>Mes favoris</h2>
                    <p>Retrouvez les annonces sauvegardées et comparez vos coups de cœur en un clin d’œil.</p>
                    <span class="service-card__link">Ouvrir mes favoris <span class="service-card__arrow" aria-hidden="true">→</span></span>
                </a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <p>© <?php echo date('Y'); ?> AutoClick — <a href="connexion.php">Espace client</a> · <a href="inscription.php">Créer un compte</a></p>
    </footer>

    <script>
    (function () {
        var toggle = document.getElementById('navToggle');
        var nav = document.getElementById('mainNav');
        if (!toggle || !nav) return;
        toggle.addEventListener('click', function () {
            var open = nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            toggle.setAttribute('aria-label', open ? 'Fermer le menu' : 'Ouvrir le menu');
        });
        nav.querySelectorAll('a').forEach(function (a) {
            a.addEventListener('click', function () {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.setAttribute('aria-label', 'Ouvrir le menu');
            });
        });
    })();
    </script>
</body>
</html>
