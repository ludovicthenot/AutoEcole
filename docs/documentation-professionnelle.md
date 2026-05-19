# Documentation professionnelle - Gestion des eleves inscrits

## 1. Contexte du projet

Le site web de l auto-ecole devait etre complete par une premiere fonctionnalite de gestion des eleves inscrits.

Avant cette evolution, les informations des eleves n etaient pas stockees en base de donnees. L objectif etait donc de permettre :

- l ajout d un nouvel eleve depuis un formulaire ;
- l enregistrement des informations en base de donnees ;
- la consultation de la liste des eleves enregistres ;
- la verification des champs obligatoires ;
- la connexion simple d un eleve a son compte.

La solution realisee reste volontairement simple afin de respecter le besoin initial.

## 2. Analyse du besoin

Le client souhaite une premiere version fonctionnelle, sans interface d administration complete.

Les informations minimales a stocker sont :

- nom ;
- prenom ;
- email ;
- telephone ;
- type de permis.

Pour permettre a l eleve de se connecter a son compte, deux champs ont ete ajoutes au formulaire :

- mot de passe ;
- confirmation du mot de passe.

Le mot de passe n est pas stocke en clair. Il est chiffre avec `password_hash()` avant insertion en base.

## 3. Choix techniques

Les technologies utilisees sont :

- PHP pour le traitement serveur ;
- MySQL compatible TiDB Cloud pour la base de donnees ;
- PDO pour la connexion a la base ;
- requetes preparees pour l insertion et la recherche d un eleve ;
- `htmlspecialchars()` pour securiser l affichage des donnees ;
- Vercel pour l hebergement ;
- `vercel-php@0.9.0` pour executer les fichiers PHP sur Vercel.

La base de donnees utilisee est TiDB Cloud Starter. Comme TiDB Cloud impose une connexion securisee, la connexion PDO utilise TLS avec un certificat CA.

## 4. Table creee

Nom de la table : `eleves`

| Champ | Type | Role |
| --- | --- | --- |
| `id_eleve` | `INT AUTO_INCREMENT PRIMARY KEY` | Identifiant unique de chaque eleve. |
| `nom` | `VARCHAR(100) NOT NULL` | Nom de famille de l eleve. Champ obligatoire. |
| `prenom` | `VARCHAR(100) NOT NULL` | Prenom de l eleve. Champ obligatoire. |
| `email` | `VARCHAR(150) NOT NULL UNIQUE` | Email de l eleve, utilise pour la connexion. Il doit etre unique. |
| `telephone` | `VARCHAR(20)` | Numero de telephone de l eleve. |
| `type_permis` | `VARCHAR(50)` | Type de permis souhaite. |
| `mot_de_passe` | `VARCHAR(255) NOT NULL` | Mot de passe chiffre avec `password_hash()`. |
| `date_inscription` | `DATE DEFAULT (CURRENT_DATE)` | Date automatique d inscription. |

## 5. Script SQL utilise

Le script SQL est disponible dans le fichier `database/auto_ecole.sql`.

```sql
CREATE DATABASE IF NOT EXISTS auto_ecole
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE auto_ecole;

CREATE TABLE IF NOT EXISTS eleves (
  id_eleve INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  prenom VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  telephone VARCHAR(20),
  type_permis VARCHAR(50),
  mot_de_passe VARCHAR(255) NOT NULL,
  date_inscription DATE DEFAULT (CURRENT_DATE)
);
```

La table est aussi creee automatiquement par `api/db.php` au premier appel PHP si elle n existe pas encore.

## 6. Fichiers crees ou modifies

| Fichier | Role |
| --- | --- |
| `public/formulaire.html` | Formulaire responsive d inscription eleve. |
| `public/connexion.html` | Formulaire responsive de connexion eleve. |
| `api/db.php` | Connexion PDO a TiDB Cloud, configuration TLS et creation automatique de la table. |
| `api/ajouter-eleve.php` | Validation du formulaire, hash du mot de passe et insertion en base. |
| `api/connexion.php` | Verification de l email et du mot de passe, puis ouverture de session. |
| `api/liste-eleves.php` | Affichage de la liste des eleves enregistres. |
| `database/auto_ecole.sql` | Script SQL de creation de la base et de la table. |
| `vercel.json` | Configuration du runtime PHP sur Vercel. |
| `certs/isrgrootx1.pem` | Certificat racine utilise pour la connexion TLS a TiDB Cloud. |
| `src/components/Navbar.vue` | Ajout du lien vers la page de connexion. |
| `src/components/Hero.vue` | Lien d inscription redirige vers `formulaire.html`. |
| `src/components/Services.vue` | Lien d inscription redirige vers `formulaire.html`. |
| `src/components/Documents.vue` | Lien d inscription redirige vers `formulaire.html`. |

## 7. Requetes principales utilisees

### Insertion d un eleve

```sql
INSERT INTO eleves (nom, prenom, email, telephone, type_permis, mot_de_passe)
VALUES (:nom, :prenom, :email, :telephone, :type_permis, :mot_de_passe);
```

Cette requete est preparee avec PDO pour eviter l injection SQL.

### Recherche d un eleve pour la connexion

```sql
SELECT id_eleve, prenom, mot_de_passe
FROM eleves
WHERE email = :email
LIMIT 1;
```

Le mot de passe saisi est ensuite compare au hash stocke avec `password_verify()`.

### Affichage de la liste des eleves

```sql
SELECT id_eleve, nom, prenom, email, telephone, type_permis, date_inscription
FROM eleves
ORDER BY date_inscription DESC, id_eleve DESC;
```

Les donnees affichees sont echappees avec `htmlspecialchars()`.

## 8. Validation et securite

Les controles mis en place sont :

- refus d une inscription sans nom, prenom ou email ;
- verification du format de l email ;
- verification simple du telephone francais si le champ est renseigne ;
- verification d un mot de passe de 6 caracteres minimum ;
- verification de la confirmation du mot de passe ;
- refus d un email deja utilise grace a la contrainte `UNIQUE` ;
- hash du mot de passe avec `password_hash()` ;
- verification de connexion avec `password_verify()` ;
- requetes preparees PDO ;
- affichage securise avec `htmlspecialchars()`.

## 9. Tests realises

| Test | Resultat attendu | Resultat obtenu |
| --- | --- | --- |
| Envoi du formulaire vide | Refus de l inscription | Conforme |
| Nom, prenom ou email manquant | Message d erreur | Conforme |
| Email invalide | Message d erreur | Conforme |
| Telephone invalide | Message d erreur | Conforme |
| Mots de passe differents | Message d erreur | Conforme |
| Mot de passe trop court | Message d erreur | Conforme |
| Inscription valide | Eleve enregistre en base | Conforme |
| Email deja utilise | Refus de l inscription | Conforme |
| Connexion avec bon mot de passe | Message de bienvenue | Conforme |
| Connexion avec mauvais mot de passe | Message d erreur generique | Conforme |
| Affichage de la liste | Donnees visibles dans un tableau | Conforme |
| Caracteres speciaux dans les donnees | Affichage sans execution HTML | Conforme |
| Formulaire sur mobile | Affichage responsive en une colonne | Conforme |

## 10. Difficultes rencontrees

### Connexion TLS obligatoire avec TiDB Cloud

TiDB Cloud Starter refuse les connexions non securisees. Une premiere erreur indiquait que les connexions sans transport securise etaient interdites.

Solution appliquee :

- ajout d une connexion TLS dans `api/db.php` ;
- ajout du certificat racine `certs/isrgrootx1.pem` ;
- utilisation automatique d un certificat CA lisible sur le serveur.

### Table absente dans la base

Une erreur indiquait que la table `auto_ecole.eleves` n existait pas.

Solution appliquee :

- conservation du script SQL dans `database/auto_ecole.sql` ;
- ajout d une creation automatique de la table dans `api/db.php` si elle est absente.

### Deploiement Vercel

Le deploiement a d abord echoue car des fichiers generes comme `node_modules` et `dist` etaient suivis par Git.

Solution appliquee :

- ajout de ces dossiers dans `.gitignore` ;
- retrait de ces dossiers du suivi Git ;
- nouveau push vers GitHub pour relancer le deploiement Vercel.

### Compatibilite PHP 8.5

Des avertissements PHP apparaissaient pour certaines constantes PDO MySQL devenues depreciees.

Solution appliquee :

- utilisation des nouvelles constantes `Pdo\Mysql::*` quand elles sont disponibles ;
- conservation d une compatibilite avec les anciennes constantes.

## 11. Limites de la solution

La solution est volontairement simple. Les limites actuelles sont :

- pas de tableau de bord eleve complet ;
- pas de compte administrateur ;
- pas de modification ou suppression d un eleve ;
- pas de recuperation de mot de passe ;
- pas de verification d email ;
- la page de liste des eleves est simple et non protegee par un espace admin ;
- pas de pagination ou de recherche dans la liste ;
- pas d envoi de mail automatique apres inscription.

## 12. Ameliorations possibles

Les ameliorations futures possibles sont :

- creer un espace administrateur securise ;
- permettre la modification et la suppression des eleves ;
- ajouter une recherche par nom, email ou type de permis ;
- ajouter une pagination si la liste devient longue ;
- proteger la page `liste-eleves.php` avec une connexion admin ;
- ajouter une page profil eleve ;
- ajouter la reinitialisation du mot de passe ;
- envoyer un email de confirmation apres inscription ;
- ajouter des controles plus complets sur le telephone et les donnees saisies ;
- afficher des messages plus ergonomiques dans l interface.

## 13. Pages importantes

- Formulaire d inscription : `/formulaire.html`
- Connexion eleve : `/connexion.html`
- Liste des eleves : `/api/liste-eleves.php`

## 14. Conclusion

La fonctionnalite demandee permet maintenant d enregistrer des eleves dans une base de donnees, de verifier les champs obligatoires, de consulter la liste des eleves inscrits et de permettre a un eleve de se connecter a son compte.

Elle respecte les contraintes demandees : PHP, MySQL compatible TiDB Cloud, PDO, requetes preparees, script SQL fourni et affichage securise avec `htmlspecialchars()`.
