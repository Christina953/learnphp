<?php include __DIR__ . '/../partials/header.php'; ?>
<?php include __DIR__ . '/../partials/theme-select.php'; ?>
<?php include __DIR__ . '/../partials/nav.php'; ?>

<main class="container">
    <form action="/posts/edit?id=<?= $post->id ?>" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label> <!-- for ja id peavad olema samad -->
            <input name="title" value="<?= $post->title ?>" type="text" class="form-control" id="title" placeholder="Some title ...">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea name="body" class="form-control" id="body" rows="3"><?= $post->title ?></textarea>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>