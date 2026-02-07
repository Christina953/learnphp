<?php include __DIR__ . '/../partials/header.php'; ?>
<?php include __DIR__ . '/../partials/theme-select.php'; ?>
<?php include __DIR__ . '/../partials/nav.php'; ?>

<main class="container">
    <a href="/posts/create" class="btn btn-primary">Add Post</a>
    <table class="table table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= $post->id ?></td>
                    <td><?= $post->title ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="/posts/view?id=<?= $post->id ?>" class="btn btn-info">View</a>
                            <a href="/posts/edit?id=<?= $post->id ?>" class="btn btn-warning">Edit</a>
                            <a href="/posts/delete?id=<?= $post->id ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>