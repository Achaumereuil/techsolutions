<?php
// includes/auth.php - Simple admin authentication
require_once __DIR__ . '/../config.php';

// Hard-coded credentials (for demo; use DB in production)
define('ADMIN_USER', 'Techsolutions');
define('ADMIN_PASS', 'Tech@1234'); // Change this!

function is_admin_logged_in() {
  return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

function require_admin() {
  if (!is_admin_logged_in()) {
    header('Location: admin-login.php?redirect=' . urlencode($_SERVER['REQUEST_URI']));
    exit;
  }
}

function admin_login($user, $pass) {
  if ($user === ADMIN_USER && $pass === ADMIN_PASS) {
    $_SESSION['admin_logged_in'] = true;
    return true;
  }
  return false;
}

function admin_logout() {
  unset($_SESSION['admin_logged_in']);
  session_destroy();
}
