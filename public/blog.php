<?php
// blog.php – Blog-Post-Seite
// Status: Erstellt, Stand: 16.02.2025 00:30 (MEZ)
// Zuletzt/Heute: 16.02.2025 00:30
// Pfad: /public/blog.php
// UID: BLOG010

include('../includes/header.php');

// Holen der Blog-Posts aus der Datenbank
include('../models/contentModel.php');
$posts = get_blog_posts();
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Blog-Posts</h1>

        <?php foreach ($posts as $post): ?>
            <div class="post">
                <h2><?= htmlspecialchars($post['title']); ?></h2>
                <p><?= htmlspecialchars($post['content']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>
