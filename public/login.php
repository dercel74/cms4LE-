<?php
// Status: 16.02.2025 16:35 (MEZ)
// Login – Seite zur Benutzeranmeldung

// Einbindung der Datenbank- und Controller-Dateien
require_once '../core/Database.php';
require_once '../controllers/userController.php';

// Session starten
session_start();

// Verbindung zur Datenbank herstellen
$db = new Database();
$userController = new UserController($db->getConnection());

// Login-Verarbeitung
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Eingabewerte sicher holen
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Benutzer einloggen
    $user = $userController->loginUser($username, $password);
    
    // Wenn der Benutzer existiert und das Passwort korrekt ist
    if ($user) {
        // Session-Variablen setzen
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        
        // Weiterleitung zur Startseite oder Dashboard
        header('Location: index.php');
        exit();
    } else {
        // Fehlermeldung bei falschen Anmeldedaten
        $error = "Falsche Anmeldedaten.";
    }
}
?>

<!-- HTML-Formular für die Benutzeranmeldung -->
<form method="post" action="login.php">
    <label for="username">Benutzername</label>
    <input type="text" name="username" id="username" required>

    <label for="password">Passwort</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Anmelden</button>
</form>

<!-- Fehlermeldung anzeigen, falls vorhanden -->
<?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
