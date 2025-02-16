<?php
// database.php – Datenbankverbindung
// Status: Bearbeitet, Stand: 16.02.2025 10:59 (MEZ)
// Zuletzt: 16.02.2025 10:59 || Heute: 16.02.2025 11:00
// Pfad: /config/database.php (UID: 2a3b4c9f)

class Database {

    // Datenbankverbindung aufbauen
    public function connect() {
        $host = 'localhost';
        $user = 'csm_db1';
        $password = 'csm74074csm';
        $database = 'csm_db1';

        $connection = new mysqli($host, $user, $password, $database);

        if ($connection->connect_error) {
            die("Datenbankverbindung fehlgeschlagen: " . $connection->connect_error);
        }

        return $connection;
    }

    // SQL-Abfragen ausführen
    public function prepare($query) {
        return $this->connect()->prepare($query);
    }
}
?>
