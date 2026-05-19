<?php
declare(strict_types=1);

require __DIR__ . '/db.php';

function render_message(string $title, string $message, int $status = 200): void
{
    http_response_code($status);
    header('Content-Type: text/html; charset=UTF-8');
    ?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($title) ?></title>
    <style>
      body { font-family: Arial, sans-serif; margin: 0; color: #111; line-height: 1.5; }
      main { width: min(100% - 24px, 720px); margin: 0 auto; padding: 24px 0; }
      a { color: #111; }
    </style>
  </head>
  <body>
    <main>
      <h1><?= e($title) ?></h1>
      <p><?= e($message) ?></p>
      <p><a href="/connexion.html">Se connecter</a> | <a href="/formulaire.html">Retour au formulaire</a></p>
    </main>
  </body>
</html>
    <?php
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    render_message('Methode non autorisee', 'Le formulaire doit etre envoye en POST.', 405);
    exit;
}

$nom = trim($_POST['nom'] ?? '');
$prenom = trim($_POST['prenom'] ?? '');
$email = trim($_POST['email'] ?? '');
$telephone = trim($_POST['telephone'] ?? '');
$typePermis = trim($_POST['type_permis'] ?? '');
$motDePasse = (string) ($_POST['mot_de_passe'] ?? '');
$confirmation = (string) ($_POST['confirmation_mot_de_passe'] ?? '');

$permisAutorises = [
    'Permis B',
    'Conduite accompagnee',
    'Permis AM',
    'Permis moto',
    'Boite automatique',
];

if ($nom === '' || $prenom === '' || $email === '') {
    render_message('Inscription impossible', 'Le nom, le prenom et l email sont obligatoires.', 400);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    render_message('Inscription impossible', 'L adresse email est invalide.', 400);
    exit;
}

if ($telephone !== '' && !preg_match('/^0[1-9][0-9]{8}$/', $telephone)) {
    render_message('Inscription impossible', 'Le telephone doit contenir 10 chiffres sans espaces.', 400);
    exit;
}

if (!in_array($typePermis, $permisAutorises, true)) {
    $typePermis = 'Permis B';
}

if (strlen($motDePasse) < 6) {
    render_message('Inscription impossible', 'Le mot de passe doit contenir au moins 6 caracteres.', 400);
    exit;
}

if ($motDePasse !== $confirmation) {
    render_message('Inscription impossible', 'Les mots de passe ne correspondent pas.', 400);
    exit;
}

try {
    $pdo = get_pdo();
    $stmt = $pdo->prepare(
        'INSERT INTO eleves (nom, prenom, email, telephone, type_permis, mot_de_passe)
         VALUES (:nom, :prenom, :email, :telephone, :type_permis, :mot_de_passe)'
    );

    $stmt->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'telephone' => $telephone !== '' ? $telephone : null,
        'type_permis' => $typePermis,
        'mot_de_passe' => password_hash($motDePasse, PASSWORD_DEFAULT),
    ]);

    render_message('Compte cree', 'Votre compte eleve a bien ete cree. Vous pouvez maintenant vous connecter.');
} catch (PDOException $exception) {
    if ($exception->getCode() === '23000') {
        render_message('Compte deja existant', 'Un compte existe deja avec cet email.', 409);
        exit;
    }

    render_message('Erreur base de donnees', 'Impossible d enregistrer l eleve pour le moment.', 500);
} catch (Throwable $exception) {
    render_message('Erreur configuration', 'Verifiez les variables Vercel de connexion a la base de donnees.', 500);
}
