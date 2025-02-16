<?php
// content.php – Inhaltserstellungsseite (WYSIWYG)
// Status: Bearbeitet, Stand: 16.02.2025 23:30 (MEZ) (Aktuelle Uhrzeit Deutschland Berlin)
// Zuletzt/Heute: 16.02.2025 23:30
// Pfad: /public/content.php (UID: PUBLIC005)

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $content_title = $_POST['title'];
    $content_body = $_POST['body'];

    // Inhalt speichern
    save_content($content_title, $content_body);
}

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inhalt erstellen</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <h1>Inhalt erstellen</h1>

        <form method="POST" action="">
            <label for="title">Titel:</label>
            <input type="text" name="title" required>

            <label for="body">Inhalt:</label>
            <textarea name="body" required></textarea>

            <button type="submit">Speichern</button>
        </form>
    </div>

    <?php include('includes/footer.php'); ?>
</body>
</html>
