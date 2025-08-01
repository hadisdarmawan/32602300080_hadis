<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= esc($title ?? 'My Page') ?></title>
  <link href="<?= base_url('assets/css/index.css') ?>" rel="stylesheet">
</head>
<body>

  <header>
    <h1 class="header-title">Selamat datang di Web Hadis!</h1>
  </header>

  <nav class="navbar-desktop">
    <ul>
      <li><a href="#">Menu</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Experience</a></li>
    </ul>
  </nav>

  <main class="main-bg">
    <?= $this->renderSection('content') ?>
  </main>

  <footer>
    © WG
  </foo
