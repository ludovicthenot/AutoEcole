<?php
declare(strict_types=1);

require __DIR__ . '/db.php';

function render_login_message(string $title, string $message, int $status = 200): void
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
      <p><a href="/connexion.html">Retour connexion</a> | <a href="/">Retour au site</a></p>
    </main>
  </body>
</html>
    <?php
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    render_login_message('Methode non autorisee', 'Le formulaire doit etre envoye en POST.', 405);
    exit;
}

$email = trim($_POST['email'] ?? '');
$motDePasse = (string) ($_POST['mot_de_passe'] ?? '');

if ($email === '' || $motDePasse === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    render_login_message('Connexion impossible', 'Email ou mot de passe incorrect.', 400);
    exit;
}

try {
    $pdo = get_pdo();
    $stmt = $pdo->prepare(
        'SELECT id_eleve, prenom, mot_de_passe
         FROM eleves
         WHERE email = :email
         LIMIT 1'
    );
    $stmt->execute(['email' => $email]);
    $eleve = $stmt->fetch();

    if (!$eleve || !password_verify($motDePasse, $eleve['mot_de_passe'])) {
        render_login_message('Connexion impossible', 'Email ou mot de passe incorrect.', 401);
        exit;
    }

    session_start();
    session_regenerate_id(true);
    $_SESSION['id_eleve'] = $eleve['id_eleve'];

    render_login_message('Connexion reussie', 'Bonjour ' . $eleve['prenom'] . ', vous etes connecte a votre compte.');
} catch (Throwable $exception) {
    render_login_message('Erreur configuration', 'Verifiez les variables Vercel de connexion a la base de donnees.', 500);
}
