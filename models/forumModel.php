<?php
// Status: 16.02.2025 15:55 (MEZ)
// ForumModel – Verarbeitet alle Datenbankoperationen für Foren (Erstellung, Anzeige)

class ForumModel {
    private $db;
    private $table = 'forums';

    public function __construct($db) {
        $this->db = $db;
    }

    public function createForum($title, $description) {
        $stmt = $this->db->prepare("INSERT INTO $this->table (title, description) VALUES (:title, :description)");
        return $stmt->execute([':title' => $title, ':description' => $description]);
    }

    public function getForums() {
        $stmt = $this->db->prepare("SELECT * FROM $this->table ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getForumById($forumId) {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id = :id");
        $stmt->execute([':id' => $forumId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
