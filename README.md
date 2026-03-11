# Accident Auto - Site Web

Bienvenue sur le dépôt du site web de l'auto-école **Accident Auto**.
Ce projet est une application web moderne développée avec **Vue.js**, conçue pour présenter les offres de l'auto-école, les tarifs, et faciliter l'inscription des élèves.

##  Prérequis

Avant de commencer, assurez-vous d'avoir installé **Node.js** sur votre ordinateur.
- Télécharger Node.js : [https://nodejs.org/](https://nodejs.org/)

##  Installation

1.  **Récupérez le projet** (si ce n'est pas déjà fait) :
    Décompressez le dossier du projet ou clonez le dépôt.

2.  **Ouvrez un terminal** dans le dossier du projet :
    ```bash
    cd chemin/vers/le/dossier/AutoEcole
    ```

3.  **Installez les dépendances** :
    Cette commande va télécharger toutes les librairies nécessaires (Vue.js, Lucide, etc.) pour faire fonctionner le site.
    ```bash
    npm install
    ```

##  Lancement (Mode Développement)

Pour lancer le site en local sur votre ordinateur et voir les modifications en temps réel :

```bash
npm run dev
```

Une fois la commande lancée, le terminal affichera une adresse locale (généralement `http://localhost:5173/`). Ouvrez ce lien dans votre navigateur web pour voir le site.

## Mise en Production

Si vous souhaitez déployer le site sur un serveur web réel :

1.  **Construisez le projet** :
    ```bash
    npm run build
    ```
    Cela va créer un dossier `dist/` contenant les fichiers optimisés et prêts à être mis en ligne.

2.  **Prévisualisez le résultat** (optionnel) :
    ```bash
    npm run preview
    ```

##  Technologies Utilisées

-   **Vue.js 3** : Framework JavaScript pour l'interface utilisateur.
-   **Vite** : Outil de construction rapide.
-   **CSS Standard** : Styles personnalisés sans framework lourd (pour une performance maximale).
-   **Lucide Vue** : Bibliothèque d'icônes vectorielles.

##  Auteur

Projet réalisé par **Ludovic Thenot** (Étudiant en BTS SIO SLAM).
