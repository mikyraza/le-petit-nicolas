# Association Humanitaire "LE PETIT NICOLAS"

> *"L'énergie qui fait bouger les lignes"*

Site officiel de l'**Association Humanitaire "LE PETIT NICOLAS"**, ONG active au Cameroun œuvrant pour l'éducation, la petite enfance et le soutien aux personnes vulnérables.

---

## 🌟 Présentation de l'Association

Fondée et présidée par **Mme DJAPITE**, l'association concentre ses actions de proximité autour de 3 missions fondamentales :

1. **Fourniture de matériel didactique aux écoles** : Cahiers, manuels, stylos et fournitures scolaires pour permettre aux élèves défavorisés d'apprendre dans la dignité.
2. **Action de lutte contre la famine** : Cantines solidaires, distribution de repas chauds et de denrées alimentaires essentielles pour la petite enfance et les familles.
3. **Fourniture des articles vestimentaires** : Collecte et distribution de vêtements et chaussures pour redonner chaleur et dignité aux personnes vulnérables.

---

## 🚀 Fonctionnalités & Stack Technique

- **Architecture :** PHP Vanilla modulaire et ultra-léger (`includes/header.php`, `includes/footer.php`), 100 % compatible avec un hébergement mutualisé standard (**Hostinger**, Apache/LiteSpeed).
- **Navigation sans rechargement :** Intégration de [Swup.js](https://swup.js.org/) pour des transitions fluides avec barre de progression et pulsation du logo, sans aucun écran blanc.
- **Défilement soyeux :** Défilement inertiel doux propulsé par [Lenis](https://github.com/darkroomengineering/lenis).
- **Animations Cinématiques :**
  - **Splash Preloader d'accueil :** Halo lumineux animé avec devise au démarrage du site.
  - **Hero animé :** Effet Ken Burns sur le diaporama et apparition lente et échelonnée (1,4s) du titre, des piliers, du slogan et des boutons.
  - **Cartes réactives 3D Tilt :** Réaction dynamique des cartes au mouvement de la souris.
  - **Compteurs d'impact dynamiques :** Chiffres clés animés au défilement (+500 élèves, +1 200 repas, +200 familles, 100 % terrain).
  - **Révélations en cascade (Stagger) :** Apparition naturelle des sections et cartes au scroll.
- **Responsive & Mobile First :** Menu tiroir latéral fluide intégrant l'appel à l'action *"Nous soutenir"*.
- **Sécurité & Performance :** Configuration Apache `.htaccess` optimisée (GZIP `mod_deflate`, cache `mod_expires`, masquage des répertoires `Options -Indexes`, blocage d'accès aux fichiers sensibles).

---

## 📂 Structure du Projet

```text
├── assets/
│   ├── css/
│   │   └── style.css            # Feuille de style unique consolidée et responsive
│   ├── js/
│   │   ├── main.js              # Moteur JavaScript (Swup, Lenis, Preloader, Tilt, Compteurs)
│   │   └── vendor/              # Bibliothèques locales (lenis.min.js, swup.min.js)
│   └── images/                  # Photos de terrain, diaporama hero et logo officiel
├── includes/
│   ├── header.php               # En-tête global, métadonnées SEO, transitions Swup
│   └── footer.php               # Pied de page, navigation secondaire et scripts
├── index.php                    # Page d'accueil avec Hero cinématique et chiffres clés
├── qui-sommes-nous.php          # Histoire, valeurs et équipe (Mme DJAPITE)
├── nos-missions.php             # Détail des 3 piliers d'action
├── nos-actions.php              # Journal des actions et distributions de terrain
├── nous-soutenir.php            # Guide des dons, mécénat et bénévolat
├── contact.php                  # Formulaire de contact qualifié (Don, Bénévolat, Partenariat)
├── mentions-legales.php         # Informations légales
├── politique-confidentialite.php # Protection des données personnelles
├── start_site.sh                # Script de lancement local rapide (port 8085)
└── .htaccess                    # Règles Apache, sécurité et compression
```

---

## 💻 Démarrage Local

Pour tester le site en local :

```bash
# 1. Cloner le dépôt
git clone https://github.com/mikyraza/le-petit-nicolas.git
cd le-petit-nicolas

# 2. Lancer le serveur local
./start_site.sh
# Ou directement via PHP :
php -S 127.0.0.1:8085
```

Le site est accessible sur `http://127.0.0.1:8085/`.
Pour rejouer l'animation de démarrage du logo : `http://127.0.0.1:8085/index.php?replay=1`.

---

## 🌐 Déploiement sur Hébergement Hostinger

1. Connectez-vous à votre panneau de contrôle Hostinger (hPanel).
2. Rendez-vous dans le **Gestionnaire de fichiers** (`public_html`).
3. Téléversez l'ensemble des fichiers à la racine de `public_html`.
4. Le site est immédiatement opérationnel en HTTPS sans configuration serveur complexe.

---

## 📄 Licence & Droits

© Association Humanitaire "LE PETIT NICOLAS" - Tous droits réservés.
