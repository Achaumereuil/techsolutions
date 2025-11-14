<?php require_once __DIR__ . '/../config.php';
$current = basename($_SERVER['SCRIPT_NAME']);
function nav_active($file){ global $current; return $current === $file ? 'active' : ''; }
function nav_aria($file){ global $current; return $current === $file ? ' aria-current="page"' : ''; }
?>
<!doctype html><html lang="fr"><head><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= SITE_NAME ?></title>
<link rel="stylesheet" href="styles.css"></head><body>
<!-- Header + Hero (cyberpunk / neon redesign) -->
<header class="site-header">
  <div class="container">
    <div class="brand">
      <img src="images/logot-s.jpg" alt="<?= SITE_NAME ?> logo" class="logo">
      <span class="name"><?= SITE_NAME ?></span>
    </div>
    <nav class="menu">
      <a href="index.php" class="<?= nav_active('index.php') ?>"<?= nav_aria('index.php') ?>>Accueil</a>
      <a href="services.php" class="<?= nav_active('services.php') ?>"<?= nav_aria('services.php') ?>>Services</a>
      <a href="contact.php" class="<?= nav_active('contact.php') ?>"<?= nav_aria('contact.php') ?>>Contact</a>
    </nav>
  </div>

</header>
<main class="container">
