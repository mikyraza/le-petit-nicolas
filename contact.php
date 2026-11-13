<?php include 'includes/header.php'; ?>

<main id="swup" class="transition-fade">
<!-- PAGE HEADER -->
<section class="page-header" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('/assets/images/presentation.jpeg') center/cover; color: white; padding: 120px 0 60px; text-align: center; margin-top: 80px;">
    <div class="container">
        <h1 style="color: white; font-size: clamp(2rem, 4vw, 3rem);">Contactez-nous</h1>
        <p style="font-size: 1.2rem; opacity: 0.9;">Une question ? Envie de nous rejoindre ? Écrivez-nous.</p>
    </div>
</section>

<section class="section-padding" data-reveal>
        <div class="container">
            <div class="presentation-grid" style="align-items: flex-start;">
                
                <!-- COORDONNEES -->
                <div>
                    <span class="section-subtitle">Informations</span>
                    <h2>Nos coordonnées</h2>
                    <p style="margin-bottom: 30px;">L'Association Humanitaire "LE PETIT NICOLAS" est toujours à votre écoute. Pour soutenir l'éducation, la petite enfance ou les personnes vulnérables, faire un don, proposer un partenariat ou devenir bénévole, n'hésitez pas à nous contacter.</p>
                    
                    <ul class="footer-contact" style="list-style: none; padding: 0;">
                        <li style="display:flex; gap:15px; margin-bottom:20px; font-size:1.1rem; align-items:center;">
                            <div style="width:50px; height:50px; background:var(--color-light-gray); border-radius:50%; display:flex; align-items:center; justify-content:center; color:var(--color-green); font-size:1.2rem;">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <span><strong>Siège :</strong><br> Douala, Cameroun</span>
                        </li>
                        <li style="display:flex; gap:15px; margin-bottom:20px; font-size:1.1rem; align-items:center;">
                            <div style="width:50px; height:50px; background:var(--color-light-gray); border-radius:50%; display:flex; align-items:center; justify-content:center; color:var(--color-orange); font-size:1.2rem;">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <span><strong>Email :</strong><br> contact@lepetitnicolas.org</span>
                        </li>
                        <li style="display:flex; gap:15px; margin-bottom:20px; font-size:1.1rem; align-items:center;">
                            <div style="width:50px; height:50px; background:var(--color-light-gray); border-radius:50%; display:flex; align-items:center; justify-content:center; color:var(--color-blue); font-size:1.2rem;">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <span><strong>Téléphone :</strong><br> +237 XXX XX XX XX</span>
                        </li>
                    </ul>

                    <div style="margin-top: 40px;">
                        <h3 style="font-size: 1.2rem;">Suivez-nous :</h3>
                        <div class="social-links" style="margin-top:15px;">
                            <a href="#" style="background:var(--color-blue);"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" style="background:var(--color-purple);"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" style="background:var(--color-green);"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <!-- FORMULAIRE -->
                <div style="background: var(--color-white); padding: 40px; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg);">
                    <h3 style="margin-bottom: 20px;">Envoyez-nous un message</h3>
                    
                    <?php 
                    // Set subject if passed in URL
                    $sujet = isset($_GET['sujet']) ? $_GET['sujet'] : ''; 
                    ?>

                    <form action="#" method="POST">
                        <div class="form-group">
                            <label class="form-label">Nom complet *</label>
                            <input type="text" class="form-control" required placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Adresse Email *</label>
                            <input type="email" class="form-control" required placeholder="votre@email.com">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Sujet de votre message *</label>
                            <select class="form-control" required>
                                <option value="general" <?php echo ($sujet == '') ? 'selected' : ''; ?>>Renseignement général</option>
                                <option value="don" <?php echo ($sujet == 'don') ? 'selected' : ''; ?>>Faire un don</option>
                                <option value="benevolat" <?php echo ($sujet == 'benevolat') ? 'selected' : ''; ?>>Devenir bénévole</option>
                                <option value="partenariat" <?php echo ($sujet == 'partenariat') ? 'selected' : ''; ?>>Proposition de partenariat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Votre message *</label>
                            <textarea class="form-control" required placeholder="Comment pouvons-nous vous aider ?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Envoyer le message <i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- CARTE GOOGLE MAPS -->
    <section style="padding-bottom: 0;">
        <div class="container" style="padding-bottom: 20px;">
            <div class="section-header">
                <span class="section-subtitle">Localisation</span>
                <h2>Nous trouver à Douala</h2>
            </div>
        </div>
        <div style="width:100%; height: 400px; filter: grayscale(10%);">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127524.77027774498!2d9.62898!3d4.04833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061128be2e1fe6d%3A0x310893d0cbb13c36!2sDouala%2C%20Cameroun!5e0!3m2!1sfr!2sfr!4v1713880000000!5m2!1sfr!2sfr"
                width="100%"
                height="400"
                style="border:0; display:block;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Localisation de l'Association Humanitaire &quot;LE PETIT NICOLAS&quot; à Douala">
            </iframe>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
