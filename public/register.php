<?php
// Status: 16.02.2025 16:30 (MEZ)
// Registrierung – Seite zur Benutzerregistrierung

require_once '../core/Database.php';
require_once '../controllers/userController.php';

$db = new Database();
$userController = new UserController($db->getConnection());

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $userController->registerUser($username, $password, $email);
    header('Location: login.php');
}

?>

<form method="post">
    <label for="username">Benutzername</label>
    <input type="text" name="username" id="username" required>

    <label for="email">E-Mail</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Passwort</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Registrieren</button>
</form>
