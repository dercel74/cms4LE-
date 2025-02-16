<?php
// Status: 16.02.2025 15:20 (MEZ)
// PostModel – Verarbeitet alle Datenbankoperationen für Beiträge (Erstellung, Bearbeitung, Anzeige)

class PostModel {
    private $db;
    private $table = 'posts';

    public function __construct($db) {
        $this->db = $db;
    }

    public function createPost($title, $content, $userId) {
        $stmt = $this->db->prepare("INSERT INTO $this->table (title, content, user_id) VALUES (:title, :content, :user_id)");
        return $stmt->execute([':title' => $title, ':content' => $content, ':user_id' => $userId]);
    }

    public function getPosts() {
        $stmt = $this->db->prepare("SELECT * FROM $this->table ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
