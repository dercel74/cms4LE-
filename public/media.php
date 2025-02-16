<?php
// media.php – Medienverwaltung
// Status: Bearbeitet, Stand: 16.02.2025 10:53 (MEZ) (Aktuelle Uhrzeit Deutschland Berlin)
// Zuletzt: 16.02.2025 10:52 || Heute: 16.02.2025 10:53
// Pfad: /public/media.php (UID: PUBLIC013)

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user_email = $_SESSION['user'];

// Dummy-Daten für Medien
$media_items = [
    ['id' => 1, 'title' => 'Bild 1', 'type' => 'Bild', 'url' => '/media/image1.jpg'],
    ['id' => 2, 'title' => 'Video 1', 'type' => 'Video', 'url' => '/media/video1.mp4']
];

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medienverwaltung</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <h1>Medienverwaltung</h1>
        <p>Hier kannst du deine Medien verwalten.</p>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titel</th>
                    <th>Typ</th>
                    <th>Aktion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($media_items as $item): ?>
                    <tr>
                        <td><?= $item['id']; ?></td>
                        <td><?= $item['title']; ?></td>
                        <td><?= $item['type']; ?></td>
                        <td><a href="<?= $item['url']; ?>">Anzeigen</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php include('includes/footer.php'); ?>
</body>
</html>
