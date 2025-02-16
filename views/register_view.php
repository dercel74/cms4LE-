<?php
// registerView.php – Registrierungsansicht
// Status: Bearbeitet, Stand: 16.02.2025 11:11 (MEZ)
// Zuletzt: 16.02.2025 11:11 || Heute: 16.02.2025 11:12
// Pfad: /views/registerView.php (UID: 7f8a3b9c)

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrieren</title>
</head>
<body>
    <h1>Registrieren</h1>
    <form method="post" action="index.php">
        <label for="username">Benutzername:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">E-Mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Passwort:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="register">Registrieren</button>
    </form>
    <p>Schon ein Konto? <a href="loginView.php">Login</a></p>
</body>
</html>
