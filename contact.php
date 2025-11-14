<?php require_once __DIR__ . '/includes/header.php';
$sent=false;$name=$_POST['name']??'';$email=$_POST['email']??'';$message=$_POST['message']??'';
if($_SERVER['REQUEST_METHOD']==='POST' && $name!=='' && $email!=='' && $message!==''){ $sent=true; }
function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
?>

<!-- Hero for Contact -->
<section class="hero-banner">
  <div class="hero-inner container">
    <div class="hero-copy">
      <h1 class="hero-title">Contactez-nous</h1>
      <p class="hero-desc">Une question ? Une demande de devis ? Laissez-nous un message et nous vous répondrons rapidement.</p>
    </div>
    <div class="hero-art" aria-hidden="true"></div>
  </div>
</section>

<main class="container">
  <?php if($sent): ?><p class="card">Merci <?= e($name) ?> ! (envoi factice)</p><?php endif; ?>

  <section style="max-width:720px;margin:18px 0;">
    <form method="post" class="card card--form">
      <p><label>Nom<br><input name="name" required value="<?= e($name) ?>"></label></p>
      <p><label>Email<br><input type="email" name="email" required value="<?= e($email) ?>"></label></p>
      <p><label>Message<br><textarea name="message" rows="6" required><?= e($message) ?></textarea></label></p>
      <p><button type="submit" class="btn">Envoyer</button> <button type="reset" class="btn secondary">Effacer</button></p>
    </form>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
