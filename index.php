<?php
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/header.php';
?>
<!-- Hero banner inspired by the provided cyberpunk image -->
<section class="hero-banner">
  <div class="hero-inner container">
    <div class="hero-copy">
      <h1 class="hero-title">TechSolutions — PC performants pour professionnels et gamers</h1>
      <p class="hero-desc"><?= SITE_DESCRIPTION ?></p>
      <p>
        <a class="cta" href="services.php">Voir nos offres</a>
        <a class="secondary" href="contact.php">Nous contacter</a>
      </p>
    </div>
    <div class="hero-art" aria-hidden="true"></div>
  </div>
</section>

<p class="hero-desc">Consultez la <a href="gestion-de-parc.php">page de gestion de parc</a> pour la liste complète des postes et leurs composants.</p>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
