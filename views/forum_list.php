<?php
// Status: 16.02.2025 16:15 (MEZ)
// Zeigt eine Liste aller Foren an

require_once '../core/Database.php';
require_once '../controllers/forumController.php';

$db = new Database();
$forumController = new ForumController($db->getConnection());

$forums = $forumController->getForums();
?>

<ul>
    <?php foreach ($forums as $forum): ?>
        <li><a href="forum_view.php?forum_id=<?= $forum['id'] ?>"><?= htmlspecialchars($forum['title']) ?></a></li>
    <?php endforeach; ?>
</ul>
