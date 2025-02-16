<?php
// forum.php – Forenübersicht des CMS
// Status: Bearbeitet, Stand: 16.02.2025 00:00 (MEZ)
// Zuletzt/Heute: 16.02.2025 00:00
// Pfad: /public/forum.php (UID: 1a2b3c56)

include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS4Less - Forum</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="forum-container">
        <h1>Forum</h1>
        <p>Diskutieren Sie mit anderen Mitgliedern!</p>

        <div class="forum-list">
            <a href="post.php?id=1" class="forum-post">Beitrag 1</a>
            <a href="post.php?id=2" class="forum-post">Beitrag 2</a>
            <a href="post.php?id=3" class="forum-post">Beitrag 3</a>
        </div>

        <footer>
            <p>© 2025 CMS4Less. Alle Rechte vorbehalten.</p>
        </footer>
    </div>
</body>
</html>
