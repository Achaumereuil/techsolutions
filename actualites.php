<?php require_once __DIR__ . '/includes/header.php'; ?>

<section class="hero-banner">
  <div class="hero-inner container">
    <div class="hero-copy">
      <h1 class="hero-title">Actualités</h1>
      <p class="hero-desc">Dernières nouvelles et annonces de TechSolutions</p>
    </div>
    <div class="hero-art" aria-hidden="true"></div>
  </div>
</section>

<main class="container">
  <section class="card"><div class="p"><h2>TechSolutions lance un nouveau service de développement sur-mesure</h2><p class="small">Publié le <?= date('d/m/Y') ?></p><p>Nous sommes heureux d'annoncer le lancement d'une offre renforcée pour le développement d'applications métier et solutions sur-mesure, incluant support et maintenance.</p></div></section>
  <section class="card"><div class="p"><h2>Mise à jour : meilleures pratiques RGPD pour nos clients</h2><p class="small">Publié le <?= date('d/m/Y', strtotime('-7 days')) ?></p><p>TechSolutions améliore ses processus pour permettre aux clients de gérer facilement leurs données personnelles conformément au RGPD.</p></div></section>
  <section class="card"><div class="p"><h2>Projets récents : solutions réseau et cybersécurité</h2><p class="small">Publié le <?= date('d/m/Y', strtotime('-30 days')) ?></p><p>Nos équipes infrastructures ont déployé plusieurs projets de sécurisation réseau et migration cloud pour des clients locaux.</p></div></section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
