<?php include __DIR__ . '/../partials/header.php'; ?>
<?php include __DIR__ . '/../partials/theme-select.php'; ?>
<?php include __DIR__ . '/../partials/nav.php'; ?>

<main class="container">
    <form action="/login" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label> <!-- for ja id peavad olema samad -->
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button class="btn btn-primary">Login</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>