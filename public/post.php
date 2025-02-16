<?php
// post.php – Einzelner Forenbeitrag im CMS
// Status: Bearbeitet, Stand: 16.02.2025 00:35 (MEZ)
// Zuletzt/Heute: 16.02.2025 00:35
// Pfad: /public/post.php (UID: 1a2b3c59)

include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS4Less - Forenbeitrag</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="post-container">
        <h1>Forenbeitrag 1</h1>
        <p><strong>Autor:</strong> Max Mustermann</p>
        <p>Dies ist ein Beispielbeitrag im Forum.</p>

        <div class="comment-section">
            <h2>Kommentare</h2>
            <form action="save_comment.php" method="POST">
                <textarea name="comment" placeholder="Kommentar schreiben..." required></textarea>
                <button type="submit" class="btn">Kommentar hinzufügen</button>
            </form>

            <div class="comment-list">
                <p><strong>Kommentar von User123:</strong> Sehr interessante Diskussion!</p>
                <p><strong>Kommentar von User456:</strong> Ich stimme zu, tolle Themen!</p>
            </div>
        </div>

        <footer>
            <p>© 2025 CMS4Less. Alle Rechte vorbehalten.</p>
        </footer>
    </div>
</body>
</html>
