<?php
// Status: 16.02.2025 14:55 (MEZ)
// Post Controller – Verarbeitet Post-bezogene Anfragen

class PostController {
    private $postModel;
    private $db;

    public function __construct($db) {
        $this->db = $db;
        $this->postModel = new PostModel($this->db);
    }

    public function getPost($id) {
        return $this->postModel->getPostById($id);
    }

    public function getPostsByForum($forumId) {
        return $this->postModel->getPostsByForumId($forumId);
    }
}
?>
