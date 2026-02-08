# ROADMAP - Refonte clibom.com

## Phase 1 — Nettoyage et fondations techniques
- [ ] Supprimer l'ancien contenu de `src/` (HTML, JS, SASS, anciennes images)
- [ ] Conserver les logos/favicons CLIBOM (SVG)
- [ ] Supprimer les scripts FTP (`ftpUpdate.sh`, `ftpUpdate.py`, `.env`)
- [ ] Mettre en place la structure de dossiers (`src/fr/`, `src/en/`, `src/assets/`)
- [ ] Intégrer Bootstrap 5 via CDN
- [ ] Créer le fichier CSS custom de surcharge (`assets/css/custom.css`)
- [ ] Vérifier que Docker + Makefile fonctionnent avec la nouvelle structure

## Phase 2 — Template de base
- [ ] Créer le layout HTML commun (head, meta, favicon)
- [ ] Créer le header / navbar (logo, navigation, sélecteur de langue FR/EN)
- [ ] Créer le footer (mentions légales, contact, liens)
- [ ] Définir la charte graphique CSS (couleurs, typographie, espacements)
- [ ] Valider le responsive (mobile, tablette, desktop)

## Phase 3 — Pages en français
- [ ] **Accueil** (`fr/index.html`) : accroche, proposition de valeur, appel à l'action
- [ ] **Compétences** (`fr/competences.html`) : présentation marketing des savoir-faire
- [ ] **Références** (`fr/references.html`) : projets réalisés, témoignages
- [ ] **Contact** (`fr/contact.html`) : informations de contact
- [ ] Redirection racine (`src/index.html` → `/fr/`)

## Phase 4 — Pages en anglais
- [ ] **Home** (`en/index.html`) : traduction de l'accueil
- [ ] **Skills** (`en/skills.html`) : traduction des compétences
- [ ] **References** (`en/references.html`) : traduction des références
- [ ] **Contact** (`en/contact.html`) : traduction du contact
- [ ] Vérifier la cohérence des liens de navigation inter-langues

## Phase 5 — Finitions
- [ ] SEO : balises meta (title, description, og:), sitemap.xml, robots.txt
- [ ] Accessibilité : attributs alt, aria, contrastes, structure sémantique
- [ ] Performance : optimisation des images, vérification du poids des pages
- [ ] Validation W3C des pages HTML
- [ ] Tests cross-navigateurs (Chrome, Firefox, Safari, mobile)

## Phase 6 — CI/CD et déploiement
- [ ] Créer le workflow GitHub Actions pour le déploiement automatique
- [ ] Configurer l'environnement cible (hébergement OVH ou autre)
- [ ] Tester le pipeline complet (push → deploy)
- [ ] Mise en production