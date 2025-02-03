<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($post->title); ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($post->title); ?></h1>
    <p><?= nl2br(htmlspecialchars($post->body)); ?></p>
    <a href="/admin/posts">Back to Posts</a>
</body>
</html>
