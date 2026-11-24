<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association Humanitaire "LE PETIT NICOLAS" - Cameroun</title>
    <meta name="description" content="Association Humanitaire &quot;LE PETIT NICOLAS&quot; au Cameroun. Éducation, la petite enfance, les personnes vulnérables. L'énergie qui fait bouger les lignes.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS unique consolidé -->
    <link rel="stylesheet" href="/assets/css/style.css?v=4.2">
    <?php if (isset($_GET['capture'])): ?>
    <style>
        .site-preloader, #site-preloader { display: none !important; }
        .page-transition, #page-transition { display: none !important; }
        .nav-progress-bar, #nav-progress-bar { display: none !important; }
        [data-reveal] { opacity: 1 !important; transform: none !important; visibility: visible !important; }
        .hero-content .hero-title,
        .hero-content .hero-pillars,
        .hero-content .hero-slogan,
        .hero-content .hero-actions,
        .hero-scroll-indicator { opacity: 1 !important; transform: none !important; filter: none !important; }
    </style>
    <?php endif; ?>
</head>
<body>

    <!-- BARRE DE PROGRESSION DE NAVIGATION -->
    <div id="nav-progress-bar" class="nav-progress-bar"></div>

    <!-- PRELOADER INTRO DU SITE (ANIMATION DU LOGO AU DEMARRAGE) -->
    <div id="site-preloader" class="site-preloader" aria-hidden="true">
        <div class="preloader-inner">
            <div class="preloader-logo-box">
                <img src="/assets/images/logo/logo-pn.jpg" alt="Logo Association Le Petit Nicolas" class="preloader-logo-img">
                <div class="energy-glow-ring"></div>
            </div>
            <div class="preloader-text-box">
                <span class="preloader-sub">Association Humanitaire</span>
                <h2 class="preloader-title">"LE PETIT NICOLAS"</h2>
                <div class="preloader-energy-line">
                    <div class="energy-pulse"></div>
                </div>
                <p class="preloader-slogan">"L'énergie qui fait bouger les lignes"</p>
            </div>
        </div>
    </div>

    <!-- TRANSITION DE PAGE SWUP (ANIMATION DU LOGO ENTRE LES PAGES) -->
    <div id="page-transition" class="page-transition" aria-hidden="true">
        <div class="transition-inner">
            <div class="transition-logo-circle">
                <img src="/assets/images/logo/logo-pn.jpg" alt="Logo Le Petit Nicolas" class="transition-logo-img">
                <div class="transition-ripple"></div>
            </div>
            <span class="transition-text">L'énergie qui fait bouger les lignes</span>
        </div>
    </div>

<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
    <!-- HEADER -->
    <header class="site-header">
        <div class="container header-container">
            <!-- Logo -->
            <a href="index.php" class="logo-link">
                <img src="/assets/images/logo/logo-pn.jpg" alt="Logo Le Petit Nicolas" class="site-logo">
                <div class="logo-text">
                    <span class="logo-subtitle">Association Humanitaire</span>
                    <span class="logo-title">"LE PETIT NICOLAS"</span>
                </div>
            </a>

            <!-- Navigation -->
            <nav class="main-nav">
                <ul class="nav-list">
                    <li><a href="index.php" <?php echo ($current_page == 'index.php') ? 'class="active"' : ''; ?>>Accueil</a></li>
                    <li><a href="qui-sommes-nous.php" <?php echo ($current_page == 'qui-sommes-nous.php') ? 'class="active"' : ''; ?>>Qui sommes-nous ?</a></li>
                    <li><a href="nos-missions.php" <?php echo ($current_page == 'nos-missions.php') ? 'class="active"' : ''; ?>>Nos missions</a></li>
                    <li><a href="nos-actions.php" <?php echo ($current_page == 'nos-actions.php') ? 'class="active"' : ''; ?>>Nos actions</a></li>
                    <li><a href="contact.php" <?php echo ($current_page == 'contact.php') ? 'class="active"' : ''; ?>>Contact</a></li>
                    <li class="nav-mobile-cta">
                        <a href="nous-soutenir.php" class="btn-mobile-support <?php echo ($current_page == 'nous-soutenir.php') ? 'active-cta' : ''; ?>">
                            <i class="fa-solid fa-heart"></i> Nous soutenir
                        </a>
                    </li>
                </ul>
                <div class="header-cta">
                    <a href="nous-soutenir.php" class="btn btn-primary">Nous soutenir</a>
                </div>
            </nav>

            <!-- Mobile Toggle -->
            <button class="menu-toggle" aria-label="Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </header>
