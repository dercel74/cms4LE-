<?php
// thread.php – Anzeige eines einzelnen Threads
// Status: Erstellt, Stand: 16.02.2025 01:15 (MEZ)
// Zuletzt/Heute: 16.02.2025 01:15
// Pfad: /public/thread.php
// UID: THREAD016

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include('../includes/header.php');

// Holen des Threads aus der Datenbank
include('../models/forumModel.php');
$thread_id = $_GET['id'];
$thread = get_forum_thread($thread_id);

// Holen der Kommentare zu diesem Thread
$comments = get_thread_comments($thread_id);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($thread['title']); ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1><?= htmlspecialchars($thread['title']); ?></h1>
        <p><?= htmlspecialchars($thread['content']); ?></p>
        <p>Erstellt von: <?= htmlspecialchars($thread['author']); ?></p>

        <h2>Kommentare</h2>

        <?php foreach ($comments as $comment): ?>
            <div class="comment">
                <p><?= htmlspecialchars($comment['content']); ?></p>
                <p>Kommentiert von: <?= htmlspecialchars($comment['author']); ?></p>
            </div>
        <?php endforeach; ?>

        <form method="POST" action="comment.php">
            <textarea name="comment" required></textarea>
            <button type="submit">Kommentar hinzufügen</button>
        </form>
    </div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>
