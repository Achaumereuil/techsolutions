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
<body style="display:flex;align-items:center;justify-content:center;height:100vh;background:linear-gradient(180deg,#06050b,#0f1224)">
  <div class="card" style="width:100%;max-width:320px;padding:24px">
    <h1 style="text-align:center;margin-top:0">Administrateur</h1>
    <?php if ($error): ?>
      <p style="color:#ff2fb6;text-align:center"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="post" style="display:flex;flex-direction:column;gap:12px">
      <label>
        Identifiant
        <input type="text" name="username" required style="width:100%;margin-top:6px">
      </label>
      <label>
        Mot de passe
        <input type="password" name="password" required style="width:100%;margin-top:6px">
      </label>
      <button type="submit" class="btn" style="align-self:center">Se connecter</button>
    </form>
  </div>
</body>
</html>