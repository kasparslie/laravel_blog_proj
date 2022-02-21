<!DOCTYPE html>
<link rel="stylesheet" href="/app.css">
    <title>my blog</title>
<body>
    <article>
        dd($post)
        <h1><?= $post -> title; ?></h1>

        <div>
            <p><?= $post -> body; ?></p>
        </div>
    </article>

    <a href="/">Go Back</a>
</body>
