<?php
// Status: 16.02.2025 15:00 (MEZ)
// Database – Stellt eine Verbindung zur Datenbank her und bietet Methoden zum Abrufen von Daten

class Database {
    private $host = 'localhost';
    private $dbName = 'csm_db1';
    private $username = 'csm_db1';
    private $password = 'csm74074csm';
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
}
?>
