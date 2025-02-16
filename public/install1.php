// Datei: /public/install.php (UID: f2a0b9e5)
// Status: 16.02.2025 14:00 (MEZ)

// Installationsskript für das CMS

<?php
require_once '../config/config.php';
require_once '../core/Database.php';

class Installer {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function checkRequirements() {
        $errors = [];

        // PHP Version check
        if (version_compare(PHP_VERSION, '7.4.0', '<')) {
            $errors[] = 'PHP Version 7.4.0 oder höher wird benötigt.';
        }

        // MySQLi Extension check
        if (!extension_loaded('mysqli')) {
            $errors[] = 'MySQLi Extension wird benötigt.';
        }

        return $errors;
    }

    public function createDatabaseTables() {
        $this->db->query(file_get_contents('../data/schema.sql'));
    }

    public function insertSampleData() {
        $this->db->query(file_get_contents('../data/posts.sql'));
        $this->db->query(file_get_contents('../data/forums.sql'));
    }

    public function runInstallation() {
        $errors = $this->checkRequirements();
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "<p>Fehler: $error</p>";
            }
            return false;
        }

        // Datenbanktabellen erstellen
        $this->createDatabaseTables();

        // Beispiel-Daten einfügen
        $this->insertSampleData();

        echo "<p>Installation erfolgreich abgeschlossen!</p>";
        return true;
    }
}

// Installation starten
$installer = new Installer();
$installer->runInstallation();

?>
