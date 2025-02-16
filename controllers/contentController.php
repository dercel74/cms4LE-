<?php
// Status: 16.02.2025 14:50 (MEZ)
// Content Controller – Verarbeitet Content-bezogene Anfragen

class ContentController {
    private $contentModel;
    private $db;

    public function __construct($db) {
        $this->db = $db;
        $this->contentModel = new ContentModel($this->db);
    }

    public function getAllContent() {
        return $this->contentModel->getAllContent();
    }

    public function getContent($id) {
        return $this->contentModel->getContentById($id);
    }

    public function createContent($userId, $title, $body) {
        return $this->contentModel->createContent($userId, $title, $body);
    }
}
?>
