<?php
// Status: 16.02.2025 16:40 (MEZ)
// Index – Startseite nach Anmeldung

require_once '../core/Database.php';
require_once '../controllers/userController.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$db = new Database();
$userController = new UserController($db->getConnection());

$user = $userController->getUserById($_SESSION['user_id']);
?>

<h3>Willkommen, <?= htmlspecialchars($user['username']) ?>!</h3>
<p><a href="logout.php">Abmelden</a></p>
