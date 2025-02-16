<?php
// Status: 16.02.2025 14:55 (MEZ)
// Search Controller – Verarbeitet Suchanfragen im Forum

class SearchController {
    private $searchModel;
    private $db;

    public function __construct($db) {
        $this->db = $db;
        $this->searchModel = new SearchModel($this->db);
    }

    public function searchContent($query) {
        return $this->searchModel->searchContent($query);
    }

    public function searchPosts($query) {
        return $this->searchModel->searchPosts($query);
    }
}
?>
