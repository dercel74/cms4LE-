<?php
// Status: 16.02.2025 16:50 (MEZ)
// Benutzerprofil – Zeigt Benutzerinformationen und erlaubt die Bearbeitung

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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $userController->updateUserEmail($_SESSION['user_id'], $email);
    header('Location: profile.php');
}
?>

<h3>Profil von <?= htmlspecialchars($user['username']) ?></h3>

<form method="post">
    <label for="email">E-Mail</label>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($user['email']) ?>" required>

    <button type="submit">E-Mail aktualisieren</button>
</form>
