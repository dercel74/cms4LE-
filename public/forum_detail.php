<?php
// forum_detail.php – Forum-Details und Beiträge
// Status: Erstellt, Stand: 16.02.2025 02:20 (MEZ)
// Zuletzt/Heute: 16.02.2025 02:20
// Pfad: /public/forum_detail.php
// UID: FORUMDETAIL026

session_start();

if (!isset($_GET['id'])) {
    header("Location: forums.php");
    exit();
}

include('../controllers/forumController.php');
$forum = get_forum_details($_GET['id']);

if (!$forum) {
    header("Location: forums.php");
    exit();
}

include('../includes/header.php');
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum: <?= $forum['title']; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1><?= $forum['title']; ?></h1>
        <p><?= $forum['description']; ?></p>
        <p>Erstellt am: <?= $forum['created_at']; ?></p>

        <a href="create_post.php?forum_id=<?= $forum['id']; ?>" class="btn">Beitrag erstellen</a>

        <!-- Beiträge könnten hier angezeigt werden -->
    </div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>
