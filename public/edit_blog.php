<?php
// edit_blog.php – Blog-Erstellungsseite des CMS
// Status: Bearbeitet, Stand: 16.02.2025 00:25 (MEZ)
// Zuletzt/Heute: 16.02.2025 00:25
// Pfad: /public/edit_blog.php (UID: 1a2b3c58)

include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS4Less - Blog Erstellen</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="edit-blog-container">
        <h1>Blogbeitrag Erstellen</h1>
        <form action="save_blog.php" method="POST">
            <label for="title">Titel</label>
            <input type="text" id="title" name="title" required>

            <label for="content">Inhalt</label>
            <textarea id="content" name="content" rows="10" required></textarea>

            <button type="submit" class="btn">Speichern</button>
        </form>

        <footer>
            <p>© 2025 CMS4Less. Alle Rechte vorbehalten.</p>
        </footer>
    </div>
</body>
</html>
