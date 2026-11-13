<?php include 'includes/header.php'; ?>

<main id="swup" class="transition-fade">
    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-slideshow">
            <div class="hero-slide active" style="background-image: url('/assets/images/hero/Children_laughing_in_202604231305.jpeg');"></div>
            <div class="hero-slide" style="background-image: url('/assets/images/hero/Children_sharing_nutritious_202604231304.jpeg');"></div>
            <div class="hero-slide" style="background-image: url('/assets/images/hero/benevole-donne-vetement-202604231301.jpeg');"></div>
        </div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1 class="hero-title">Association Humanitaire<br>"LE PETIT NICOLAS"</h1>
            <div class="hero-pillars">
                <span class="pillar-tag"><i class="fa-solid fa-graduation-cap"></i> Éducation</span>
                <span class="pillar-tag"><i class="fa-solid fa-child-reaching"></i> La petite enfance</span>
                <span class="pillar-tag"><i class="fa-solid fa-hands-holding-child"></i> Les personnes vulnérables</span>
            </div>
            <p class="hero-slogan">"L'énergie qui fait bouger les lignes"</p>
            <div class="hero-actions">
                <a href="#missions" class="btn btn-primary btn-hero-primary">
                    <span>Découvrir nos actions</span>
                    <i class="fa-solid fa-arrow-down"></i>
                </a>
                <a href="contact.php?sujet=don" class="btn btn-secondary btn-hero-secondary">
                    <i class="fa-solid fa-heart" style="color:var(--color-orange); margin-right:6px;"></i>
                    <span>Nous soutenir</span>
                </a>
            </div>
        </div>

        <!-- INDICATEUR DE DEFILEMENT SOURIS -->
        <a href="#presentation" class="hero-scroll-indicator" aria-label="Découvrir la suite">
            <span class="scroll-mouse">
                <span class="scroll-wheel"></span>
            </span>
            <span class="scroll-text">Découvrir <i class="fa-solid fa-chevron-down"></i></span>
        </a>
    </section>

    <!-- PRESENTATION SECTION -->
    <section id="presentation" class="section-padding bg-light" data-reveal="fade-up">
        <div class="container presentation-grid">
            <div class="presentation-text" data-reveal="fade-right">
                <span class="section-subtitle">Solidarité & Action au Cameroun</span>
                <h2>Qui sommes-nous ?</h2>
                <div class="section-divider"></div>
                <p>L'Association Humanitaire "LE PETIT NICOLAS" agit au Cameroun au plus près du terrain pour soutenir la petite enfance, les élèves et les personnes vulnérables. Fondée sur un esprit communautaire et des valeurs de solidarité humaine, notre association concentre son énergie sur trois missions essentielles : l'éducation, la lutte contre la faim et la dignité par l'habillement.</p>
                <p style="margin-top:15px; margin-bottom:25px;">Chaque jour, nos équipes et bénévoles s'engagent directement auprès des familles et des écoles pour apporter un soutien concret et mesurable. Nous croyons que chaque enfant mérite d'étudier dignement, qu'aucune personne ne doit souffrir de la faim, et que l'entraide communautaire fait véritablement bouger les lignes.</p>
                <a href="qui-sommes-nous.php" class="btn btn-tertiary btn-animated-arrow">
                    <span>En savoir plus</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="presentation-image-wrapper" data-reveal="fade-left" data-tilt>
                <div class="image-frame-decor">
                    <img src="/assets/images/presentation.jpeg" alt="Equipe Le Petit Nicolas" class="presentation-img">
                    <div class="image-floating-badge">
                        <i class="fa-solid fa-heart-pulse"></i>
                        <span>Au cœur de l'humain</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSIONS SECTION -->
    <section id="missions" class="section-padding" data-reveal="fade-up">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Les missions de "Le Petit Nicolas"</span>
                <h2>Notre mission :</h2>
                <div class="section-divider center"></div>
                <p style="color:var(--color-text-secondary); max-width:650px; margin:10px auto 0;">Des actions de proximité pour l'éducation, la petite enfance et les personnes vulnérables.</p>
            </div>
            
            <div class="missions-grid reveal-stagger">
                <!-- Mission 1 -->
                <div class="mission-card mission-edu" data-tilt>
                    <div class="card-accent-bar edu"></div>
                    <div class="mission-icon-box edu">
                        <i class="fa-solid fa-graduation-cap mission-icon"></i>
                    </div>
                    <h3 class="mission-title">Fourniture de matériel didactique aux écoles</h3>
                    <p class="mission-desc">Nous équipons les écoles camerounaises avec le matériel nécessaire à un apprentissage de qualité. Cahiers, stylos, livres et outils pédagogiques essentiels pour que chaque enfant puisse apprendre dans de bonnes conditions.</p>
                    <a href="nos-missions.php#materiel-didactique" class="btn btn-secondary btn-card-action">En savoir plus</a>
                </div>

                <!-- Mission 2 -->
                <div class="mission-card mission-famine" data-tilt>
                    <div class="card-accent-bar famine"></div>
                    <div class="mission-icon-box famine">
                        <i class="fa-solid fa-bowl-rice mission-icon"></i>
                    </div>
                    <h3 class="mission-title">Action de lutte contre la famine</h3>
                    <p class="mission-desc">Nous organisons des distributions de repas chauds, cantines solidaires et denrées alimentaires pour venir en aide à la petite enfance et aux personnes vulnérables. Notre objectif : que personne ne reste le ventre vide.</p>
                    <a href="nos-missions.php#lutte-famine" class="btn btn-secondary btn-card-action" style="border-color:var(--color-orange); color:var(--color-orange);">En savoir plus</a>
                </div>

                <!-- Mission 3 -->
                <div class="mission-card mission-clothes" data-tilt>
                    <div class="card-accent-bar clothes"></div>
                    <div class="mission-icon-box clothes">
                        <i class="fa-solid fa-shirt mission-icon"></i>
                    </div>
                    <h3 class="mission-title">Fourniture des articles vestimentaires</h3>
                    <p class="mission-desc">Nous collectons et distribuons des vêtements neufs et adaptés ainsi que des chaussures aux enfants et familles vulnérables. Parce que l'habillement est un besoin fondamental et un vecteur de dignité humaine.</p>
                    <a href="nos-missions.php#articles-vestimentaires" class="btn btn-secondary btn-card-action" style="border-color:var(--color-blue); color:var(--color-blue);">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION CHIFFRES CLES & IMPACT -->
    <section class="stats-section" data-reveal="fade-up">
        <div class="stats-ambient-glow"></div>
        <div class="container" style="position:relative; z-index:2;">
            <div class="section-header" style="margin-bottom:45px;">
                <span class="section-subtitle" style="color:var(--color-orange);">Notre Impact Concret</span>
                <h2 style="color:#ffffff;">L'énergie qui fait bouger les lignes en chiffres</h2>
                <div class="section-divider center orange"></div>
            </div>
            <div class="stats-grid reveal-stagger">
                <div class="stat-card" data-tilt>
                    <div class="stat-icon-wrapper edu">
                        <i class="fa-solid fa-graduation-cap stat-icon" style="color:var(--color-green);"></i>
                        <span class="stat-halo"></span>
                    </div>
                    <div class="stat-number" data-target="500" data-prefix="+">0</div>
                    <p class="stat-label">Élèves équipés en kits et matériel didactique</p>
                </div>
                <div class="stat-card" data-tilt>
                    <div class="stat-icon-wrapper famine">
                        <i class="fa-solid fa-bowl-rice stat-icon" style="color:var(--color-orange);"></i>
                        <span class="stat-halo"></span>
                    </div>
                    <div class="stat-number" data-target="1200" data-prefix="+">0</div>
                    <p class="stat-label">Repas chauds distribués (Lutte contre la faim)</p>
                </div>
                <div class="stat-card" data-tilt>
                    <div class="stat-icon-wrapper clothes">
                        <i class="fa-solid fa-shirt stat-icon" style="color:var(--color-blue);"></i>
                        <span class="stat-halo"></span>
                    </div>
                    <div class="stat-number" data-target="200" data-prefix="+">0</div>
                    <p class="stat-label">Familles habillées dignement lors des collectes</p>
                </div>
                <div class="stat-card" data-tilt>
                    <div class="stat-icon-wrapper direct">
                        <i class="fa-solid fa-hand-holding-heart stat-icon" style="color:var(--color-purple);"></i>
                        <span class="stat-halo"></span>
                    </div>
                    <div class="stat-number" data-target="100" data-suffix="%">0</div>
                    <p class="stat-label">Des dons alloués directement au terrain</p>
                </div>
            </div>
        </div>
    </section>

    <!-- RECENT ACTIONS SECTION -->
    <section class="section-padding bg-light" data-reveal="fade-up">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Dernières actions</span>
                <h2>Découvrez nos actions récentes sur le terrain</h2>
                <div class="section-divider center"></div>
            </div>
            
            <div class="actions-grid reveal-stagger">
                <!-- Action 1 -->
                <article class="action-card" data-tilt>
                    <div class="action-img-wrapper">
                        <img src="/assets/images/hero/Volunteer_giving_kit_202604231310.jpeg" alt="Distribution de kits" class="action-img">
                        <span class="action-badge" style="background-color:var(--color-green);">Éducation</span>
                    </div>
                    <div class="action-content">
                        <div class="action-meta">
                            <span><i class="fa-regular fa-calendar"></i> 15 Octobre 2025</span>
                            <span><i class="fa-solid fa-location-dot"></i> Douala</span>
                        </div>
                        <h3>Distribution de kits scolaires à Douala</h3>
                        <p style="color:var(--color-text-secondary); font-size:0.95rem;">Plus de 500 élèves ont reçu des fournitures pour la rentrée, leur permettant de démarrer l'année sereinement.</p>
                        <a href="nos-actions.php" class="read-more">Lire la suite <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Action 2 -->
                <article class="action-card" data-tilt>
                    <div class="action-img-wrapper">
                        <img src="/assets/images/hero/Children_sharing_nutritious_202604231303.jpeg" alt="Cantine solidaire" class="action-img">
                        <span class="action-badge" style="background-color:var(--color-orange);">Nutrition</span>
                    </div>
                    <div class="action-content">
                        <div class="action-meta">
                            <span><i class="fa-regular fa-calendar"></i> 2 Septembre 2025</span>
                            <span><i class="fa-solid fa-location-dot"></i> Yaoundé</span>
                        </div>
                        <h3>Lancement de la cantine solidaire à Yaoundé</h3>
                        <p style="color:var(--color-text-secondary); font-size:0.95rem;">Mise en place d'un programme de repas chauds hebdomadaires pour les enfants d'un quartier défavorisé.</p>
                        <a href="nos-actions.php" class="read-more">Lire la suite <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Action 3 -->
                <article class="action-card" data-tilt>
                    <div class="action-img-wrapper">
                        <img src="/assets/images/hero/benevole-donne-vetement-202604231259.jpeg" alt="Collecte vetements" class="action-img">
                        <span class="action-badge" style="background-color:var(--color-blue);">Aide Sociale</span>
                    </div>
                    <div class="action-content">
                        <div class="action-meta">
                            <span><i class="fa-regular fa-calendar"></i> 14 Juillet 2025</span>
                            <span><i class="fa-solid fa-location-dot"></i> Bafoussam</span>
                        </div>
                        <h3>Grande collecte et don de vêtements</h3>
                        <p style="color:var(--color-text-secondary); font-size:0.95rem;">Une grande collecte qui a permis d'habiller plus de 200 familles vulnérables à l'approche de la saison des pluies.</p>
                        <a href="nos-actions.php" class="read-more">Lire la suite <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
            
            <div class="text-center" style="margin-top:45px;">
                <a href="nos-actions.php" class="btn btn-tertiary btn-animated-arrow">
                    <span>Voir toutes les actions</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="section-padding cta-section" data-reveal="fade-up">
        <div class="cta-mesh-glow"></div>
        <div class="container" style="position:relative; z-index:2;">
            <span class="cta-pill"><i class="fa-solid fa-hand-holding-heart"></i> Agir ensemble</span>
            <h2 style="font-size: clamp(2rem, 4vw, 2.6rem); margin-bottom: 20px;">Rejoignez notre mission</h2>
            <div class="section-divider center white"></div>
            <p style="font-size: 1.15rem; max-width: 620px; margin: 0 auto 35px; opacity: 0.95; line-height: 1.6;">Votre soutien fait toute la différence. Ensemble, faisons bouger les lignes pour les enfants et les familles vulnérables !</p>
            <div class="cta-actions">
                <a href="contact.php?sujet=don" class="btn btn-cta-primary">
                    <i class="fa-solid fa-heart" style="color:var(--color-orange); margin-right:8px;"></i>
                    <span>Faire un don</span>
                </a>
                <a href="contact.php?sujet=benevolat" class="btn btn-cta-secondary">
                    <i class="fa-solid fa-users" style="margin-right:8px;"></i>
                    <span>Devenir bénévole</span>
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
