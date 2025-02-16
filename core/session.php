<?php
// Status: 16.02.2025 15:05 (MEZ)
// Session – Verarbeitet die Benutzersitzung und verwaltet Login-Status

class Session {
    public function __construct() {
        session_start();
    }

    public function login($userId) {
        $_SESSION['user_id'] = $userId;
    }

    public function logout() {
        session_unset();
        session_destroy();
    }

    public function getUserId() {
        return isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    }

    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }
}
?>
