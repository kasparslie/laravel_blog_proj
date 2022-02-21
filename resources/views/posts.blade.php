<!DOCTYPE html>
<link rel="stylesheet" href="/app.css">
    <title>my blog</title>
<body>
    <?php foreach ($posts as $post) : ?>
    <article>
        <h1>
            <a href="/posts/<?= $post -> slug; ?>">
            <?= $post -> title; ?>
            </a>
        </h1>

        <div>
            <p><?= $post -> excerpt; ?><p>
        </div>
    </article>
    <?php endforeach; ?>

</body>
