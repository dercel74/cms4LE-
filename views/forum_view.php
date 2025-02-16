<?php
// Status: 16.02.2025 16:10 (MEZ)
// Ansicht für Forenbeiträge

require_once '../core/Database.php';
require_once '../controllers/forumController.php';

$db = new Database();
$forumController = new ForumController($db->getConnection());

$forumId = $_GET['forum_id'];
$forumDetails = $forumController->getForumDetails($forumId);
?>

<h3><?= htmlspecialchars($forumDetails['title']) ?></h3>
<p><?= htmlspecialchars($forumDetails['description']) ?></p>
