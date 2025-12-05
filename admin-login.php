<?php
session_start();
require_once __DIR__ . '/includes/auth.php';

$error = '';
$redirect = $_GET['redirect'] ?? 'gestion-de-parc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = $_POST['username'] ?? '';
  $pass = $_POST['password'] ?? '';
  
  if (admin_login($user, $pass)) {
    header('Location: ' . $redirect);
    exit;
  } else {
    $error = 'Identifiant ou mot de passe incorrect.';
  }
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Connexion Administrateur — TechSolutions</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="auth-page">
  <div class="card auth-card">
    <h1 class="center-title">Administrateur</h1>
    <?php if ($error): ?><p class="error-text"><?= htmlspecialchars($error) ?></p><?php endif; ?>
    <form method="post" class="form-column">
      <label>Identifiant<input type="text" name="username" required></label>
      <label>Mot de passe<input type="password" name="password" required></label>
      <button type="submit" class="btn center-btn">Se connecter</button>
    </form>
  </div>
</body>
</html>