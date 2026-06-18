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
                            <svg class="main-nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                            Occasions
                        </a>
                    </li>
                    <li>
                        <a href="vehiculesneufs.php">
                            <svg class="main-nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><path d="m3.27 6.96 8.73 5.05 8.73-5.05"/><path d="M12 22.08V12"/></svg>
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
                            <svg class="main-nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.82 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><path d="M7 7h.01"/></svg>
                            Vendre un véhicule
                        </a>
                    </li>
                    <li>
                        <a href="location.php">
                            <svg class="main-nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="7.5" cy="15.5" r="3.5"/><path d="m21 2-9.6 9.6"/><path d="m15.5 7.5 3 3L22 7l-3-3"/></svg>
                            Location
                        </a>
                    </li>
                    <li>
                        <a href="pro.php">
                            <svg class="main-nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                            Pro
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="header-actions">
                <a class="btn-favorites" href="favoris.php" title="Mes favoris" aria-label="Mes favoris">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
                </a>
                <a class="profile-block" href="profil.php" aria-label="Mon profil">
                    <img class="profile-block__avatar" src="../../uploads/<?php echo htmlspecialchars((string) $photo, ENT_QUOTES, 'UTF-8'); ?>" alt="Photo de profil" width="38" height="38" loading="lazy" decoding="async">
                    <span class="profile-block__text">
                        <span class="profile-block__label">Profil</span>
                        <span class="profile-block__name">Mon compte</span>
                    </span>
                </a>
            </div>
        </div>
    </header>
