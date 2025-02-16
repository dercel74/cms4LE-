<?php
// posts.php – Beitragsübersicht
// Status: Bearbeitet, Stand: 16.02.2025 10:53 (MEZ) (Aktuelle Uhrzeit Deutschland Berlin)
// Zuletzt: 16.02.2025 10:52 || Heute: 16.02.2025 10:53
// Pfad: /public/posts.php (UID: PUBLIC017)

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user_email = $_SESSION['user'];

// Dummy-Daten für Beiträge
$posts = [
    ['id' => 1, 'title' => 'Beitrag 1', 'content' => 'Dies ist der Inhalt des ersten Beitrags.'],
    ['id' => 2, 'title' => 'Beitrag 2', 'content' => 'Dies ist der Inhalt des zweiten Beitrags.']
];

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beiträge</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <h1>Beitragsübersicht</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titel</th>
                    <th>Inhalt</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?= $post['id']; ?></td>
                        <td><?= $post['title']; ?></td>
                        <td><?= $post['content']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php include('includes/footer.php'); ?>
</body>
</html>
