<?php
// Status: 16.02.2025 15:35 (MEZ)
// CommentModel – Verarbeitet alle Datenbankoperationen für Kommentare

class CommentModel {
    private $db;
    private $table = 'comments';

    public function __construct($db) {
        $this->db = $db;
    }

    public function addComment($postId, $userId, $content) {
        $stmt = $this->db->prepare("INSERT INTO $this->table (post_id, user_id, content) VALUES (:post_id, :user_id, :content)");
        return $stmt->execute([':post_id' => $postId, ':user_id' => $userId, ':content' => $content]);
    }

    public function getCommentsByPost($postId) {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE post_id = :post_id ORDER BY created_at DESC");
        $stmt->execute([':post_id' => $postId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
