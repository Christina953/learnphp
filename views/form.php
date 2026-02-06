<?php include __DIR__ . '/partials/header.php'; ?>
<?php include __DIR__ . '/partials/theme-select.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>

<main class="container">
  <h1>Tere <?= $name ?>, <?= $ryhm ?> õpilane!</h1>
  <form>
    <input name="name" type="text"> <!-- infol mida saadad peab olema nimetus, lisataks query parameetritena url ribale -->
    <input name="ryhm" type="text">
    <button>Send</button>
    <input type="submit" value="Saada"> <!-- teine võimalus nö nuppu lisada -->
  </form>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>