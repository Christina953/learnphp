<?php include __DIR__ . '/../partials/header.php'; ?>
<?php include __DIR__ . '/../partials/theme-select.php'; ?>
<?php include __DIR__ . '/../partials/nav.php'; ?>

<main class="container">
    <table class="table table-hover table-striped">
        <tbody>
            <tr>
                <th>ID</th>
                <td><?= $post->id ?></td>
            </tr>
            <tr>
                <th>Title</th>
                <td><?= $post->title ?></td>
            </tr>
            <tr>
                <th>Content</th>
                <td><?= $post->body ?></td>
            </tr>

        </tbody>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>