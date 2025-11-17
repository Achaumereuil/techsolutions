<?php
session_start();
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/auth.php';
require_admin();
require_once __DIR__ . '/includes/header.php';

$pcs = pdo()->query('SELECT id, name, image_url, price FROM pcs ORDER BY id')->fetchAll();
?>

<section class="hero-banner">
  <div class="hero-inner container">
    <div class="hero-copy">
      <h1 class="hero-title">Gestion de parc</h1>
      <p class="hero-desc">Liste complète des postes et leurs composants présents dans le parc.</p>
      <p>
        <a class="secondary" href="index.php">Retour à l'accueil</a>
      </p>
    </div>
    <div class="hero-art" aria-hidden="true"></div>
  </div>
</section>

<h2 class="section-title">Postes du parc</h2>
<section class="grid">
<?php foreach ($pcs as $pc): ?>
  <article class="card">
    <img src="<?= e($pc['image_url']) ?>" alt="Photo de <?= e($pc['name']) ?>">
    <div class="p">
      <h3><?= e($pc['name']) ?></h3>
      <p class="price"><?= number_format((float)$pc['price'], 2, ',', ' ') . ' ' . CURRENCY ?></p>
      <details>
        <summary>Voir les composants</summary>
        <ul>
          <?php
            $stmt = pdo()->prepare('SELECT c.name FROM pc_components pc JOIN components c ON c.id = pc.component_id WHERE pc.pc_id = ?');
            $stmt->execute([(int)$pc['id']]);
            foreach ($stmt->fetchAll() as $row): ?>
              <li><?= e($row['name']) ?></li>
          <?php endforeach; ?>
        </ul>
      </details>
    </div>
  </article>
<?php endforeach; ?>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
