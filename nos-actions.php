<?php include 'includes/header.php'; ?>

<main id="swup" class="transition-fade bg-light">
<!-- PAGE HEADER -->
<section class="page-header" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/assets/images/hero/Volunteer_giving_kit_202604231310.jpeg') center/cover; color: white; padding: 120px 0 60px; text-align: center; margin-top: 80px;">
    <div class="container">
        <h1 style="color: white; font-size: clamp(2rem, 4vw, 3rem);">Nos Actions sur le terrain</h1>
        <p style="font-size: 1.2rem; opacity: 0.9;">Association Humanitaire "LE PETIT NICOLAS" • Éducation, petite enfance et personnes vulnérables au Cameroun.</p>
    </div>
</section>

<!-- FILTERS -->
<div class="container" style="padding-top: 40px;" data-reveal>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            <button class="btn" style="background: var(--color-black); color: white;">Toutes les actions</button>
            <button class="btn" style="background: var(--color-white); border: 1px solid var(--color-green); color: var(--color-green);">Éducation</button>
            <button class="btn" style="background: var(--color-white); border: 1px solid var(--color-orange); color: var(--color-orange);">Alimentation</button>
            <button class="btn" style="background: var(--color-white); border: 1px solid var(--color-blue); color: var(--color-blue);">Vestimentaire</button>
        </div>
    </div>

    <!-- ACTIONS GRID -->
    <section class="section-padding" data-reveal>
        <div class="container actions-grid">
            
            <!-- Action 1 -->
            <article class="action-card" data-tilt>
                <div class="action-img-wrapper">
                    <img src="/assets/images/hero/Volunteer_giving_kit_202604231310.jpeg" alt="Distribution de kits" class="action-img">
                    <span class="action-badge" style="background-color:var(--color-green);">Éducation</span>
                </div>
                <div class="action-content">
                    <div class="action-meta">
                        <span><i class="fa-regular fa-calendar"></i> Octobre 2025</span>
                        <span><i class="fa-solid fa-location-dot"></i> Douala</span>
                    </div>
                    <h3>Distribution de kits scolaires à Douala</h3>
                    <p style="color:var(--color-text-secondary); font-size:0.95rem;">Plus de 500 élèves ont reçu des fournitures pour la rentrée, leur permettant de démarrer l'année sereinement.</p>
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
                        <span><i class="fa-regular fa-calendar"></i> Septembre 2025</span>
                        <span><i class="fa-solid fa-location-dot"></i> Yaoundé</span>
                    </div>
                    <h3>Lancement de la cantine solidaire à Yaoundé</h3>
                    <p style="color:var(--color-text-secondary); font-size:0.95rem;">Mise en place d'un programme de repas chauds hebdomadaires pour les enfants d'un quartier défavorisé.</p>
                </div>
            </article>

            <!-- Action 3 -->
            <article class="action-card" data-tilt>
                <div class="action-img-wrapper">
                    <img src="/assets/images/hero/benevole-donne-vetement-202604231259.jpeg" alt="Collecte vetements" class="action-img">
                    <span class="action-badge" style="background-color:var(--color-blue);">Vestimentaire</span>
                </div>
                <div class="action-content">
                    <div class="action-meta">
                        <span><i class="fa-regular fa-calendar"></i> Juillet 2025</span>
                        <span><i class="fa-solid fa-location-dot"></i> Bafoussam</span>
                    </div>
                    <h3>Grande collecte et don de vêtements</h3>
                    <p style="color:var(--color-text-secondary); font-size:0.95rem;">Une grande collecte qui a permis d'habiller plus de 200 familles vulnérables à l'approche de la saison des pluies.</p>
                </div>
            </article>

            <!-- Action 4 (Placeholder) -->
            <article class="action-card" data-tilt>
                <div class="action-img-wrapper">
                    <img src="/assets/images/hero/Children_laughing_in_202604231305.jpeg" alt="Fete de fin d'année" class="action-img">
                    <span class="action-badge" style="background-color:var(--color-purple);">Événement</span>
                </div>
                <div class="action-content">
                    <div class="action-meta">
                        <span><i class="fa-regular fa-calendar"></i> Décembre 2024</span>
                        <span><i class="fa-solid fa-location-dot"></i> Kribi</span>
                    </div>
                    <h3>Fête de fin d'année pour les enfants</h3>
                    <p style="color:var(--color-text-secondary); font-size:0.95rem;">Organisation d'un grand arbre de noël avec distribution de repas, jouets et habits festifs.</p>
                </div>
            </article>

        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
