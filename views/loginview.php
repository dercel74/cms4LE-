<?php
// loginView.php – Login-Ansicht
// Status: Bearbeitet, Stand: 16.02.2025 11:10 (MEZ)
// Zuletzt: 16.02.2025 11:10 || Heute: 16.02.2025 11:11
// Pfad: /views/loginView.php (UID: 6d3b4e9f)

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="index.php">
        <label for="email">E-Mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Passwort:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>
    <p>Noch kein Konto? <a href="registerView.php">Registrieren</a></p>
</body>
</html>
