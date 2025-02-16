<?php
// contentModel.php – TITEL
// Status: Bearbeitet, Stand: 16.02.2025 10:53 (MEZ) (Aktuelle Uhrzeit Deutschland Berlin)
// Zuletzt: 16.02.2025 10:52 || Heute: 16.02.2025 10:53
// Pfad: /models/contentModel.php (UID: 10j1k2l3m)

class ContentModel {
    public function getContentById($id) {
        // SQL-Abfrage für das Abrufen von Content-Daten nach ID
        $query = "SELECT * FROM content WHERE id = $id";
        // Rückgabe der Inhalte (normalerweise mit PDO oder ähnlichem)
        return ["id" => $id, "title" => "Beispiel Titel", "body" => "Beispiel Body"];
    }

    public function createContent($title, $body) {
        // SQL-Anweisung für das Erstellen von Content
        $query = "INSERT INTO content (title, body) VALUES ('$title', '$body')";
        // Führen Sie die Query aus (z.B. mit PDO)
        return true;
    }
}
?>
