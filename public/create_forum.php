<?php
// Status: 16.02.2025 16:00 (MEZ)
// Forum erstellen – Seite zur Erstellung neuer Foren

require_once '../core/Database.php';
require_once '../controllers/forumController.php';

$db = new Database();
$forumController = new ForumController($db->getConnection());

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $forumController->createForum($title, $description);
    header('Location: /public/forums.php');
}

?>

<form method="post">
    <label for="title">Titel</label>
    <input type="text" name="title" id="title" required>

    <label for="description">Beschreibung</label>
    <textarea name="description" id="description" required></textarea>

    <button type="submit">Forum erstellen</button>
</form>
