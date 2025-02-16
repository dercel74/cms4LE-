// Datei: /public/install.php (UID: f4a2b6d8)
// Status: 16.02.2025 14:05 (MEZ)

// Installationsskript zur Einrichtung der Datenbank

<?php
require_once '../config/config.php';
require_once '../core/Database.php';

// Verbindung zur Datenbank herstellen
$db = new Database();
$conn = $db->getConnection();

// SQL-Dateien einlesen
$schemaFile = '../data/schema.sql';
$schemaSql = file_get_contents($schemaFile);

// SQL-Befehle ausführen
try {
    $conn->exec($schemaSql);
    echo "Die Datenbank wurde erfolgreich installiert.";
} catch (PDOException $e) {
    echo "Fehler bei der Installation: " . $e->getMessage();
}
?>
