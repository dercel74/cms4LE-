<?php
// settings.php – Benutzereinstellungen
// Status: Bearbeitet, Stand: 16.02.2025 10:53 (MEZ) (Aktuelle Uhrzeit Deutschland Berlin)
// Zuletzt: 16.02.2025 10:52 || Heute: 16.02.2025 10:53
// Pfad: /public/settings.php (UID: PUBLIC014)

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user_email = $_SESSION['user'];

// Dummy-Daten für Einstellungen
$settings = [
    'email' => $user_email,
    'language' => 'Deutsch',
    'notifications' => 'Aktiviert'
];

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Einstellungen</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="container">
        <h1>Benutzereinstellungen</h1>

        <form method="POST" action="">
            <label for="email">E-Mail:</label>
            <input type="email" name="email" value="<?= $settings['email']; ?>" required>

            <label for="language">Sprache:</label>
            <select name="language">
                <option value="Deutsch" <?= $settings['language'] === 'Deutsch' ? 'selected' : ''; ?>>Deutsch</option>
                <option value="Englisch" <?= $settings['language'] === 'Englisch' ? 'selected' : ''; ?>>Englisch</option>
            </select>

            <label for="notifications">Benachrichtigungen:</label>
            <select name="notifications">
                <option value="Aktiviert" <?= $settings['notifications'] === 'Aktiviert' ? 'selected' : ''; ?>>Aktiviert</option>
                <option value="Deaktiviert" <?= $settings['notifications'] === 'Deaktiviert' ? 'selected' : ''; ?>>Deaktiviert</option>
            </select>

            <button type="submit">Speichern</button>
        </form>
    </div>

    <?php include('includes/footer.php'); ?>
</body>
</html>
