<?php
// Status: 16.02.2025 15:05 (MEZ)
// Search Engine – Verarbeitet die Suchanfragen im System und liefert relevante Ergebnisse

class SearchEngine {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function searchContent($query) {
        $stmt = $this->db->prepare("SELECT * FROM content WHERE title LIKE :query OR body LIKE :query");
        $stmt->execute([':query' => "%$query%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function searchPosts($query) {
        $stmt = $this->db->prepare("SELECT * FROM posts WHERE title LIKE :query OR content LIKE :query");
        $stmt->execute([':query' => "%$query%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
