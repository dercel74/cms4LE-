<?php
// Pfad: /public/search_results.php (UID: sr135790)
// Status: Neu, erstellt am 16.02.2025

require_once '../controllers/searchController.php';

$searchQuery = isset($_GET['q']) ? $_GET['q'] : '';
$searchController = new SearchController();
$results = $searchController->search($searchQuery);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Suchergebnisse</title>
</head>
<body>
    <h1>Suchergebnisse für: <?php echo htmlspecialchars($searchQuery); ?></h1>
    <ul>
        <?php foreach ($results as $result): ?>
            <li><?php echo htmlspecialchars($result); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
