<?php
// new_thread.php – Neues Forum-Thema erstellen
// Status: Erstellt, Stand: 16.02.2025 00:50 (MEZ)
// Zuletzt/Heute: 16.02.2025 00:50
// Pfad: /public/new_thread.php
// UID: NEWTHREAD013

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include('../includes/header.php');

// Speichern des neuen Forenbeitrags
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('../controllers/forumController.php');
    $title = $_POST['title'];
    $content = $_POST['content'];

    if (create_forum_thread($title, $content)) {
        $success_message = "Thema erfolgreich erstellt!";
    } else {
        $error_message = "Fehler beim Erstellen des Themas!";
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neues Forum Thema</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Neues Forum Thema erstellen</h1>

        <?php if (isset($success_message)): ?>
            <p style="color:green;"><?= $success_message; ?></p>
        <?php endif; ?>

        <?php if (isset($error_message)): ?>
            <p style="color:red;"><?= $error_message; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <label for="title">Titel:</label>
            <input type="text" name="title" required>

            <label for="content">Inhalt:</label>
            <textarea name="content" required></textarea>

            <button type="submit">Thema erstellen</button>
        </form>
    </div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>
