<?php
// Status: 16.02.2025 15:45 (MEZ)
// Kommentar Seite – Zeigt Kommentare und ermöglicht das Hinzufügen von Kommentaren zu Beiträgen

require_once '../core/Database.php';
require_once '../controllers/commentController.php';

$db = new Database();
$commentController = new CommentController($db->getConnection());

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $content = $_POST['content'];
    $postId = $_GET['post_id']; // Die ID des Beitrags
    $userId = $_SESSION['user_id']; // Angenommen, der Benutzer ist eingeloggt

    $commentController->addComment($postId, $userId, $content);
    header("Location: comment.php?post_id=$postId");
}

$postId = $_GET['post_id'];
$comments = $commentController->getComments($postId);
?>

<h3>Kommentare</h3>
<?php foreach ($comments as $comment): ?>
    <p><?= htmlspecialchars($comment['content']) ?></p>
<?php endforeach; ?>

<form method="post">
    <label for="content">Kommentar</label>
    <textarea name="content" id="content" required></textarea>
    <button type="submit">Kommentar hinzufügen</button>
</form>
