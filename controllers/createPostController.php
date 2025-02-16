<?php
// Status: 16.02.2025 15:15 (MEZ)
// CreatePostController – Verarbeitet die Erstellung neuer Beiträge

class CreatePostController {
    private $postModel;
    private $db;

    public function __construct($db) {
        $this->db = $db;
        $this->postModel = new PostModel($this->db);
    }

    public function createPost($title, $content, $userId) {
        return $this->postModel->createPost($title, $content, $userId);
    }
}
?>
