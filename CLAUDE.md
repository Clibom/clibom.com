# CLIBOM.COM - Site Vitrine

## Stratégie d'entreprise

### Positionnement
CLIBOM propose des prestations de conseil et développement informatique **exclusivement destinées aux associations**. C'est une activité secondaire exercée en parallèle d'un client principal.

### Philosophie
- Valentin vient du monde associatif et connaît les réalités du terrain : difficultés financières, dépendance au bénévolat, problèmes d'organisation.
- L'objectif n'est **pas de faire du chiffre** mais d'être réellement utile aux associations.
- L'approche est fondée sur **l'écoute** : comprendre les besoins, co-construire les solutions.
- Chaque projet est **défini ensemble** avec l'association, sans rapport de force.

### Offre de services
- Développement d'outils sur mesure
- Conseil informatique (choix d'outils, organisation, stratégie numérique)
- Accompagnement adapté aux contraintes associatives

### Modèle tarifaire
- Prix volontairement bas pour être accessible aux associations (250-300€ HT/jour, journées de 7h).
- **Le tarif n'est PAS affiché sur le site.** Il varie selon le ressenti et la situation de l'association.
- En contrepartie de ce tarif réduit : l'association **ne peut pas imposer de contraintes de délais ou de temps**. Tout se fait au rythme défini ensemble.

### Valeurs à transmettre sur le site
- Proximité avec le monde associatif
- Transparence et honnêteté
- Collaboration et co-construction
- Accessibilité financière (sans afficher de prix)
- Engagement sincère, pas commercial

---

## Cadrage technique

### Stack
- **HTML pur** : pas de PHP, pas de framework backend, pas de JS
- **CSS** : Bootstrap 5 (CDN)
- **Branding** : logos CLIBOM SVG existants conservés

### Infrastructure
- Docker + Apache (conservé)
- Makefile (conservé)
- Déploiement via **GitHub Actions CI/CD** (remplace l'ancien FTP)

### Structure du projet
```
clibom-com/
├── docker/              # Config Docker Apache
├── src/                 # Contenu du site (HTML + assets)
│   ├── assets/
│   │   ├── css/         # CSS custom (surcharges Bootstrap)
│   │   ├── images/      # Logos, visuels
│   │   └── webfonts/    # Polices icônes
│   ├── fr/              # Pages en français
│   │   └── *.html
│   ├── en/              # Pages en anglais
│   │   └── *.html
│   └── index.html       # Redirection vers /fr/
├── .github/workflows/   # CI/CD GitHub Actions
├── docker-compose.yml
├── Makefile
└── CLAUDE.md
```

### Internationalisation (i18n)
- Le site est **bilingue : français et anglais**.
- Approche : fichiers HTML dupliqués par langue (`/fr/`, `/en/`) — pas de JS pour le switch.
- Un sélecteur de langue visible sur chaque page (lien simple vers l'équivalent dans l'autre langue).
- Le français est la langue par défaut (redirection racine → `/fr/`).

### Contenu du site
Le site doit rester **simple et épuré**, cohérent avec la philosophie d'écoute et de proximité.

**Sections / pages prévues :**
- **Accueil** : accroche, proposition de valeur, appel à l'action
- **Compétences** : présentation marketing des savoir-faire (dev, conseil, accompagnement). Ton orienté bénéfices pour l'association, pas liste technique brute.
- **Références** : projets réalisés, témoignages, associations accompagnées. Preuve sociale et crédibilité.
- **Contact** : moyens de prise de contact

Le découpage exact (one-page vs multi-pages) reste à définir.

### Guidelines visuelles
- Design moderne, sobre et professionnel
- Responsive (mobile-first via Bootstrap 5)
- Pas de surcharge visuelle : aller à l'essentiel
- Ton chaleureux et accessible, pas corporate

### Palette de couleurs (basée sur le logo CLIBOM)
Le logo utilise un dégradé radial de verts. La charte couleur du site s'appuie sur ces nuances :
- **Primaire** : `#7da456` (vert olive moyen — couleur principale du dégradé logo)
- **Primaire clair** : `#a2c750` (vert lime — accroche, accents, CTA)
- **Primaire foncé** : `#345e63` (vert sarcelle — headers, fonds sombres, footer)
- **Neutres** : blanc (`#ffffff`), gris clair (`#f8f9fa`), gris texte (`#333333`)
- Les déclinaisons et nuances doivent rester dans le spectre vert du logo, pas d'autres couleurs vives.

---

## Convention de versioning

Les versions du site suivent le format `vX.Y.Z "NomCapitale"`.
Le nom de version est toujours le nom d'une **capitale mondiale**, choisie par ordre alphabétique ou thématique, sans répétition.

| Version | Nom     |
|---------|---------|
| v1.0.0  | Paris   |