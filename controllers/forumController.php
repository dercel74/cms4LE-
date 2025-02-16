<?php
// Status: 16.02.2025 15:50 (MEZ)
// ForumController – Verarbeitet alle Operationen im Zusammenhang mit Foren

class ForumController {
    private $forumModel;
    private $db;

    public function __construct($db) {
        $this->db = $db;
        $this->forumModel = new ForumModel($this->db);
    }

    public function createForum($title, $description) {
        return $this->forumModel->createForum($title, $description);
    }

    public function getForums() {
        return $this->forumModel->getForums();
    }

    public function getForumDetails($forumId) {
        return $this->forumModel->getForumById($forumId);
    }
}
?>
