<?php
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/header.php';
?>
<!-- Hero banner -->
<section class="hero-banner">
  <div class="hero-inner container">
    <div class="hero-copy">
      <h1 class="hero-title">TechSolutions — Services informatiques sur mesure</h1>
      <p class="hero-desc"><?= SITE_DESCRIPTION ?></p>
    </div>
    <div class="hero-art" aria-hidden="true"></div>
  </div>
</section>

<!-- Informations générales & Présentation -->
<section id="about" class="container">
  <div class="card">
    <h2>Informations générales</h2>
    <p><strong>Nom :</strong> TechSolutions</p>
    <p><strong>Secteur :</strong> Services informatiques</p>
    <p><strong>Adresse :</strong> 12 rue des Innovateurs, 19100 Brive-la-Gaillarde</p>
    <p><strong>Contact :</strong> Mme Anna LISE (Directrice des Opérations)</p>
  </div>

  <div class="card" style="margin-top:24px">
    <h2>Présentation de l'entreprise</h2>
    <p>TechSolutions est une entreprise de services informatiques composée de plusieurs départements :</p>
    <ul style="line-height:1.6;">
      <li><strong>Développement logiciel</strong> (15 personnes) — Création et maintenance de logiciels sur mesure.</li>
      <li><strong>Infrastructures systèmes &amp; réseau</strong> (5 personnes) — Mise en place des réseaux, serveurs et infrastructures.</li>
      <li><strong>Design UX/UI</strong> (5 personnes) — Création d'interfaces modernes, esthétiques et ergonomiques.</li>
      <li><strong>Marketing &amp; Vente</strong> (10 personnes) — Stratégie commerciale, communication et relation client.</li>
      <li><strong>Support client</strong> (5 personnes) — Assistance technique et accompagnement des clients.</li>
      <li><strong>Ressources humaines &amp; administration</strong> (5 personnes) — Gestion du personnel, recrutement, fichiers administratifs.</li>
      <li><strong>Direction</strong> (5 personnes) — Stratégie globale et gestion de l'entreprise.</li>
    </ul>
  </div>
</section>

<!-- Services -->
<section id="services" class="container">
  <h2 class="section-title">Nos services</h2>
  <div class="grid">
    <article class="card">
      <div class="p">
        <h3>Développement logiciel</h3>
        <p>Création et maintenance de logiciels sur mesure adaptés à vos besoins spécifiques.</p>
        <ul style="line-height:1.5;">
          <li>Applications web et mobiles</li>
          <li>Logiciels métier</li>
          <li>Intégrations système</li>
          <li>Maintenance évolutive</li>
        </ul>
      </div>
    </article>

    <article class="card">
      <div class="p">
        <h3>Réseau & infrastructures</h3>
        <p>Mise en place, configuration et maintenance de vos réseaux et serveurs.</p>
        <ul style="line-height:1.5;">
          <li>Conception réseau</li>
          <li>Déploiement de serveurs</li>
          <li>Cloud et virtualisation</li>
          <li>Support infrastructure</li>
        </ul>
      </div>
    </article>

    <article class="card">
      <div class="p">
        <h3>Design UX/UI</h3>
      </div>
    </article>

    <article class="card">
      <div class="p">
        <h3>Support client</h3>
        <p>Assistance technique continue pour l'accompagnement et la résolution de vos problématiques.</p>
      </div>
    </article>

    <article class="card">
      <div class="p">
        <h3>Marketing digital</h3>
        <p>Stratégie commerciale et communication pour votre présence en ligne.</p>
      </div>
    </article>

    <article class="card">
      <div class="p">
        <h3>Solutions matériel</h3>
        <p>Configurations PC et équipements adaptés à vos besoins professionnels.</p>
      </div>
    </article>
  </div>
</section>

<!-- Valeurs -->
<section id="values" class="container">
  <h2 class="section-title">Nos valeurs</h2>
  <div class="card">
    <h3>Culture inclusive</h3>
    <p>Nous favorisons un environnement de travail ouvert et respectueux, où la diversité est valorisée et où chaque employé peut s'épanouir.</p>
    <h3>Soutien aux personnes en situation de handicap</h3>
    <p>TechSolutions met en place des politiques et des ressources pour accueillir et accompagner les personnes en situation de handicap, avec des formations dédiées et un accompagnement personnalisé.</p>
    <h3>Accessibilité des postes</h3>
    <p>Nous adaptons les postes de travail, notamment pour le personnel ayant un handicap visuel : logiciels adaptés, périphériques spécialisés et procédures ergonomiques.</p>
  </div>
</section>

<!-- Objectifs du site -->
<section id="objectives" class="container">
  <div class="card">
    <h2>Objectifs du site</h2>
    <ul style="line-height:1.6;">
      <li>Présenter l'entreprise et ses services</li>
      <li>Afficher les actualités</li>
      <li>Offrir une interface administrateur (modification des données, compatible RGPD)</li>
      <li>Permettre aux clients de modifier leurs données personnelles (RGPD)</li>
    </ul>
  </div>
</section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
