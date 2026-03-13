# 🚗 Documentation Technique - Auto-École Accident Auto

Ce document détaille l'architecture technique, les choix technologiques et les instructions de maintenance pour le site vitrine de l'auto-école "Accident Auto".

---

## 📋 Table des Matières
1.  [Aperçu du Projet](#aperçu-du-projet)
2.  [Stack Technique](#stack-technique)
3.  [Architecture du Code](#architecture-du-code)
4.  [Fonctionnalités Clés](#fonctionnalités-clés)
5.  [Design System & CSS](#design-system--css)
6.  [Installation et Démarrage](#installation-et-démarrage)
7.  [Déploiement](#déploiement)

---

## 1. Aperçu du Projet <a name="aperçu-du-projet"></a>
Ce projet est une Single Page Application (SPA) moderne développée pour présenter les services, tarifs et informations d'une auto-école. L'objectif principal est la performance, la maintenabilité et une expérience utilisateur fluide sans rechargement de page.

## 2. Stack Technique <a name="stack-technique"></a>

### Cœur du Système
*   **Vue.js 3 (Composition API)** : Framework JavaScript progressif utilisé pour sa réactivité et son système de composants modulaire. L'API de Composition (`<script setup>`) est utilisée pour une meilleure organisation logique du code.
*   **Vite** : Outil de build de nouvelle génération. Il offre un démarrage de serveur quasi-instantané et un Hot Module Replacement (HMR) ultra-rapide grâce à l'utilisation native des modules ES (ESM).

### Routage
*   **Vue Router 4** : Gère la navigation côté client. Il permet de changer de vue sans recharger la page, améliorant ainsi la vitesse perçue par l'utilisateur.

### Styling & UI
*   **CSS Natif (Vanilla)** : Aucun framework CSS lourd (comme Bootstrap ou Tailwind) n'est utilisé. Tout le style est écrit à la main pour garantir un code léger, maîtrisé et sémantique.
*   **CSS Variables (Custom Properties)** : Utilisation intensive de `:root` pour définir le thème (couleurs, espacements, ombres), facilitant les modifications globales.
*   **Lucide Vue Next** : Bibliothèque d'icônes SVG légère et tree-shakable, assurant que seules les icônes utilisées sont incluses dans le bundle final.

---

## 3. Architecture du Code <a name="architecture-du-code"></a>

La structure suit les standards Vue.js :

```
src/
├── assets/          # Images et ressources statiques
├── components/      # Composants Vue réutilisables (blocs de page)
│   ├── Navbar.vue       # Navigation responsive
│   ├── Hero.vue         # Bannière principale
│   ├── Services.vue     # Grille des prestations
│   ├── Contact.vue      # Formulaire complexe avec validation
│   └── ...
├── router/          # Configuration des routes (index.js)
├── views/           # Pages principales (assemblage de composants)
├── style.css        # Styles globaux, variables et resets
├── App.vue          # Composant racine (Layout principal)
└── main.js          # Point d'entrée de l'application
```

### Choix d'Architecture
*   **Composants Atomiques** : Chaque section du site (Hero, Services, Contact) est isolée dans son propre composant. Cela permet de modifier une partie du site sans impacter le reste.
*   **Scoped Styles** : La majorité du CSS est "scoped" dans les composants `.vue` pour éviter les conflits de style (effets de bord).
*   **Global Styles** : Les éléments communs (boutons, titres de section, typographie) sont centralisés dans `style.css` pour assurer une cohérence visuelle.

---

## 4. Fonctionnalités Clés <a name="fonctionnalités-clés"></a>

### Formulaire de Contact Sécurisé (`Contact.vue`)
Le formulaire n'est pas un simple envoi de mail, il intègre plusieurs couches de logique :
1.  **Validation HTML5 Stricte** : Utilisation des attributs `pattern` (Regex), `minlength`, `maxlength` pour valider les données avant même l'envoi.
2.  **Feedback Utilisateur** : Des messages d'erreur contextuels apparaissent via CSS (`:invalid`) uniquement lorsque l'utilisateur a interagi avec le champ.
3.  **Sécurité Anti-Spam (Honeypot)** : Un champ invisible `bot-check` piège les robots qui remplissent aveuglément tous les inputs.
4.  **Captcha Personnalisé** : Un système de captcha généré localement (code aléatoire à recopier) empêche les soumissions automatisées sans dépendre de services tiers lourds comme reCAPTCHA.
5.  **Auto-Reset** : Après un envoi réussi, le formulaire et le captcha se réinitialisent automatiquement.

### Système de Navigation
La barre de navigation (`Navbar.vue`) est entièrement responsive :
*   Sur Desktop : Menu horizontal classique.
*   Sur Mobile : Menu "Burger" qui s'ouvre avec une transition fluide. L'état est géré réactivement avec `ref()`.

---

## 5. Design System & CSS <a name="design-system--css"></a>

Le design repose sur un système de variables CSS définies dans `style.css` :

```css
:root {
  /* Palette de couleurs */
  --primary-color: #1e40af; /* Bleu roi */
  --accent-color: #eab308;  /* Jaune signalétique */
  
  /* Typographie & Espacements */
  --font-main: 'Inter', sans-serif;
  --spacing-md: 1rem;
  
  /* Effets */
  --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
}
```

**Pourquoi ce choix ?**
Cela permet de changer la couleur principale de tout le site en modifiant une seule ligne de code. C'est idéal pour la maintenance ou un futur rebranding.

---

## 6. Installation et Démarrage <a name="installation-et-démarrage"></a>

### Prérequis
*   **Node.js** (version 16.0 ou supérieure)
*   **npm** (gestionnaire de paquets)

### Procédure
1.  **Cloner le projet** (ou extraire l'archive) :
    ```bash
    cd AutoEcole
    ```

2.  **Installer les dépendances** :
    ```bash
    npm install
    ```
    *Cette commande télécharge Vue, Vite et les plugins nécessaires dans le dossier `node_modules`.*

3.  **Lancer le serveur de développement** :
    ```bash
    npm run dev
    ```
    *Le site sera accessible sur `http://localhost:5173` avec rechargement automatique à chaque modification de fichier.*

---

## 7. Déploiement <a name="déploiement"></a>

Pour mettre le site en ligne (production) :

1.  **Compiler le projet** :
    ```bash
    npm run build
    ```
    *Vite va optimiser, minifier et compiler tout le code dans le dossier `/dist`.*

2.  **Hébergement** :
    Le contenu du dossier `/dist` est purement statique (HTML, CSS, JS). Il peut être hébergé sur n'importe quel serveur web :
    *   Apache / Nginx
    *   Vercel / Netlify (recommandé pour les performances)
    *   GitHub Pages

---

*Documentation générée le 13/03/2026 par l'équipe technique.*
