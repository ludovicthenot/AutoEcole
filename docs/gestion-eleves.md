# Gestion des eleves inscrits

## Objectif

Cette fonctionnalite permet d enregistrer des eleves dans une base MySQL compatible TiDB Cloud, puis de permettre a un eleve de se connecter avec son email et son mot de passe.

## Fichiers crees ou modifies

- `public/formulaire.html` : formulaire d inscription simple et responsive.
- `public/connexion.html` : formulaire de connexion simple et responsive.
- `api/db.php` : connexion PDO a la base de donnees.
- `api/ajouter-eleve.php` : validation et insertion d un eleve.
- `api/connexion.php` : verification du mot de passe et message de connexion.
- `api/liste-eleves.php` : affichage des eleves enregistres.
- `database/auto_ecole.sql` : script SQL de creation de la base et de la table.
- `vercel.json` : activation du runtime PHP pour Vercel.

## Table SQL

La table `eleves` contient les champs suivants :

- `id_eleve` : identifiant unique de l eleve.
- `nom` : nom de l eleve, obligatoire.
- `prenom` : prenom de l eleve, obligatoire.
- `email` : email de connexion, obligatoire et unique.
- `telephone` : telephone de l eleve.
- `type_permis` : permis souhaite.
- `mot_de_passe` : mot de passe hashe avec `password_hash()`.
- `date_inscription` : date d inscription.

## Variables Vercel

Ajouter ces variables dans Vercel, dans les parametres du projet :

- `DB_HOST`
- `DB_PORT` avec `4000` pour TiDB Cloud si aucune autre valeur n est indiquee.
- `DB_NAME`
- `DB_USER`
- `DB_PASSWORD`

Optionnel si votre base demande un certificat SSL :

- `DB_SSL_CA`

## Tests a realiser

- Envoyer un formulaire vide : l inscription doit etre refusee.
- Envoyer deux mots de passe differents : l inscription doit etre refusee.
- Envoyer un email invalide : l inscription doit etre refusee.
- Creer un compte valide : l eleve doit etre stocke en base.
- Creer un compte avec un email deja utilise : l inscription doit etre refusee.
- Se connecter avec le bon mot de passe : un message de bienvenue doit s afficher.
- Se connecter avec un mauvais mot de passe : la connexion doit etre refusee.
- Ouvrir `/api/liste-eleves.php` : la liste doit afficher les eleves en echappant les donnees avec `htmlspecialchars()`.
