<?php
// dashboard.php – Admin Dashboard
// Status: In Bearbeitung, Stand: 16.02.2025 12:30 (MEZ)
// Zuletzt: 16.02.2025 12:30 || Heute: 16.02.2025 12:30
// Pfad: /public/dashboard.php (UID: 6f2b3c4d)

session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

// Beispiel-Daten für Dashboard
$forums_count = 5; // Beispielwert
$posts_count = 12; // Beispielwert
$users_count = 25; // Beispielwert

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - CMS4Le$$</title>
</head>
<body>
    <h1>Willkommen im Admin Dashboard</h1>
    <p>Übersicht der wichtigsten Statistiken:</p>
    <ul>
        <li>Foren: <?php echo $forums_count; ?></li>
        <li>Beiträge: <?php echo $posts_count; ?></li>
        <li>Benutzer: <?php echo $users_count; ?></li>
    </ul>
</body>
</html>
