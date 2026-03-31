# ROADMAP - Refonte clibom.com

## Phase 1 — Nettoyage et fondations techniques
- [x] Supprimer l'ancien contenu de `src/` (HTML, JS, SASS, anciennes images)
- [x] Conserver les logos/favicons CLIBOM (SVG)
- [x] Supprimer les scripts FTP (`ftpUpdate.sh`, `ftpUpdate.py`, `.env`)
- [x] Mettre en place la structure de dossiers (`src/fr/`, `src/en/`, `src/assets/`)
- [x] Intégrer Bootstrap 5 via CDN
- [x] Créer le fichier CSS custom de surcharge (`assets/css/custom.css`)
- [x] Vérifier que Docker + Makefile fonctionnent avec la nouvelle structure

## Phase 2 — Template de base
- [x] Créer le layout HTML commun (head, meta, favicon, Open Graph, hreflang)
- [x] Créer le header / navbar (logo, navigation par ancres, sélecteur de langue FR/EN)
- [x] Créer le footer minimaliste (copyright + email)
- [x] Définir la charte graphique CSS (couleurs, espacements, sections, boutons CTA)
- [x] Intégrer Bootstrap JS bundle via CDN (hamburger mobile)
- [x] Valider le responsive (mobile, tablette, desktop)

## Phase 3 — Contenu des sections en français (`fr/index.html`)
- [x] **#accueil** : accroche, proposition de valeur, CTA
- [x] **#approche** : co-construction, engagement de moyens, planification souple, délais indicatifs
- [x] **#apports** : conseil, structuration de projets, développement d'outils
- [x] **#experiences** : clubs, commissions, associations, structures fédératives
- [x] **#cadre** : interventions planifiées, volumes limités, facturation mensuelle, pas d'urgence, transparence
- [x] **#contact** : prise de contact cadrée, email

## Phase 4 — Contenu des sections en anglais (`en/index.html`)
- [x] **#home** : traduction de l'accroche et CTA
- [x] **#approach** : co-construction, best-effort commitment, flexible planning, indicative deadlines
- [x] **#services** : consulting, project structuring, tool development
- [x] **#experience** : clubs, committees, associations, federative structures
- [x] **#framework** : pre-planned interventions, limited capacity, monthly billing, no emergency, transparent terms
- [x] **#contact** : traduction du contact
- [x] Vérifier la cohérence des liens de navigation inter-langues

## Phase 5 — Finitions
- [x] SEO : sitemap.xml, robots.txt
- [x] Accessibilité : contrastes, structure sémantique
- [x] Performance : optimisation des images, vérification du poids des pages
- [x] Validation W3C des pages HTML
- [ ] Tests cross-navigateurs (Chrome, Firefox, Safari, mobile)

## Phase 6 — CI/CD et déploiement
- [x] Créer le workflow GitHub Actions pour le déploiement automatique
- [ ] Configurer l'environnement cible (hébergement OVH ou autre)
- [ ] Tester le pipeline complet (push → deploy)
- [ ] Mise en production
