/**
 * ==============================================================================
 * Main JavaScript File - Association Humanitaire "LE PETIT NICOLAS"
 * Moteur d'Interactivité & Fluidité (Swup, Lenis, Preloader, Hero Lent, Stagger)
 * ==============================================================================
 */

(function () {
    'use strict';

    let lenis = null;
    let heroInterval = null;

    /* ==========================================================================
       1. SPLASH PRELOADER D'ACCUEIL (Animation du Logo)
       ========================================================================== */
    function initPreloader() {
        const preloader = document.getElementById('site-preloader');
        if (!preloader) return;

        const urlParams = new URLSearchParams(window.location.search);
        const forceReplay = urlParams.get('replay') === '1';
        const hasVisited = sessionStorage.getItem('pn_intro_played');

        if (hasVisited && !forceReplay) {
            preloader.classList.add('preloader-hidden');
            initHeroAnimations();
            return;
        }

        // Première visite : on joue l'animation du logo (1.25s)
        setTimeout(() => {
            preloader.classList.add('preloader-hidden');
            sessionStorage.setItem('pn_intro_played', '1');
            initHeroAnimations();
            initScrollReveal();
        }, 1250);
    }

    /* ==========================================================================
       2. ANIMATION LENTE & CINÉMATIQUE DU HERO
       ========================================================================== */
    function initHeroAnimations() {
        const hero = document.querySelector('.hero');
        if (!hero) return;

        const preloader = document.getElementById('site-preloader');
        const isPreloaderActive = preloader && !preloader.classList.contains('preloader-hidden');

        // Délai calculé : si preloader actif, on attend qu'il s'efface en douceur
        const delay = isPreloaderActive ? 1350 : 150;

        setTimeout(() => {
            hero.classList.add('hero-ready');
        }, delay);
    }

    /* ==========================================================================
       3. INDICATEUR DE DEFILEMENT HERO (Clic souris défilement doux)
       ========================================================================== */
    function initScrollIndicator() {
        const indicator = document.querySelector('.hero-scroll-indicator');
        if (!indicator || indicator.dataset.bound) return;
        indicator.dataset.bound = 'true';

        indicator.addEventListener('click', (e) => {
            e.preventDefault();
            const target = document.querySelector('#presentation') || document.querySelector('#missions');
            if (target) {
                if (lenis) {
                    lenis.scrollTo(target, { offset: -60 });
                } else {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    }

    /* ==========================================================================
       4. LENIS SMOOTH SCROLL (Défilement soyeux)
       ========================================================================== */
    function initLenis() {
        if (typeof window.Lenis === 'undefined') return;

        if (lenis) {
            lenis.destroy();
        }

        lenis = new window.Lenis({
            duration: 1.25,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            direction: 'vertical',
            gestureDirection: 'vertical',
            smooth: true,
            smoothTouch: false,
            touchMultiplier: 2
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);
    }

    /* ==========================================================================
       5. NAVIGATION FLUIDE SWUP (Transitions de pages avec animation Logo)
       ========================================================================== */
    function initSwup() {
        if (typeof window.Swup === 'undefined') return;

        const swup = new window.Swup({
            containers: ['#swup'],
            animateHistoryBrowsing: true,
            linkSelector: 'a[href]:not([data-no-swup]):not([href^="#"]):not([href^="mailto:"]):not([href^="tel:"])'
        });

        const transitionOverlay = document.getElementById('page-transition');
        const progressBar = document.getElementById('nav-progress-bar');

        // Début du départ de la page actuelle
        swup.hooks.on('animation:out:start', () => {
            // Fermer le menu mobile si ouvert
            const navList = document.querySelector('.nav-list');
            const menuToggle = document.querySelector('.menu-toggle');
            if (navList && navList.classList.contains('active')) {
                navList.classList.remove('active');
                if (menuToggle) {
                    const icon = menuToggle.querySelector('i');
                    if (icon) {
                        icon.classList.remove('fa-xmark');
                        icon.classList.add('fa-bars');
                    }
                }
            }

            // Activer la barre de progression et le rideau de transition logo
            if (progressBar) {
                progressBar.classList.add('active');
                progressBar.style.width = '70%';
            }
            if (transitionOverlay) {
                transitionOverlay.classList.add('is-active');
            }
        });

        // Contenu de la nouvelle page injecté
        swup.hooks.on('page:view', () => {
            // Mettre à jour les liens actifs du menu (support universel .php, .html et routes Vercel)
            const rawPath = window.location.pathname.split('/').filter(Boolean).pop() || 'index';
            const currentSlug = rawPath.replace(/\.(php|html)$/, '') || 'index';
            document.querySelectorAll('.nav-list a').forEach((link) => {
                const linkHref = (link.getAttribute('href') || '').split('/').filter(Boolean).pop() || '';
                const linkSlug = linkHref.replace(/\.(php|html)$/, '') || 'index';
                if (linkSlug === currentSlug || (currentSlug === 'index' && (linkSlug === '' || linkSlug === 'index'))) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });

            // Remettre le scroll en haut de page en douceur
            if (lenis) {
                lenis.scrollTo(0, { immediate: true });
            } else {
                window.scrollTo(0, 0);
            }
        });

        // Fin de transition : retirer l'overlay et réinitialiser les composants
        swup.hooks.on('animation:in:end', () => {
            if (progressBar) {
                progressBar.style.width = '100%';
                setTimeout(() => {
                    progressBar.classList.remove('active');
                    progressBar.style.width = '0%';
                }, 300);
            }

            if (transitionOverlay) {
                setTimeout(() => {
                    transitionOverlay.classList.remove('is-active');
                }, 100);
            }

            // Ré-initialisation de tous les modules de la nouvelle page
            initPageModules();
        });
    }

    /* ==========================================================================
       6. COMPTEURS D'IMPACT ANIMES (Statistiques en chiffres)
       ========================================================================== */
    function initCounters() {
        const counters = document.querySelectorAll('.stat-number');
        if (!counters.length) return;

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.getAttribute('data-target'), 10) || 0;
                    const prefix = counter.getAttribute('data-prefix') || '';
                    const suffix = counter.getAttribute('data-suffix') || '';
                    const duration = 1800; // ms
                    const startTime = performance.now();

                    function updateCounter(currentTime) {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        // Easing Out Quart pour un ralenti soyeux sur la fin
                        const easeProgress = 1 - Math.pow(1 - progress, 4);
                        const currentValue = Math.floor(easeProgress * target);

                        counter.textContent = `${prefix}${currentValue.toLocaleString('fr-FR')}${suffix}`;

                        if (progress < 1) {
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = `${prefix}${target.toLocaleString('fr-FR')}${suffix}`;
                        }
                    }

                    requestAnimationFrame(updateCounter);
                    obs.unobserve(counter);
                }
            });
        }, { threshold: 0.25 });

        counters.forEach((c) => observer.observe(c));
    }

    /* ==========================================================================
       7. EFFET 3D TILT SUR LES CARTES (Cartes réactives à la souris)
       ========================================================================== */
    function initTiltCards() {
        // Uniquement sur les appareils disposant d'un pointeur précis
        if (window.matchMedia('(pointer: coarse)').matches) return;

        const tiltElements = document.querySelectorAll('[data-tilt]');
        tiltElements.forEach((el) => {
            if (el.dataset.tiltBound) return;
            el.dataset.tiltBound = 'true';

            let isHovered = false;

            el.addEventListener('mouseenter', () => {
                isHovered = true;
            });

            el.addEventListener('mousemove', (e) => {
                if (!isHovered) return;
                const rect = el.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = ((y - centerY) / centerY) * -6; // max 6 deg
                const rotateY = ((x - centerX) / centerX) * 6;

                el.style.transform = `perspective(1000px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateY(-5px)`;
            });

            el.addEventListener('mouseleave', () => {
                isHovered = false;
                el.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0)';
            });
        });
    }

    /* ==========================================================================
       8. SCROLL REVEAL (Apparitions progressives & Stagger)
       ========================================================================== */
    function initScrollReveal() {
        const revealElements = document.querySelectorAll('[data-reveal], .reveal-stagger');
        if (!revealElements.length) return;

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    const innerStaggers = entry.target.querySelectorAll('.reveal-stagger');
                    innerStaggers.forEach((stg) => stg.classList.add('revealed'));
                    obs.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach((el) => observer.observe(el));
    }

    /* ==========================================================================
       9. HERO SLIDESHOW (Rotation Ken Burns)
       ========================================================================== */
    function initHeroSlideshow() {
        if (heroInterval) {
            clearInterval(heroInterval);
            heroInterval = null;
        }

        const slides = document.querySelectorAll('.hero-slide');
        if (slides.length <= 1) return;

        let currentSlide = 0;
        heroInterval = setInterval(() => {
            if (!document.contains(slides[0])) {
                clearInterval(heroInterval);
                return;
            }
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 5500);
    }

    /* ==========================================================================
       10. MENU MOBILE & HEADER SCROLL
       ========================================================================== */
    function initHeaderAndNav() {
        const menuToggle = document.querySelector('.menu-toggle');
        const navList = document.querySelector('.nav-list');

        if (menuToggle && navList && !menuToggle.dataset.bound) {
            menuToggle.dataset.bound = 'true';

            menuToggle.addEventListener('click', () => {
                navList.classList.toggle('active');
                const icon = menuToggle.querySelector('i');
                if (icon) {
                    if (navList.classList.contains('active')) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-xmark');
                    } else {
                        icon.classList.remove('fa-xmark');
                        icon.classList.add('fa-bars');
                    }
                }
            });

            document.addEventListener('click', (e) => {
                if (!menuToggle.contains(e.target) && !navList.contains(e.target) && navList.classList.contains('active')) {
                    navList.classList.remove('active');
                    const icon = menuToggle.querySelector('i');
                    if (icon) {
                        icon.classList.remove('fa-xmark');
                        icon.classList.add('fa-bars');
                    }
                }
            });

            // Fermer le menu mobile lors d'un clic sur n'importe quel lien du menu
            navList.querySelectorAll('a').forEach((link) => {
                link.addEventListener('click', () => {
                    if (navList.classList.contains('active')) {
                        navList.classList.remove('active');
                        const icon = menuToggle.querySelector('i');
                        if (icon) {
                            icon.classList.remove('fa-xmark');
                            icon.classList.add('fa-bars');
                        }
                    }
                });
            });
        }

        const header = document.querySelector('.site-header');
        if (header && !window.__scrollBound) {
            window.__scrollBound = true;
            window.addEventListener('scroll', () => {
                if (window.scrollY > 40) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            }, { passive: true });
        }
    }

    /* ==========================================================================
       INITIALISATION GLOBALE DES MODULES
       ========================================================================== */
    function initPageModules() {
        initHeroAnimations();
        initScrollIndicator();
        initHeroSlideshow();
        initScrollReveal();
        initTiltCards();
        initCounters();
        initHeaderAndNav();
        if (lenis) {
            lenis.resize();
        }
    }

    // Lancement au chargement du DOM
    document.addEventListener('DOMContentLoaded', () => {
        initPreloader();
        initLenis();
        initSwup();
        initPageModules();
    });

})();
