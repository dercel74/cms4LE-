<?php
// install_new.php – Alternative Installationsdatei
// Status: Bearbeitet, Stand: 16.02.2025 12:00 (MEZ)

require_once(__DIR__ . '/../config/config.php');  // Lade die Datenbankkonfiguration
require_once(__DIR__ . '/../core/Database.php');  // Lade die Datenbankklasse

// Funktion zum Verbinden mit der Datenbank
function connectToDatabase() {
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Verbindung zum MySQL-Server erfolgreich!<br>";

        // Prüfe, ob die Datenbank existiert
        $pdo->exec("CREATE DATABASE IF NOT EXISTS " . DB_NAME);
        echo "Datenbank 'cms' wurde erfolgreich erstellt (falls nicht bereits vorhanden).<br>";
        
        // Wähle die `cms`-Datenbank aus
        $pdo->exec("USE " . DB_NAME);
        echo "Datenbank 'cms' ausgewählt.<br>";
        
        return $pdo;
    } catch (PDOException $e) {
        die("Verbindungsfehler: " . $e->getMessage());
    }
}

// Funktion zum Erstellen der Tabellen
function createTables($pdo) {
    $sqlFiles = [
        __DIR__ . '/../data/schema.sql',  // Pfad zu deiner SQL-Datei
        __DIR__ . '/../data/forums.sql',
        __DIR__ . '/../data/posts.sql',
    ];

    foreach ($sqlFiles as $file) {
        if (file_exists($file)) {
            $sql = file_get_contents($file);
            try {
                $pdo->exec($sql);
                echo "Tabellen aus {$file} wurden erfolgreich erstellt.<br>";
            } catch (PDOException $e) {
                echo "Fehler beim Erstellen der Tabellen aus {$file}: " . $e->getMessage() . "<br>";
            }
        } else {
            echo "SQL-Datei {$file} nicht gefunden.<br>";
        }
    }
}

// Funktion zur Benutzererstellung (optional)
function createAdminUser($pdo) {
    $password = password_hash('admin123', PASSWORD_DEFAULT);  // Standard-Admin-Passwort
    $sql = "INSERT INTO users (username, email, password, role) VALUES ('admin', 'admin@example.com', :password, 'admin')";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':password', $password);
    
    try {
        $stmt->execute();
        echo "Admin-Benutzer erfolgreich erstellt.<br>";
    } catch (PDOException $e) {
        echo "Fehler beim Erstellen des Admin-Benutzers: " . $e->getMessage() . "<br>";
    }
}

// Hauptprozess
$pdo = connectToDatabase();
createTables($pdo);
createAdminUser($pdo);  // Diese Zeile kannst du entfernen, wenn du keinen Admin anlegen möchtest

echo "Installationsprozess abgeschlossen!<br>";
?>
