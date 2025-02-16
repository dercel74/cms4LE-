<?php
// Status: 16.02.2025 16:05 (MEZ)
// Alle Foren anzeigen

require_once '../core/Database.php';
require_once '../controllers/forumController.php';

$db = new Database();
$forumController = new ForumController($db->getConnection());

$forums = $forumController->getForums();
?>

<h3>Foren</h3>
<?php foreach ($forums as $forum): ?>
    <div>
        <h4><?= htmlspecialchars($forum['title']) ?></h4>
        <p><?= htmlspecialchars($forum['description']) ?></p>
        <a href="forum_detail.php?forum_id=<?= $forum['id'] ?>">Forum ansehen</a>
    </div>
<?php endforeach; ?>
