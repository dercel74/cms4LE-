<?php
// blog.php – Blog-Verwaltung des CMS
// Status: Bearbeitet, Stand: 16.02.2025 00:15 (MEZ)
// Zuletzt/Heute: 16.02.2025 00:15
// Pfad: /public/blog.php (UID: 1a2b3c57)

include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS4Less - Blog-Verwaltung</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="blog-container">
        <h1>Blog-Verwaltung</h1>
        <p>Verwalten Sie Ihre Blog-Beiträge hier.</p>

        <div class="blog-list">
            <a href="edit_blog.php?id=1" class="blog-post">Blogbeitrag 1</a>
            <a href="edit_blog.php?id=2" class="blog-post">Blogbeitrag 2</a>
            <a href="edit_blog.php?id=3" class="blog-post">Blogbeitrag 3</a>
        </div>

        <footer>
            <p>© 2025 CMS4Less. Alle Rechte vorbehalten.</p>
        </footer>
    </div>
</body>
</html>
