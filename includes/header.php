<?php require_once __DIR__ . '/../config.php';
$current = basename($_SERVER['SCRIPT_NAME']);
function nav_active($file){ global $current; return $current === $file ? 'active' : ''; }
function nav_aria($file){ global $current; return $current === $file ? ' aria-current="page"' : ''; }
?>
<!doctype html><html lang="fr"><head><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= SITE_NAME ?></title>
<meta name="description" content="<?= SITE_DESCRIPTION ?>">
<meta name="keywords" content="IT, développement, cybersécurité, UX, support, TechSolutions">
<link rel="stylesheet" href="styles.css">
  <!-- Favicon / tab logo -->
  <link rel="icon" type="image/png" sizes="32x32" href="images/Logo_TS.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/Logo_TS.png">
  <link rel="shortcut icon" href="images/Logo_TS.png" />
</head><body>
<!-- Header + Hero (cyberpunk / neon redesign) -->
<header class="site-header">
  <div class="container">
    <div class="brand">
      <img src="images/Logo_TS.png" alt="<?= SITE_NAME ?> logo" class="logo" loading="lazy">
      <span class="name"><?= SITE_NAME ?></span>
    </div>
    <nav class="menu">
      <a href="index.php" class="<?= nav_active('index.php') ?>"<?= nav_aria('index.php') ?>>Accueil</a>
      <a href="actualites.php" class="<?= nav_active('actualites.php') ?>"<?= nav_aria('actualites.php') ?>>Actualités</a>
      <a href="contact.php" class="<?= nav_active('contact.php') ?>"<?= nav_aria('contact.php') ?>>Contact</a>
      <a href="gestion-de-parc.php" class="<?= nav_active('gestion-de-parc.php') ?>"<?= nav_aria('gestion-de-parc.php') ?>>Gestion de parc</a>
    </nav>
  </div>

</header>
<main class="container">
