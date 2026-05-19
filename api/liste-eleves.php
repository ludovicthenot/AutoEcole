<?php
declare(strict_types=1);

require __DIR__ . '/db.php';

header('Content-Type: text/html; charset=UTF-8');

try {
    $pdo = get_pdo();
    $stmt = $pdo->query(
        'SELECT id_eleve, nom, prenom, email, telephone, type_permis, date_inscription
         FROM eleves
         ORDER BY date_inscription DESC, id_eleve DESC'
    );
    $eleves = $stmt->fetchAll();
} catch (Throwable $exception) {
    error_log('Erreur liste eleves: ' . $exception->getMessage());
    http_response_code(500);
    $eleves = null;
}
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des eleves</title>
    <style>
      body { font-family: Arial, sans-serif; margin: 0; color: #111; line-height: 1.5; }
      main { width: min(100% - 24px, 980px); margin: 0 auto; padding: 24px 0; }
      a { color: #111; }
      .table-wrap { overflow-x: auto; }
      table { width: 100%; border-collapse: collapse; min-width: 760px; }
      th, td { border: 1px solid #999; padding: 8px; text-align: left; }
      th { background: #f2f2f2; }
    </style>
  </head>
  <body>
    <main>
      <p><a href="/">Retour au site</a></p>
      <h1>Liste des eleves</h1>

      <?php if ($eleves === null): ?>
        <p>Impossible de charger la liste. Verifiez la configuration de la base de donnees.</p>
      <?php elseif (count($eleves) === 0): ?>
        <p>Aucun eleve enregistre pour le moment.</p>
      <?php else: ?>
        <div class="table-wrap">
          <table>
            <thead>
              <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Type de permis</th>
                <th>Date inscription</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($eleves as $eleve): ?>
                <tr>
                  <td><?= e($eleve['nom']) ?></td>
                  <td><?= e($eleve['prenom']) ?></td>
                  <td><?= e($eleve['email']) ?></td>
                  <td><?= e($eleve['telephone']) ?></td>
                  <td><?= e($eleve['type_permis']) ?></td>
                  <td><?= e($eleve['date_inscription']) ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>
    </main>
  </body>
</html>
