<?php
// Status: 16.02.2025 15:40 (MEZ)
// CommentController – Verarbeitet das Hinzufügen von Kommentaren

class CommentController {
    private $commentModel;
    private $db;

    public function __construct($db) {
        $this->db = $db;
        $this->commentModel = new CommentModel($this->db);
    }

    public function addComment($postId, $userId, $content) {
        return $this->commentModel->addComment($postId, $userId, $content);
    }

    public function getComments($postId) {
        return $this->commentModel->getCommentsByPost($postId);
    }
}
?>
