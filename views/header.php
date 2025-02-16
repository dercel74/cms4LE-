<?php
// header.php – Header-Datei für die gesamte Anwendung
// Status: Bearbeitet, Stand: 16.02.2025 11:15 (MEZ)
// Zuletzt: 16.02.2025 11:15 || Heute: 16.02.2025 11:15
// Pfad: /views/header.php (UID: 4a5b9f2c)

session_start();

echo '<!DOCTYPE html>';
echo '<html lang="de">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Projektname</title>';
echo '<link rel="stylesheet" href="assets/styles.css">';
echo '</head>';
echo '<body>';

echo '<header>';
echo '<nav>';
echo '<ul>';
echo '<li><a href="index.php">Home</a></li>';
echo '<li><a href="dashboard.php">Dashboard</a></li>';
echo '<li><a href="logout.php">Logout</a></li>';
echo '</ul>';
echo '</nav>';
echo '</header>';
