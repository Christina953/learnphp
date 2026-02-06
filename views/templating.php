<?php include __DIR__ . '/partials/header.php'; ?>
<?php include __DIR__ . '/partials/theme-select.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>

<main class="container">
  <h1>Tere <?= $name ?>, <?= $ryhm ?> õpilane!</h1> <!-- ?php echo lühemalt -->
  <ul>
    <?php for ($i = 0; $i < 10; $i++): ?> <!-- : ja end vähendavad looksulge -->
      <?php if ($i % 2): ?>
        <li class="bg-success-subtle"><?= $i ?></li>
      <?php else: ?>
        <li><?= $i ?></li>
      <?php endif ?>
    <?php endfor ?>
  </ul>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>