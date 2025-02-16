<?php
// Status: 16.02.2025 16:25 (MEZ)
// UserModel – Verarbeitet alle Datenbankoperationen für Benutzer (Registrierung, Login, Profil)

class UserModel {
    private $db;
    private $table = 'users';

    public function __construct($db) {
        $this->db = $db;
    }

    public function registerUser($username, $password, $email) {
        $stmt = $this->db->prepare("INSERT INTO $this->table (username, password, email) VALUES (:username, :password, :email)");
        return $stmt->execute([
            ':username' => $username,
            ':password' => password_hash($password, PASSWORD_DEFAULT),
            ':email' => $email
        ]);
    }

    public function loginUser($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE username = :username");
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }

    public function getUserById($userId) {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id = :id");
        $stmt->execute([':id' => $userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
