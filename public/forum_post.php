<?php
// forum_post.php – Beitrag im Forum anzeigen
// Status: Erstellt, Stand: 16.02.2025 03:15 (MEZ)
// Zuletzt/Heute: 16.02.2025 03:15
// Pfad: /public/forum_post.php
// UID: FORUMPOST036

session_start();

include('../controllers/postController.php');

$post_id = $_GET['id'];  // Beitrag-ID aus der URL holen
$post = get_post_by_id($post_id);  // Beitrag aus der Datenbank holen

include('../includes/header.php');
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beitrag ansehen</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Beitrag anzeigen</h1>

        <div class="post">
            <h2><?= nl2br($post['content']); ?></h2>
            <p><small>Verfasser: <?= $post['user_id']; ?> | Erstellt am: <?= $post['created_at']; ?></small></p>
        </div>
    </div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>
