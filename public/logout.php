<?php
// Status: 16.02.2025 16:45 (MEZ)
// Logout – Benutzer abmelden

session_start();
session_destroy();

header('Location: login.php');
exit;
?>
