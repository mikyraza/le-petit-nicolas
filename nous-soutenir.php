<?php include 'includes/header.php'; ?>

<main id="swup" class="transition-fade">
<!-- PAGE HEADER -->
<section style="background: linear-gradient(135deg, var(--color-orange) 0%, var(--color-green) 100%); color: white; padding: 120px 0 60px; text-align: center; margin-top: 80px;">
    <div class="container">
        <h1 style="color: white; font-size: clamp(2rem, 4vw, 3rem);">Nous soutenir</h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">Chaque geste compte. Ensemble avec l'Association Humanitaire "LE PETIT NICOLAS", faisons bouger les lignes.</p>
    </div>
</section>

<!-- INTRO -->
<section class="section-padding text-center" data-reveal>
        <div class="container">
            <span class="section-subtitle">Agissez avec nous</span>
            <h2>Comment voulez-vous aider ?</h2>
            <p style="color: var(--color-text-secondary); max-width: 650px; margin: 0 auto;">L'Association Humanitaire "LE PETIT NICOLAS" a besoin de votre soutien pour continuer à agir sur le terrain pour l'éducation, la petite enfance et les personnes vulnérables. Choisissez la forme de soutien qui vous correspond.</p>
        </div>
    </section>

    <!-- WAYS TO SUPPORT -->
    <section class="bg-light section-padding" data-reveal>
        <div class="container missions-grid">

            <!-- Donation -->
            <div class="mission-card" style="border-top-color: var(--color-orange);" data-tilt>
                <div style="width:70px; height:70px; background: rgba(255,152,0,0.1); border-radius:50%; display:flex; align-items:center; justify-content:center; margin-bottom:20px;">
                    <i class="fa-solid fa-hand-holding-dollar" style="font-size:1.8rem; color:var(--color-orange);"></i>
                </div>
                <h3 class="mission-title">Faire un don</h3>
                <p class="mission-desc">Votre don, même modeste, contribue directement à la fourniture de matériel didactique aux écoles, aux actions de lutte contre la famine et à la fourniture d'articles vestimentaires au Cameroun. 100% des dons sont reversés aux actions de terrain.</p>
                <a href="contact.php?sujet=don" class="btn btn-primary">Faire un don maintenant</a>
            </div>

            <!-- Bénévolat -->
            <div class="mission-card" style="border-top-color: var(--color-green);" data-tilt>
                <div style="width:70px; height:70px; background: rgba(76,175,80,0.1); border-radius:50%; display:flex; align-items:center; justify-content:center; margin-bottom:20px;">
                    <i class="fa-solid fa-people-group" style="font-size:1.8rem; color:var(--color-green);"></i>
                </div>
                <h3 class="mission-title">Devenir bénévole</h3>
                <p class="mission-desc">Rejoignez notre équipe de bénévoles actifs. Que vous soyez au Cameroun ou en diaspora, il existe une façon pour vous de contribuer : collecte, logistique, communication, terrain...</p>
                <a href="contact.php?sujet=benevolat" class="btn btn-secondary">Rejoindre l'équipe</a>
            </div>

            <!-- Partenariat -->
            <div class="mission-card" style="border-top-color: var(--color-blue);" data-tilt>
                <div style="width:70px; height:70px; background: rgba(33,150,243,0.1); border-radius:50%; display:flex; align-items:center; justify-content:center; margin-bottom:20px;">
                    <i class="fa-solid fa-handshake" style="font-size:1.8rem; color:var(--color-blue);"></i>
                </div>
                <h3 class="mission-title">Partenariat & Mécénat</h3>
                <p class="mission-desc">Vous êtes une entreprise, une institution ou une organisation ? Associez votre image à une cause concrète et impactante. Nous proposons des partenariats adaptés à chaque profil.</p>
                <a href="contact.php?sujet=partenariat" class="btn btn-secondary" style="border-color:var(--color-blue); color:var(--color-blue);">Proposer un partenariat</a>
            </div>

            <!-- Don en nature -->
            <div class="mission-card" style="border-top-color: var(--color-purple);" data-tilt>
                <div style="width:70px; height:70px; background: rgba(156,39,176,0.1); border-radius:50%; display:flex; align-items:center; justify-content:center; margin-bottom:20px;">
                    <i class="fa-solid fa-box-open" style="font-size:1.8rem; color:var(--color-purple);"></i>
                </div>
                <h3 class="mission-title">Don en nature</h3>
                <p class="mission-desc">Vous disposez de vêtements, fournitures scolaires ou denrées alimentaires à offrir ? Contactez-nous pour organiser la collecte et l'acheminement de votre don vers le Cameroun.</p>
                <a href="contact.php?sujet=don-nature" class="btn btn-secondary" style="border-color:var(--color-purple); color:var(--color-purple);">Faire un don en nature</a>
            </div>

            <!-- Parrainage -->
            <div class="mission-card" style="border-top-color: var(--color-red);" data-tilt>
                <div style="width:70px; height:70px; background: rgba(244,67,54,0.1); border-radius:50%; display:flex; align-items:center; justify-content:center; margin-bottom:20px;">
                    <i class="fa-solid fa-child-reaching" style="font-size:1.8rem; color:var(--color-red);"></i>
                </div>
                <h3 class="mission-title">Parrainage d'enfant</h3>
                <p class="mission-desc">Choisissez de soutenir un enfant en particulier en finançant sa scolarité, ses repas ou son habillement sur l'année. Un engagement durable et profondément humain.</p>
                <a href="contact.php?sujet=parrainage" class="btn btn-secondary" style="border-color:var(--color-red); color:var(--color-red);">Parrainer un enfant</a>
            </div>

            <!-- Partager -->
            <div class="mission-card" style="border-top-color: var(--color-gray);" data-tilt>
                <div style="width:70px; height:70px; background: rgba(153,153,153,0.1); border-radius:50%; display:flex; align-items:center; justify-content:center; margin-bottom:20px;">
                    <i class="fa-solid fa-share-nodes" style="font-size:1.8rem; color:var(--color-gray);"></i>
                </div>
                <h3 class="mission-title">Partager nos actions</h3>
                <p class="mission-desc">Parlez de nous autour de vous ! Partagez nos publications sur les réseaux sociaux, parlez de l'association à votre entourage. La visibilité est elle aussi une forme de soutien précieuse.</p>
                <div class="social-links" style="margin-top: auto;">
                    <a href="#" style="background:var(--color-blue);"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" style="background:var(--color-purple);"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" style="background:var(--color-green);"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="section-padding cta-section text-center">
        <div class="container">
            <h2>Prêt à changer des vies ?</h2>
            <p style="margin-bottom: 30px; opacity: 0.9;">Contactez-nous dès aujourd'hui et ensemble, faisons bouger les lignes !</p>
            <a href="contact.php" class="btn" style="background: var(--color-white); color: var(--color-orange); font-weight: 700;">Nous contacter <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
