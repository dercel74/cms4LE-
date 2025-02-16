<?php
// Status: 16.02.2025 15:25 (MEZ)
// Create Post – Seite zur Erstellung eines neuen Beitrags

require_once '../core/Database.php';
require_once '../controllers/createPostController.php';

$db = new Database();
$createPostController = new CreatePostController($db->getConnection());

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $userId = $_SESSION['user_id']; // Angenommen, der Benutzer ist eingeloggt

    $createPostController->createPost($title, $content, $userId);
    header('Location: /public/posts.php');
}

?>

<form method="post">
    <label for="title">Titel</label>
    <input type="text" name="title" id="title" required>

    <label for="content">Inhalt</label>
    <textarea name="content" id="content" required></textarea>

    <button type="submit">Beitrag erstellen</button>
</form>
